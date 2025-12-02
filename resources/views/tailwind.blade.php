    <!DOCTYPE html>
    <html class="h-full bg-[#f7f3ef]">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>

    <body class="h-full text-[#4b3b2b] overflow-visible">
        <div class="min-h-full overflow-visible">
            {{-- NAVBAR --}}
            <nav class="relative bg-[#c7a17a]/70 backdrop-blur-md shadow-sm overflow-visible z-[9999]" x-data="{ mobileOpen: false }">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <!-- Logo + Menu -->
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img src="{{ asset('sandwich.png') }}" alt="Sited" class="w-16 h-16">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- NAV LINKS -->
                                    @foreach ([
                                    'employees' => 'Employee',
                                    'departments' => 'Department',
                                    'attendances' => 'Attendance',
                                    'positions' => 'Positions',
                                    'salaries' => 'Salaries',
                                    'shifts' => 'Shifts'
                                    ] as $route => $label)
                                    <a href="{{ route($route . '.index') }}"
                                        class="rounded-md px-3 py-2 text-sm font-medium
                               {{ Request::routeIs($route . '.*') 
                                   ? 'bg-[#a47c48]/60 text-white shadow-sm' 
                                   : 'text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]' }}">
                                        {{ $label }}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Profile -->
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <div x-data="{ profileOpen: false }" class="relative ml-3 z-[2000]">
                                    <!-- Tombol avatar -->
                                    <button @click="profileOpen = !profileOpen"
                                        class="relative flex items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#a47c48]">
                                        <img src="{{ asset('sited.jpg') }}" alt="Sited"
                                            class="size-8 rounded-full outline -outline-offset-1 outline-[#a47c48]/30" />
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div x-show="profileOpen"
                                        @click.outside="profileOpen = false"
                                        x-transition
                                        class="absolute right-0 top-full mt-2 w-48 origin-top-right rounded-md bg-[#f9f6f1] py-1 shadow-lg border border-[#d9c6a5]/50 z-[3000]">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="w-full text-left px-4 py-2 text-sm text-[#4b3b2b] hover:bg-[#f1e5d1]">
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="-mr-2 flex md:hidden">
                            <button @click="mobileOpen = !mobileOpen"
                                class="relative inline-flex items-center justify-center rounded-md p-2 text-[#4b3b2b] hover:bg-[#d8c2a7]/60 focus:outline-2 focus:outline-offset-2 focus:outline-[#a47c48]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    aria-hidden="true" class="size-6">
                                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile menu -->
                    <div x-show="mobileOpen"
                        x-transition
                        class="md:hidden mt-2 space-y-1 px-4 pb-4">
                        @foreach ([
                        'employees' => 'Employee',
                        'departments' => 'Department',
                        'attendances' => 'Attendance',
                        'positions' => 'Positions',
                        'salaries' => 'Salaries',
                        'shifts' => 'Shifts'
                        ] as $route => $label)
                        <a href="{{ route($route . '.index') }}"
                            class="block rounded-md px-3 py-2 text-sm font-medium text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]">
                            {{ $label }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </nav>

            {{-- HEADER --}}
            <header class="relative bg-[#e7d9c3] border-y border-[#c9b598]/50 shadow-sm z-[1]">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-[#4b3b2b]">App Pegawai</h1>
                </div>
            </header>

            {{-- MAIN --}}
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <div class="bg-white/70 border border-[#e2d3be] rounded-xl p-6 shadow-sm">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </body>

    </html>