@extends('tailwind')

@section('title', 'Detail Departemen')
@section('header', 'Detail Departemen')

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-[#e2d3be] border border-[#e2d3be] rounded-lg shadow-sm">
        <tbody class="divide-y divide-[#e2d3be] bg-white/80">
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Nama Departemen</th>
                <td class="px-4 py-2">{{ $department->nama_departemen }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Detail Departemen</title>
</head>
<body>
    <h1>Detail Departemen</h1>
    <table border="1" cellpadding="8" cellspacing="0">
         <tr>
            <th>Nama Departemen</th>
         </tr>
         <tr>
            <td>{{ $department -> nama_departemen }}</td>
        </tr>
    </table>
</body>
</html> -->