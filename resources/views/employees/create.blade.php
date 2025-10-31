{{-- resources/views/employees/create.blade.php --}}
@extends('tailwind')

@section('title', 'Form Pegawai')
@section('header', 'Form Input Pegawai')

@section('content')
<form action="{{ route('employees.store') }}" method="POST" class="space-y-6">
    @csrf

    <div>
        <label for="nama_lengkap" class="block text-sm font-medium">Nama Lengkap</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="email" class="block text-sm font-medium">Email</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="nomor_telepon" class="block text-sm font-medium">Nomor Telepon</label>
        <input type="text" id="nomor_telepon" name="nomor_telepon" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="tanggal_lahir" class="block text-sm font-medium">Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="alamat" class="block text-sm font-medium">Alamat</label>
        <textarea id="alamat" name="alamat" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]"></textarea>
    </div>

    <div>
        <label for="tanggal_masuk" class="block text-sm font-medium">Tanggal Masuk</label>
        <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="status" class="block text-sm font-medium">Status</label>
        <select id="status" name="status" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
        </select>
    </div>

    <div>
        <label for="departemen_id" class="block text-sm font-medium">Departemen</label>
        <select id="departemen_id" name="departemen_id" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
            @foreach ($departments as $dept)
                <option value="{{ $dept->id }}">{{ $dept->nama_departemen }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="jabatan_id" class="block text-sm font-medium">Jabatan</label>
        <select id="jabatan_id" name="jabatan_id" class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
            @foreach ($positions as $jabatan)
                <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
            @endforeach
        </select>
    </div>

    <div class="text-right">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48]">
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
    <form action="{{  route('employees.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_lengkap">Nama Lengkap: </label></td>
                <td><input type="text" id="nama_lengkap" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="nomor_telepon">Nomor Telepon: </label></td>
                <td><input type="text" id="nomor_telepon" name="nomor_telepon"></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir: </label></td>
                <td><input type="date" id="tanggal_lahir" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat: </label></td>
                <td><textarea id="alamat" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td><label for="tanggal_masuk">Tanggal Masuk: </label></td>
                <td><input type="date" id="tanggal_masuk" name="tanggal_masuk"></td>
            </tr>
            <tr>
                <td><label for="status">Status: </label></td>
                <td>
                    <select id="status" name="status">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="departemen_id">Departemen: </label></td>
                <td>
                    <select id="departemen_id" name="departemen_id">
                        @foreach ($departments as $dept)
                        <option value="{{ $dept->id }}">{{ $dept->nama_departemen }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="jabatan_id">Jabatan: </label></td>
                <td>
                    <select id="jabatan_id" name="jabatan_id">
                        @foreach ($positions as $jabatan)
                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </td>
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