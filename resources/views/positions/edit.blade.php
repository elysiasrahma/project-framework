@extends('tailwind')

@section('title', 'Edit Jabatan')
@section('header', 'Edit Data Jabatan')

@section('content')
<form action="{{ route('positions.update', $position->id) }}" method="POST" class="space-y-6">
    @csrf
    @method('PUT')

    <div>
        <label for="nama_jabatan" class="block text-sm font-medium text-[#4b3b2b]">Nama Jabatan</label>
        <input type="text" name="nama_jabatan" id="nama_jabatan"
               value="{{ old('nama_jabatan', $position->nama_jabatan) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="gaji_pokok" class="block text-sm font-medium text-[#4b3b2b]">Gaji Pokok</label>
        <input type="number" step="0.01" name="gaji_pokok" id="gaji_pokok"
               value="{{ old('gaji_pokok', $position->gaji_pokok) }}"
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
    <form action="{{ route('positions.update', $position->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nama Jabatan</td>
                <td><input type="text" name="nama_jabatan" value="{{ old('nama_jabatan', $position->nama_jabatan) }}"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td><input type="decimal" name="gaji_pokok" value="{{ old('gaji_pokok', $position->gaji_pokok) }}"></td>
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