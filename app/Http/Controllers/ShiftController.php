<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shifts = Shift::all();
        return view('shifts.index', compact('shifts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shifts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_shift' => 'required|string|max:255',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'kode_shift' => 'nullable|string|max:50',
            'deskripsi' => 'nullable|string',
        ]);

        Shift::create($request->all());

        return redirect()->route('shifts.index')
                         ->with('success', 'Shift berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Shift $shift)
{
    return view('shifts.show', compact('shift'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shift $shift)
    {
        return view('shifts.edit', compact('shift'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shift $shift)
{
    $request->validate([
        'nama_shift' => 'required|string|max:255',
        'jam_mulai' => 'required',
        'jam_selesai' => 'required',
        'kode_shift' => 'nullable|string|max:50',
        'deskripsi' => 'nullable|string',
    ]);

    $shift->update($request->all());

    return redirect()->route('shifts.index')
                     ->with('success', 'Shift berhasil diperbarui!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shift $shift)
    {
        $shift->delete();

        return redirect()->route('shifts.index')
                         ->with('success', 'Shift berhasil dihapus!');

    }
}
