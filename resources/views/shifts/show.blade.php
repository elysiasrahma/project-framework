@extends('tailwind')

@section('title', 'Detail Shift Kerja')
@section('header', 'Detail Shift Kerja')

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-[#e2d3be] border border-[#e2d3be] rounded-lg shadow-sm">
        <tbody class="divide-y divide-[#e2d3be] bg-white/80">
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">ID</th>
                <td class="px-4 py-2">{{ $shift->id }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Nama Shift</th>
                <td class="px-4 py-2">{{ $shift->nama_shift }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Jam Mulai</th>
                <td class="px-4 py-2">{{ $shift->jam_mulai }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Jam Selesai</th>
                <td class="px-4 py-2">{{ $shift->jam_selesai }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Kode Shift</th>
                <td class="px-4 py-2">{{ $shift->kode_shift }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Deskripsi</th>
                <td class="px-4 py-2">{{ $shift->deskripsi }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Created At</th>
                <td class="px-4 py-2">{{ $shift->created_at }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Updated At</th>
                <td class="px-4 py-2">{{ $shift->updated_at }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection