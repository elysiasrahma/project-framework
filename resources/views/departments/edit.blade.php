@extends('tailwind')

@section('title', 'Edit Departemen')
@section('header', 'Edit Data Departemen')

@section('content')
<form action="{{ route('departments.update', $department->id) }}" method="POST" class="space-y-6">
    @csrf
    @method('PUT')

    <div>
        <label for="nama_departemen" class="block text-sm font-medium text-[#4b3b2b]">Nama Departemen</label>
        <input type="text" name="nama_departemen" id="nama_departemen"
               value="{{ old('nama_departemen', $department->nama_departemen) }}"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>

    <div class="text-right">
        <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48]">
            Update
        </button>
    </div>
</form>
@endsection


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Edit Form</title>
</head>
<body>
    <h2>Edit Data Departemen</h2>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nama Departemen</td>
                <td><input type="text" name="nama_departemen" value="{{ old('nama_departemen', $department->nama_departemen) }}"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html> -->