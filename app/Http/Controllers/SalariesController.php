<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = Salary::with('employee')->latest()->paginate(10);
        return view('salaries.index', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('salaries.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'bulan' => 'required|string|max:10',
            'gaji_pokok' => 'required|decimal:0,2|min:0',
            'tunjangan' => 'required|decimal:0,2|min:0',
            'potongan' => 'required|decimal:0,2|min:0',
        ]);


        $total_gaji = $request->gaji_pokok + $request->tunjangan - $request->potongan;

        Salary::create([
            'karyawan_id' => $request->karyawan_id,
            'bulan' => $request->bulan,
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan' => $request->tunjangan,
            'potongan' => $request->potongan,
            'total_gaji' => $total_gaji,
        ]);

        return redirect()->route('salaries.index')->with('success', 'Data gaji berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salary = Salary::with('employee')->findOrFail($id);
        return view('salaries.show', compact('salary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salary = Salary::findOrFail($id);
        $employees = Employee::all();
        return view('salaries.edit', compact('salary', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'bulan' => 'required|string|max:10',
            'gaji_pokok' => 'required|decimal:0,2|min:0',
            'tunjangan' => 'required|decimal:0,2|min:0',
            'potongan' => 'required|decimal:0,2|min:0',
        ]);

        $salary = Salary::findOrFail($id);
        $total_gaji = $request->gaji_pokok + $request->tunjangan - $request->potongan;

        $salary->update([
            'karyawan_id' => $request->karyawan_id,
            'bulan' => $request->bulan,
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan' => $request->tunjangan,
            'potongan' => $request->potongan,
            'total_gaji' => $total_gaji,
        ]);

        return redirect()->route('salaries.index')->with('success', 'Data gaji berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salary = Salary::findOrFail($id);
        $salary->delete();

        return redirect()->route('salaries.index')->with('success', 'Data gaji berhasil dihapus.');
    }
}