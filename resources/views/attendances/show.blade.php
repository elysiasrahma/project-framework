@extends('tailwind')

@section('title', 'Detail Absensi')
@section('header', 'Detail Absensi')

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-[#e2d3be] border border-[#e2d3be] rounded-lg shadow-sm">
        <tbody class="divide-y divide-[#e2d3be] bg-white/80">
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Karyawan ID</th>
                <td class="px-4 py-2">{{ $attendance->karyawan_id }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Tanggal</th>
                <td class="px-4 py-2">{{ $attendance->tanggal }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Waktu Masuk</th>
                <td class="px-4 py-2">{{ $attendance->waktu_masuk }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Waktu Keluar</th>
                <td class="px-4 py-2">{{ $attendance->waktu_keluar }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Status Absensi</th>
                <td class="px-4 py-2">{{ ucfirst($attendance->status_absensi) }}</td>
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
            <th>Karyawan ID</th>
            <td>{{ $attendance -> karyawan_id }}</td>
         </tr>
         <tr>
            <th>Tanggal</th>
            <td>{{ $attendance -> tanggal }}</td>
         </tr>
         <tr>
            <th>Waktu Masuk</th>
            <td>{{ $attendance -> waktu_masuk }}</td>
         </tr>
         <tr>
            <th>Waktu Keluar</th>
            <td>{{ $attendance -> waktu_keluar }}</td>
         </tr>
         <tr>
            <th>Status Absensi</th>
            <td>{{ $attendance -> status_absensi }}</td>
         </tr>
    </table>
</body>
</html> -->