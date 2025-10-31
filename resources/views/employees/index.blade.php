<!DOCTYPE html>

<html lang="en">

<head>

</head>

<body>
    @extends('tailwind')
    @section('title', 'Daftar Pegawai')
    @section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-xl font-semibold text-[#4b3b2b]">Daftar Pegawai</h1>

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
                        <th class="px-4 py-2 border text-center">Nama Lengkap</th>
                        <th class="px-4 py-2 border text-center">Jabatan</th>
                        <th class="px-4 py-2 border text-center">Departemen</th>
                        <th class="px-4 py-2 border text-center">Email</th>
                        <th class="px-4 py-2 border text-center">Nomor Telepon</th>
                        <th class="px-4 py-2 border text-center">Tanggal Lahir</th>
                        <th class="px-4 py-2 border text-center">Alamat</th>
                        <th class="px-4 py-2 border text-center">Tanggal Masuk</th>
                        <th class="px-4 py-2 border text-center">Status</th>
                        <th class="px-4 py-2 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td class="px-4 py-2 border text-center">{{ $employee->nama_lengkap }}</td>
                        <td class="px-4 py-2 border text-center">{{ $employee->position ? $employee->position->nama_jabatan : '-' }}</td>
                        <td class="px-4 py-2 border text-center">{{ $employee->department ? $employee->department->nama_departemen : '-' }}</td>
                        <td class="px-4 py-2 border text-center">{{ $employee->email }}</td>
                        <td class="px-4 py-2 border text-center">{{ $employee->nomor_telepon }}</td>
                        <td class="px-4 py-2 border text-center">{{ $employee->tanggal_lahir }}</td>
                        <td class="px-4 py-2 border text-center">{{ $employee->alamat }}</td>
                        <td class="px-4 py-2 border text-center">{{ $employee->tanggal_masuk }}</td>
                        <td class="px-4 py-2 border text-center">{{ ucfirst($employee->status) }}</td>
                        <td class="px-4 py-2 border text-center space-x-1">
                            <a href="{{ route('employees.show', $employee->id) }}"
                                class="inline-block px-3 py-1 rounded-md bg-[#d8c2a7]/60 text-[#4b3b2b] hover:bg-[#c9b598] hover:text-[#2d1d0d] shadow-sm transition">
                                Detail
                            </a>

                            <a href="{{ route('employees.edit', $employee->id) }}"
                                class="inline-block px-3 py-1 rounded-md bg-[#a47c48]/70 text-white hover:bg-[#8f683c] shadow-sm transition">
                                Edit
                            </a>

                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline-block"
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
</body>

</html>