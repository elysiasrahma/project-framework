{{-- resources/views/employees/edit.blade.php --}}
@extends('tailwind')

@section('title', 'Edit Pegawai')
@section('header', 'Edit Data Pegawai')

@section('content')
<form action="{{ route('employees.update', $employee->id) }}" method="POST" class="space-y-6">
    @csrf
    @method('PUT')

    <div>
        <label for="nama_lengkap" class="block text-sm font-medium">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="email" class="block text-sm font-medium">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $employee->email) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="nomor_telepon" class="block text-sm font-medium">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon', $employee->nomor_telepon) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="tanggal_lahir" class="block text-sm font-medium">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="alamat" class="block text-sm font-medium">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $employee->alamat) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="tanggal_masuk" class="block text-sm font-medium">Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="departemen_id" class="block text-sm font-medium">Departemen</label>
        <select name="departemen_id" id="departemen_id"
                class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
            @foreach ($department as $d)
                <option value="{{ $d->id }}" {{ old('departemen_id', $employee->departemen_id) == $d->id ? 'selected' : '' }}>
                    {{ $d->nama_departemen }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="jabatan_id" class="block text-sm font-medium">Jabatan</label>
        <select name="jabatan_id" id="jabatan_id"
                class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
            @foreach ($jabatan as $j)
                <option value="{{ $j->id }}" {{ old('jabatan_id', $employee->jabatan_id) == $j->id ? 'selected' : '' }}>
                    {{ $j->nama_jabatan }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="status" class="block text-sm font-medium">Status</label>
        <select name="status" id="status"
                class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
            <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ old('status', $employee->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
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
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="{{ old('email', $employee->email) }}"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $employee->nomor_telepon) }}"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="{{ old('alamat', $employee->alamat) }}"></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td><input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}"></td>
            </tr>
            <tr>
                <td class="text-white">Departemen</td>
                <td>
                    <select name="departemen_id" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        @foreach ($department as $d)
                        <option class="text-black" value="{{ $d->id }}" {{ old('departemen_id', $employee->departemen_id) == $d->id ? 'selected' : ''}}>{{ $d->nama_departemen }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="text-white">Jabatan</td>
                <td>
                    <select name="jabatan_id" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        @foreach ( $jabatan as $j)
                        <option class="text-black" value="{{ $j->id }}" {{ old('jabatan_id', $employee->jabatan_id) == $j->id ? 'selected' : '' }}>{{ $j->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="tidak aktif" {{ old('status', $employee->status) == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </td>
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