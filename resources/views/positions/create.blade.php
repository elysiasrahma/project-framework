@extends('tailwind')

@section('title', 'Form Jabatan')
@section('header', 'Form Input Jabatan')

@section('content')
<form action="{{ route('positions.store') }}" method="POST" class="space-y-6">
    @csrf

    <div>
        <label for="nama_jabatan" class="block text-sm font-medium text-[#4b3b2b]">Nama Jabatan</label>
        <input type="text" id="nama_jabatan" name="nama_jabatan"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="gaji_pokok" class="block text-sm font-medium text-[#4b3b2b]">Gaji Pokok</label>
        <input type="number" step="0.01" id="gaji_pokok" name="gaji_pokok"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div class="text-right">
        <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48]">
            Simpan
        </button>
    </div>
</form>
@endsection

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input Pegawai</title>
</head>
<body>
    <h1 class="mb-4">Form Pegawai</h1>
    <form action="{{  route('positions.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_jabatan">Nama Jabatan: </label></td>
                <td><input type="text" id="nama_jabatan" name="nama_jabatan"></td>
            </tr>
            <tr>
                <td><label for="gaji_pokok">Gaji Pokok: </label></td>
                <td><input type="decimal" id="gaji_pokok" name="gaji_pokok"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html> -->