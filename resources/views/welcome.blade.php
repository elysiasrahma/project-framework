<!DOCTYPE html>
<html class="h-full bg-[#c7a17a]/90">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen text-[#c7a17a]">
    <div class="bg-[#e7d9c3]/70">
        <div class="mx-auto max-w-7x1 py-4 sm:px-6 sm:py-10 lg:px-8">
            <div
                class="relative isolate overflow-hidden px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-8 md:pt-8 lg:flex lg:gap-x-30 lg:px-24 lg:pt-0 border border-[#b9966a]/70">

                <div class="bg-white/50 absolute inset-0 -z-10">
                </div>

                <!-- TEXT BAGIAN KIRI -->
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-[#4b3b2b] sm:text-4xl">
                        Ini App Pegawai
                    </h2>
                    <p class="mt-6 text-lg leading-8 text-[#5c4834]">
                        Tugas Framework Laravel dengan Tailwind CSS untuk aplikasi manajemen pegawai.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="{{ route('users.login') }}"
                            class="rounded-md bg-[#a47c48]/60 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#8b6a3e] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#a47c48]">
                            Login
                        </a>
                        <a href="{{ route('users.register') }}" class="text-sm font-semibold text-[#4b3b2b] hover:text-[#2d1d0d]">
                            Sign Up <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>

                <!-- GAMBAR BAGIAN KANAN -->
                <div class="relative mt-10 h-auto lg:mt-8">
                    <img src="{{ asset('sitednobg.png') }}" alt="sited"
                        class="w-auto object-contain mx-auto">
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center py-4 text-[#4b3b2b] mt-10">
        <p>&copy; {{ date('Y') }} App Pegawai Lizzy</p>
    </footer>
    <!-- ini footernya ga muncul gimana caranya -->
</body>


</html>