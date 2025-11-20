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

            <div class="mb-4">
                <label class="block text-[#4b3b2b] mb-1">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label class="block text-[#4b3b2b] mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full p-2 border rounded-lg" required>
            </div>

            <button class="bg-[#a47c48] text-white w-full py-2 rounded-lg hover:bg-[#8b6a3e]">
                Register
            </button>
        </form>
        <div class="text-center mt-4 text-[#4b3b2b]">
            Already have an account?
            <a href="{{ route('users.login') }}" class="text-[#a47c48] font-semibold hover:underline">
                Login
            </a>
        </div>
    </div>
</div>
@endsection