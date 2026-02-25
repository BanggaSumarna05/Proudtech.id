<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Standard;
use Illuminate\Http\Request;

class StandardController extends Controller
{
    public function index()
    {
        $standards = Standard::orderBy('order')->paginate(15);
        return view('admin.standards.index', compact('standards'));
    }

    public function create()
    {
        return view('admin.standards.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'color' => 'required|string|max:50',
            'order' => 'nullable|integer',
        ]);

        Standard::create($data);
        return redirect()->route('admin.standards.index')->with('success', 'Standar berhasil ditambahkan.');
    }

    public function edit(Standard $standard)
    {
        return view('admin.standards.edit', compact('standard'));
    }

    public function update(Request $request, Standard $standard)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'color' => 'required|string|max:50',
            'order' => 'nullable|integer',
        ]);

        $standard->update($data);
        return redirect()->route('admin.standards.index')->with('success', 'Standar berhasil diperbarui.');
    }

    public function destroy(Standard $standard)
    {
        $standard->delete();
        return redirect()->route('admin.standards.index')->with('success', 'Standar berhasil dihapus.');
    }
}
