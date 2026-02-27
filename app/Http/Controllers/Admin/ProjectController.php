<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProjectRequest;
use App\Http\Requests\Admin\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(15);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $data['features'] = array_filter(explode("\n", $data['features'] ?? ''));
        $data['tech_stack'] = array_filter(explode("\n", $data['tech_stack'] ?? ''));

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('projects/thumbnails', 's3');
        }

        $project = Project::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $i => $image) {
                $path = $image->store('projects/gallery', 's3');
                $project->images()->create(['image_path' => $path, 'order' => $i]);
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil ditambahkan.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $data['features'] = array_filter(explode("\n", $data['features'] ?? ''));
        $data['tech_stack'] = array_filter(explode("\n", $data['tech_stack'] ?? ''));

        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail) {
                Storage::disk('s3')->delete($project->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('projects/thumbnails', 's3');
        }

        $data['slug'] = Str::slug($data['title']);

        $project->update($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $i => $image) {
                $path = $image->store('projects/gallery', 's3');
                $project->images()->create(['image_path' => $path, 'order' => $project->images()->count() + $i]);
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil diperbarui.');
    }

    public function destroy(Project $project)
    {
        if ($project->thumbnail) {
            Storage::disk('s3')->delete($project->thumbnail);
        }
        foreach ($project->images as $image) {
            Storage::disk('s3')->delete($image->image_path);
        }
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil dihapus.');
    }

    public function destroyImage(Project $project, ProjectImage $image)
    {
        Storage::disk('s3')->delete($image->image_path);
        $image->delete();
        return back()->with('success', 'Gambar berhasil dihapus.');
    }
}
