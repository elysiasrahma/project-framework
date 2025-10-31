@extends('tailwind')

@section('title', 'Daftar Absensi')
@section('header', 'Daftar Absensi')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-xl font-semibold text-[#4b3b2b]">Daftar Absensi</h1>

    <div class="mb-6 text-right">
    <a href="{{ route('employees.create') }}"
       class="inline-block px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48] transition">
       + Tambah
    </a>
</div>


    <div class="overflow-x-auto rounded-lg border border-[#e2d3be] shadow-sm bg-white/70">
        <table class="min-w-full text-sm text-[#4b3b2b]">
            <thead class="bg-[#f1e5d1] text-left">
                <tr>
                    <th class="px-4 py-2 border text-center">Karyawan ID</th>
                    <th class="px-4 py-2 border text-center">Tanggal</th>
                    <th class="px-4 py-2 border text-center">Waktu Masuk</th>
                    <th class="px-4 py-2 border text-center">Waktu Keluar</th>
                    <th class="px-4 py-2 border text-center">Status Absensi</th>
                    <th class="px-4 py-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attend)
                <tr>
                    <td class="px-4 py-2 border text-center">{{ $attend->karyawan_id }}</td>
                    <td class="px-4 py-2 border text-center">{{ $attend->tanggal }}</td>
                    <td class="px-4 py-2 border text-center">{{ $attend->waktu_masuk }}</td>
                    <td class="px-4 py-2 border text-center">{{ $attend->waktu_keluar }}</td>
                    <td class="px-4 py-2 border text-center">{{ ucfirst($attend->status_absensi) }}</td>
                    <td class="px-4 py-2 border text-center space-x-1">
                        <a href="{{ route('attendances.show', $attend->id) }}"
                            class="inline-block px-3 py-1 rounded-md bg-[#d8c2a7]/60 text-[#4b3b2b] hover:bg-[#c9b598] hover:text-[#2d1d0d] shadow-sm transition">
                            Detail
                        </a>

                        <a href="{{ route('attendances.edit', $attend->id) }}"
                            class="inline-block px-3 py-1 rounded-md bg-[#a47c48]/70 text-white hover:bg-[#8f683c] shadow-sm transition">
                            Edit
                        </a>

                        <form action="{{ route('attendances.destroy', $attend->id) }}" method="POST" class="inline-block"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-3 py-1 rounded-md bg-red-500/70 text-white hover:bg-red-600 shadow-sm transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<!-- <!DOCTYPE html>

<html lang="en">
<head>
        
</head>
<body>
    @extends('master')
    @section('title', 'Daftar Pegawai')
    @section('content')
        <div class="container mt-5">
            <h1 class="mb-4">Daftar Pegawai</h1>
            <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Karyawan ID</th>
                    <th>Tanggal</th>
                    <th>Waktu Masuk</th>
                    <th>Waktu keluar</th>
                    <th>Status Absensi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($attendances as $attend)
                    <tr>
                        <td>{{ $attend->karyawan_id }}</td>
                        <td>{{ $attend->tanggal }}</td>
                        <td>{{ $attend->waktu_masuk }}</td>
                        <td>{{ $attend->waktu_keluar }}</td>
                        <td>{{ $attend->status_absensi }}</td>
                        <td>
                            <a href="{{ route('attendances.show', $attend->id) }}">Detail</a>
                            <a href="{{ route('attendances.edit', $attend->id) }}">Edit</a>
                            <form action="{{ route('attendances.destroy', $attend->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
</body>
</html> -->