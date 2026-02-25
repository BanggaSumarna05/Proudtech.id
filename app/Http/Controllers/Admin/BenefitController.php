<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    public function index()
    {
        $benefits = Benefit::orderBy('order')->paginate(15);
        return view('admin.benefits.index', compact('benefits'));
    }

    public function create()
    {
        return view('admin.benefits.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        Benefit::create($data);
        return redirect()->route('admin.benefits.index')->with('success', 'Manfaat berhasil ditambahkan.');
    }

    public function edit(Benefit $benefit)
    {
        return view('admin.benefits.edit', compact('benefit'));
    }

    public function update(Request $request, Benefit $benefit)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        $benefit->update($data);
        return redirect()->route('admin.benefits.index')->with('success', 'Manfaat berhasil diperbarui.');
    }

    public function destroy(Benefit $benefit)
    {
        $benefit->delete();
        return redirect()->route('admin.benefits.index')->with('success', 'Manfaat berhasil dihapus.');
    }
}
