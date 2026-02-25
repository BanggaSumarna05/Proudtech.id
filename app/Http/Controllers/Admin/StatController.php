<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $stats = Stat::orderBy('order')->paginate(15);
        return view('admin.stats.index', compact('stats'));
    }

    public function create()
    {
        return view('admin.stats.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'order' => 'nullable|integer',
        ]);

        Stat::create($data);
        return redirect()->route('admin.stats.index')->with('success', 'Statistik berhasil ditambahkan.');
    }

    public function edit(Stat $stat)
    {
        return view('admin.stats.edit', compact('stat'));
    }

    public function update(Request $request, Stat $stat)
    {
        $data = $request->validate([
            'number' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'order' => 'nullable|integer',
        ]);

        $stat->update($data);
        return redirect()->route('admin.stats.index')->with('success', 'Statistik berhasil diperbarui.');
    }

    public function destroy(Stat $stat)
    {
        $stat->delete();
        return redirect()->route('admin.stats.index')->with('success', 'Statistik berhasil dihapus.');
    }
}
