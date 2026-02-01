@extends('tailwind')

@section('title', 'Edit Gaji')
@section('header', 'Edit Data Gaji Pegawai')

@section('content')
<form action="{{ route('salaries.update', $salary->id) }}" method="POST" class="space-y-6">
    @csrf
    @method('PUT')

    <div>
        <label for="karyawan_id" class="block text-sm font-medium text-[#4b3b2b]">Karyawan ID</label>
        <input type="text" name="karyawan_id" id="karyawan_id"
               value="{{ old('karyawan_id', $salary->karyawan_id) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="bulan" class="block text-sm font-medium text-[#4b3b2b]">Bulan</label>
        <input type="text" name="bulan" id="bulan"
               value="{{ old('bulan', $salary->bulan) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="gaji_pokok" class="block text-sm font-medium text-[#4b3b2b]">Gaji Pokok</label>
        <input type="number" step="0.01" name="gaji_pokok" id="gaji_pokok"
               value="{{ old('gaji_pokok', $salary->gaji_pokok) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="tunjangan" class="block text-sm font-medium text-[#4b3b2b]">Tunjangan</label>
        <input type="number" step="0.01" name="tunjangan" id="tunjangan"
               value="{{ old('tunjangan', $salary->tunjangan) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="potongan" class="block text-sm font-medium text-[#4b3b2b]">Potongan</label>
        <input type="number" step="0.01" name="potongan" id="potongan"
               value="{{ old('potongan', $salary->potongan) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div class="text-right">
        <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48]">
            Update
        </button>
    </div>
</form>
@endsection

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Edit Form</title>
</head>
<body>
    <h2>Edit Data Pegawai</h2>
    <form action="{{ route('salaries.update', $salary->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Karyawan ID</td>
                <td><input type="text" name="karyawan_id" value="{{ old('karyawan_id', $salary->karyawan_id) }}"></td>
            </tr>
            <tr>
                <td>Bulan</td>
                <td><input type="text" name="bulan" value="{{ old('bulan', $salary->bulan) }}"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td><input type="decimal" name="gaji_pokok" value="{{ old('gaji_pokok', $salary->gaji_pokok) }}"></td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td><input type="decimal" name="tunjangan" value="{{ old('tunjangan', $salary->tunjangan) }}"></td>
            </tr>
            <tr>
                <td>Potongan</td>
                <td><input type="decimal" name="potongan" value="{{ old('potongan', $salary->potongan) }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html> -->