<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <title>Login to App Pegawai</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-[#c7a17a]/20">
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ session('
            success ') }}',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif

    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: '{{ session('
            error ') }}',
            showConfirmButton: true
        });
    </script>
    @endif
    @yield('content')
    @include('sweetalert2::index')
</body>

</html>