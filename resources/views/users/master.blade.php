<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <title>Login to App Pegawai</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-[#c7a17a]/20">
    <div class="w-full bg-white/70 backdrop-blur border-b border-[#b9966a]/50">
        <div class="max-w-4xl mx-auto px-4 py-3 flex items-center gap-3">
            <a href="{{ url()->previous() }}"
               class="inline-flex items-center gap-2 text-[#4b3b2b] hover:text-[#a47c48] font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7 7-7M3 12h18"/>
                </svg>
                Back
            </a>
        </div>
    </div>

    @yield('content')   
    @include('sweetalert2::index')  
</body>

</html>
