@extends('tailwind')

@section('title', 'Form Absensi')
@section('header', 'Form Input Absensi')

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

<form action="{{ route('attendances.store') }}" method="POST" class="space-y-6">
    @csrf

    <div>
        <label for="karyawan_id" class="block text-sm font-medium text-[#4b3b2b]">Karyawan ID</label>
        <input type="text" id="karyawan_id" name="karyawan_id"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="tanggal" class="block text-sm font-medium text-[#4b3b2b]">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="waktu_masuk" class="block text-sm font-medium text-[#4b3b2b]">Waktu Masuk</label>
        <input type="time" id="waktu_masuk" name="waktu_masuk"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="waktu_keluar" class="block text-sm font-medium text-[#4b3b2b]">Waktu Keluar</label>
        <input type="time" id="waktu_keluar" name="waktu_keluar"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div>
        <label for="status_absensi" class="block text-sm font-medium text-[#4b3b2b]">Status</label>
        <select id="status_absensi" name="status_absensi"
                class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
            <option value="hadir">Hadir</option>
            <option value="izin">Izin</option>
            <option value="sakit">Sakit</option>
            <option value="alpha">Alpha</option>
        </select>
    </div>

    <div class="text-right">
        <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48]">
            Simpan
        </button>
    </div>
</form>
@endsection


