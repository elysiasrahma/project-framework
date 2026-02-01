{{-- resources/views/employees/show.blade.php --}}
@extends('tailwind')

@section('title', 'Detail Pegawai')
@section('header', 'Detail Pegawai')

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-[#e2d3be] border border-[#e2d3be] rounded-lg shadow-sm">
        <tbody class="divide-y divide-[#e2d3be] bg-white/80">
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Nama Lengkap</th>
                <td class="px-4 py-2">{{ $employee->nama_lengkap }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Jabatan</th>
                <td class="px-4 py-2">{{ $employee->position->nama_jabatan ?? '-' }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Departemen</th>
                <td class="px-4 py-2">{{ $employee->department->nama_departemen ?? '-' }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Email</th>
                <td class="px-4 py-2">{{ $employee->email }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Nomor Telepon</th>
                <td class="px-4 py-2">{{ $employee->nomor_telepon }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Tanggal Lahir</th>
                <td class="px-4 py-2">{{ $employee->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Alamat</th>
                <td class="px-4 py-2">{{ $employee->alamat }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Tanggal Masuk</th>
                <td class="px-4 py-2">{{ $employee->tanggal_masuk }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Status</th>
                <td class="px-4 py-2">{{ $employee->status }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Detail Pegawai</title>
</head>
<body>
    <h1>Detail Pegawai</h1>
    <table border="1" cellpadding="8" cellspacing="0">
         <tr>
            <th>Nama Lengkap</th>
            <td>{{ $employee -> nama_lengkap }}</td>
         </tr>
         <tr>
            <th>Jabatan</th>
            <td>{{ $employee -> position -> nama_jabatan }}</td>
         </tr>
         <tr>
            <th>Departemen</th>
            <td>{{ $employee -> department -> nama_departemen }}</td>
         </tr>
         <tr>
            <th>Email</th>
            <td>{{ $employee -> email }}</td>
         </tr>
         <tr>
            <th>Nomor Telepon</th>
            <td>{{ $employee -> nomor_telepon }}</td>
         </tr>
         <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $employee -> tanggal_lahir }}</td>
         </tr>
         <tr>
            <th>Alamat</th>
            <td>{{ $employee -> alamat }}</td>
         </tr>
         <tr>
            <th>Tanggal Masuk</th>
            <td>{{ $employee -> tanggal_masuk }}</td>
         </tr>
         <tr>
            <th>Status</th>
            <td>{{ $employee -> status }}</td>
         </tr>
    </table>
</body>
</html> -->