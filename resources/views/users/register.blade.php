@extends('users.master')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#e7d9c3]/50">
    <div class="bg-white/80 p-8 rounded-2xl shadow-lg w-full max-w-md border border-[#b9966a]/70">
        <h2 class="text-2xl font-bold text-[#4b3b2b] text-center mb-6">Register</h2>

        <form action="{{ route('users.register.submit') }}" method="POST">
            @csrf   

            <div class="mb-4">
                <label class="block text-[#4b3b2b] mb-1">Nama</label>
                <input type="text" name="name" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label class="block text-[#4b3b2b] mb-1">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4 relative">
                <label class="block text-[#4b3b2b] mb-1">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full p-2 pr-10 border rounded-lg" required>

                <!-- Tombol mata -->
                <button type="button" onclick="togglePassword('password', 'eyeIcon1')"
                    class="absolute right-2 top-9 text-[#4b3b2b] hover:text-[#a47c48]">
                    <svg id="eyeIcon1" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <div class="mb-4 relative">
                <label class="block text-[#4b3b2b] mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full p-2 pr-10 border rounded-lg" required>

                <!-- Tombol mata -->
                <button type="button" onclick="togglePassword('password_confirmation', 'eyeIcon2')"
                    class="absolute right-2 top-9 text-[#4b3b2b] hover:text-[#a47c48]">
                    <svg id="eyeIcon2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <button class="bg-[#a47c48] text-white w-full py-2 rounded-lg hover:bg-[#8b6a3e]">
                Register
            </button>

            <a href="{{ route('welcome')}}"
                class="block text-center bg-[#a47c48] text-white w-full py-2 rounded-lg hover:bg-[#8b6a3e] mt-3">
                Back
            </a>
        </form>
        <div class="text-center mt-4 text-[#4b3b2b]">
            Already have an account?
            <a href="{{ route('users.login') }}" class="text-[#a47c48] font-semibold hover:underline">
                Login
            </a>
        </div>
    </div>
</div>

<script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const eyeIcon = document.getElementById(iconId);

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.223-3.592M6.634 6.634A9.953 9.953 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.956 9.956 0 01-4.379 5.045M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 3l18 18" />
        `;
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
        }
    }
</script>
@endsection