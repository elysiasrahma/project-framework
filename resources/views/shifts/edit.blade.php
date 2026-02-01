@extends('tailwind')

@section('title', 'Edit Shift Kerja')
@section('header', 'Edit Data Shift Kerja')

@section('content')
<form action="{{ route('shifts.update', $shift->id) }}" method="POST" class="space-y-6">
    @csrf
    @method('PUT')

    <!-- Nama Shift -->
    <div>
        <label for="nama_shift" class="block text-sm font-medium text-[#4b3b2b]">Nama Shift</label>
        <input type="text" name="nama_shift" id="nama_shift"
               value="{{ old('nama_shift', $shift->nama_shift) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <!-- Jam Mulai -->
    <div>
        <label for="jam_mulai" class="block text-sm font-medium text-[#4b3b2b]">Jam Mulai</label>
        <input type="time" name="jam_mulai" id="jam_mulai"
               value="{{ old('jam_mulai', $shift->jam_mulai) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <!-- Jam Selesai -->
    <div>
        <label for="jam_selesai" class="block text-sm font-medium text-[#4b3b2b]">Jam Selesai</label>
        <input type="time" name="jam_selesai" id="jam_selesai"
               value="{{ old('jam_selesai', $shift->jam_selesai) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <!-- Kode Shift -->
    <div>
        <label for="kode_shift" class="block text-sm font-medium text-[#4b3b2b]">Kode Shift</label>
        <input type="text" name="kode_shift" id="kode_shift"
               value="{{ old('kode_shift', $shift->kode_shift) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <!-- Deskripsi -->
    <div>
        <label for="deskripsi" class="block text-sm font-medium text-[#4b3b2b]">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" rows="3"
                  class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">{{ old('deskripsi', $shift->deskripsi) }}</textarea>
    </div>

    <!-- Created At & Updated At (readonly) -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-[#4b3b2b]">Created At</label>
            <input type="text" value="{{ $shift->created_at }}" readonly
                   class="mt-1 block w-full rounded-md border-[#d9c6a5] bg-gray-100 shadow-sm">
        </div>
        <div>
            <label class="block text-sm font-medium text-[#4b3b2b]">Updated At</label>
            <input type="text" value="{{ $shift->updated_at }}" readonly
                   class="mt-1 block w-full rounded-md border-[#d9c6a5] bg-gray-100 shadow-sm">
        </div>
    </div>

    <!-- Tombol Update -->
    <div class="text-right">
        <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48]">
            Update
        </button>
    </div>
</form>
@endsection