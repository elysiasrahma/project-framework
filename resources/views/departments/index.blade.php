<!DOCTYPE html>

<html lang="en">
<head>
        
</head>
<body>
    @extends('master')
    @section('title', 'Daftar Pegawai')
    @section('content')
        <div class="container mt-5">
            <h1 class="mb-4">Daftar Departemen</h1>
            <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Departemen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($department as $dept)
                    <tr>
                        <td>{{ $dept->nama_departemen }}</td>
                        <td>
                            <a href="{{ route('departments.show', $dept->id) }}">Detail</a>
                            <a href="{{ route('departments.edit', $dept->id) }}">Edit</a>
                            <form action="{{ route('departments.destroy', $dept->id) }}" method="POST" style="display:inline;">
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
