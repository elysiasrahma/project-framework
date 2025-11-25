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

    <body class="h-full text-[#4b3b2b]">
        <div class="min-h-full">
            {{-- NAVBAR --}}
            <nav class="bg-[#c7a17a]/70 backdrop-blur-md shadow-sm" x-data="{isOpen:false}">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img src="{{ asset('sandwich.png') }}" alt="Sited" class="w-16 h-16">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <a href="{{ route('employees.index') }}"
                                        class="rounded-md px-3 py-2 text-sm font-medium
                                        {{ Request::routeIs('employees.*') ? 'bg-[#a47c48]/60 text-white shadow-sm' : 'text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]' }}">
                                        Employee
                                    </a>

                                    <a href="{{ route('departments.index') }}"
                                        class="rounded-md px-3 py-2 text-sm font-medium
                                        {{ Request::routeIs('departments.*') ? 'bg-[#a47c48]/60 text-white shadow-sm' : 'text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]' }}">
                                        Department
                                    </a>

                                    <a href="{{ route('attendances.index') }}"
                                        class="rounded-md px-3 py-2 text-sm font-medium
                                       {{ Request::routeIs('attendances.*') ? 'bg-[#a47c48]/60 text-white shadow-sm' : 'text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]' }}">
                                        Attendance
                                    </a>

                                    <a href="{{ route('positions.index') }}"
                                        class="rounded-md px-3 py-2 text-sm font-medium
                                        {{ Request::routeIs('positions.*') ? 'bg-[#a47c48]/60 text-white shadow-sm' : 'text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]' }}">
                                        Positions
                                    </a>

                                    <a href="{{ route('salaries.index') }}"
                                        class="rounded-md px-3 py-2 text-sm font-medium
                                        {{ Request::routeIs('salaries.*') ? 'bg-[#a47c48]/60 text-white shadow-sm' : 'text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]' }}">
                                        Salaries
                                    </a>
                                    <a href="{{ route('shifts.index') }}"
                                        class="rounded-md px-3 py-2 text-sm font-medium
                                        {{ Request::routeIs('shifts.*') ? 'bg-[#a47c48]/60 text-white shadow-sm' : 'text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]' }}">
                                        Shifts
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <button type="button" class="relative rounded-full p-1 text-[#7b5e3e] hover:text-[#2d1d0d] focus:outline-2 focus:outline-offset-2 focus:outline-[#a47c48]">
                                    <span class="sr-only">View notifications</span>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"
                                        class="size-6">
                                        <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                {{-- PROFILE --}}
                                <el-dropdown class="relative ml-3">
                                    <button @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#a47c48]">
                                        <img src="{{ asset('sited.jpg') }}" alt="Sited" class="size-8 rounded-full outline -outline-offset-1 outline-[#a47c48]/30" />
                                    </button>

                                    <el-menu
                                        x-show="isOpen"
                                        x-transition:enter="transition erase-out duration-100 transform"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75 transform"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-[#f9f6f1] py-1 shadow-lg border border-[#d9c6a5]/50">
                                        <a href="#" class="block px-4 py-2 text-sm text-[#4b3b2b] hover:bg-[#f1e5d1]">Your profile</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-[#4b3b2b] hover:bg-[#f1e5d1]">Settings</a>
                                        <a href="welcome" class="block px-4 py-2 text-sm text-[#4b3b2b] hover:bg-[#f1e5d1]">Sign out</a>
                                    </el-menu>
                                </el-dropdown>
                            </div>
                        </div>

                        {{-- MOBILE MENU BUTTON --}}
                        <div class="-mr-2 flex md:hidden">
                            <button type="button" command="--toggle" commandfor="mobile-menu"
                                class="relative inline-flex items-center justify-center rounded-md p-2 text-[#4b3b2b] hover:bg-[#d8c2a7]/60 focus:outline-2 focus:outline-offset-2 focus:outline-[#a47c48]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    {{-- MOBILE MENU --}}
                    <div x-show="isOpen"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="md:hidden mt-2 space-y-1 px-4 pb-4">

                        <a href="{{ route('employees.index') }}" class="block rounded-md bg-[#a47c48]/60 px-3 py-2 text-sm font-medium text-white shadow-sm">Employee</a>
                        <a href="{{ route('departments.index') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]">Department</a>
                        <a href="{{ route('attendances.index') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]">Attendance</a>
                        <a href="{{ route('positions.index') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]">Positions</a>
                        <a href="{{ route('salaries.index') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]">Salaries</a>
                        <a href="{{ route('shifts.index') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-[#4b3b2b] hover:bg-[#d8c2a7]/60 hover:text-[#2d1d0d]">Shifts</a>
                    </div>
                </div>
            </nav>

            {{-- HEADER --}}
            <header class="relative bg-[#e7d9c3] border-y border-[#c9b598]/50 shadow-sm">
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