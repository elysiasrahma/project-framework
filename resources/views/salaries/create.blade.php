@extends('tailwind')

@section('title', 'Form Gaji')
@section('header', 'Form Input Gaji Pegawai')

@section('content')
@if ($errors->any())
    <div class="text-red-500 bg-white/10 p-4 rounded-md mb-6">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('salaries.store') }}" method="POST" class="space-y-6">
    @csrf

    <div>
        <label for="karyawan_id" class="block text-sm font-medium text-[#4b3b2b]">Karyawan ID</label>
        <input type="text" id="karyawan_id" name="karyawan_id"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="bulan" class="block text-sm font-medium text-[#4b3b2b]">Bulan</label>
        <input type="text" id="bulan" name="bulan"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="gaji_pokok" class="block text-sm font-medium text-[#4b3b2b]">Gaji Pokok</label>
        <input type="number" step="0.01" id="gaji_pokok" name="gaji_pokok"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="tunjangan" class="block text-sm font-medium text-[#4b3b2b]">Tunjangan</label>
        <input type="number" step="0.01" id="tunjangan" name="tunjangan"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="potongan" class="block text-sm font-medium text-[#4b3b2b]">Potongan</label>
        <input type="number" step="0.01" id="potongan" name="potongan"
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
    @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    <form action="{{  route('salaries.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="karyawan_id">Karyawan ID: </label></td>
                <td><input type="text" id="karyawan_id" name="karyawan_id"></td>
            </tr>
            <tr>
                <td><label for="bulan">Bulan: </label></td>
                <td><input type="text" id="bulan" name="bulan"></td>
            </tr>
            <tr>
                <td><label for="gaji_pokok">Gaji Pokok: </label></td>
                <td><input type="decimal" id="gaji_pokok" name="gaji_pokok"></td>
            </tr>
            <tr>
                <td><label for="tunjangan">tunjangan: </label></td>
                <td><input type="decimal" id="tunjangan" name="tunjangan"></td>
            </tr>
            <tr>
                <td><label for="potongan">potongan: </label></td>
                <td><input type="decimal" id="potongan" name="potongan"></td>
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