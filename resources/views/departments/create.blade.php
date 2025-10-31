{{-- resources/views/departments/create.blade.php --}}
@extends('tailwind')

@section('title', 'Form Departemen')
@section('header', 'Form Departemen')


@section('content')
<form action="{{ route('departments.store') }}" method="POST" class="space-y-6">
    @csrf

    <div>
        <label for="nama_departemen" class="block text-sm font-medium text-[#4b3b2b]">Nama Departemen</label>
        <input type="text" id="nama_departemen" name="nama_departemen"
               class="mt-1 block w-full rounded-md border-[#d9c6a5] shadow-sm focus:border-[#a47c48] focus:ring-[#a47c48]">
    </div>
    
    <div class="text-right">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-[#a47c48] text-white text-sm font-medium rounded-md shadow hover:bg-[#8f683c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a47c48]">
            Simpan
        </button>
    </div>
</form>
@endsection


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input Departemen</title>
</head>
<body>
    <h1 class="mb-4">Form Departemen</h1>
    <form action="{{  route('departments.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_departemen">Nama Departemen: </label></td>
                <td><input type="text" id="nama_departemen" name="nama_departemen"></td>
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