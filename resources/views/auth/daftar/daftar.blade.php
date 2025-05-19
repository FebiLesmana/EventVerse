@extends('layouts.main')
@section('main-content')
  <div class="pt-16 px-6 max-w-md mx-auto">

    <!-- Title -->
    <h1 class="text-center font-bold text-gray-800 text-xl mb-1">Create Account</h1>
    <p class="text-center text-gray-500 text-sm mb-8">Sign up to get started</p>

    <form action="{{ route('register.store') }}" method="POST" class="px-6 max-w-md mx-auto">
  @csrf
    <!-- Nama Input -->
    <div class="mb-4 relative">
      <input
        type="text"
        placeholder="Nama"
        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400"
      />
      <div class="absolute right-4 top-[calc(50%-10px)] pointer-events-none">
        <!-- icon user -->
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          viewBox="0 0 24 24">
          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/>
          <path d="M6 20v-2c0-2.21 3.58-4 6-4s6 1.79 6 4v2"/>
        </svg>
      </div>
    </div>

    <!-- NIM Input -->
    <div class="mb-4 relative">
      <input
        type="text"
        placeholder="NIM"
        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400"
      />
      <div class="absolute right-4 top-[calc(50%-10px)] pointer-events-none">
        <!-- icon id card -->
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          viewBox="0 0 24 24">
          <rect x="3" y="4" width="18" height="16" rx="2" ry="2"/>
          <line x1="3" y1="10" x2="21" y2="10"/>
        </svg>
      </div>
    </div>

    <!-- Email Input -->
    <div class="mb-4 relative">
      <input
        type="email"
        placeholder="Email"
        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400"
      />
      <div class="absolute right-4 top-[calc(50%-10px)] pointer-events-none">
        <!-- icon email -->
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          viewBox="0 0 24 24">
          <path d="M4 4h16v16H4z" stroke="none"/>
          <path d="M22 6L12 13 2 6"/>
        </svg>
      </div>
    </div>

    <!-- Password Input -->
    <div class="mb-6 relative">
      <input
        type="password"
        placeholder="Password"
        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400"
      />
      <div class="absolute right-4 top-[calc(50%-10px)]">
        <!-- icon eye-off for password -->
        <svg class="w-5 h-5 text-gray-400 cursor-pointer" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          viewBox="0 0 24 24">
          <path d="M17.94 17.94A10.94 10.94 0 0 1 12 19c-4.74 0-8.7-3-10-7a10.83 10.83 0 0 1 4.5-5.5M1 1l22 22"/>
        </svg>
      </div>
    </div>

    <!-- Sign Un Button -->
    <button class="w-full bg-yellow-400 rounded-xl py-3 text-white font-semibold text-lg mb-6 hover:bg-yellow-500 transition">Daftar</button>

  <!-- Bottom Text -->
  <div class="text-center mb-10 px-6">
    <p class="text-gray-400 text-sm">
      Have account?
      <a href="#" class="text-yellow-400 font-semibold hover:underline">Sign Ip</a>
    </p>
  </div>
  </div>
@endsection

