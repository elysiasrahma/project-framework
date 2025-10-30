<!DOCTYPE html>

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
</html>
