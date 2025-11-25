@extends('tailwind')

@section('title', 'Form Shift Kerja')
@section('header', 'Form Input Shift Kerja')

@section('content')
<form action="{{ route('shifts.store') }}" method="POST" class="space-y-6">
    @csrf

    <!-- Nama Shift -->
    <div>
        <label for="nama_shift" class="block text-sm font-medium text-[#4b3b2b]">Nama Shift</label>
        <input type="text" id="nama_shift" name="nama_shift"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm 
                      focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <!-- Jam Mulai -->
    <div>
        <label for="jam_mulai" class="block text-sm font-medium text-[#4b3b2b]">Jam Mulai</label>
        <input type="time" id="jam_mulai" name="jam_mulai"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm 
                      focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <!-- Jam Selesai -->
    <div>
        <label for="jam_selesai" class="block text-sm font-medium text-[#4b3b2b]">Jam Selesai</label>
        <input type="time" id="jam_selesai" name="jam_selesai"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm 
                      focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <!-- Kode Shift -->
    <div>
        <label for="kode_shift" class="block text-sm font-medium text-[#4b3b2b]">Kode Shift</label>
        <input type="text" id="kode_shift" name="kode_shift"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm 
                      focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <!-- Deskripsi -->
    <div>
        <label for="deskripsi" class="block text-sm font-medium text-[#4b3b2b]">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" rows="3"
                  class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm 
                         focus:border-[#a47c48] focus:ring-[#a47c48]"></textarea>
    </div>

    <!-- Tombol Simpan -->
    <div class="text-right">
        <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48]">
            Simpan
        </button>
    </div>
</form>
@endsection