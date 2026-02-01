@extends('tailwind')

@section('title', 'Detail Jabatan')
@section('header', 'Detail Jabatan')

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-[#e2d3be] border border-[#e2d3be] rounded-lg shadow-sm">
        <tbody class="divide-y divide-[#e2d3be] bg-white/80">
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Nama Jabatan</th>
                <td class="px-4 py-2">{{ $position->nama_jabatan }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Gaji Pokok</th>
                <td class="px-4 py-2">Rp {{ number_format($position->gaji_pokok) }}</td>
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
            <th>Nama Jabatan</th>
            <td>{{ $position -> nama_jabatan }}</td>
         </tr>
         <tr>
            <th>Gaji Pokok</th>
            <td>{{ $position -> gaji_pokok }}</td>
         </tr>
    </table>
</body>
</html> -->