@extends('layouts.main')
@section('main-content')
<body class="bg-white">

  <div class="min-h-screen flex flex-col">
  
    <div class="flex flex-1">
      @include('components.nav-admin-dash')
  
      <!-- Konten utama -->
      <main class="flex-1 p-8">
        <!-- Search -->
        <div class="mb-10 relative w-full max-w-full">
          <input
            type="text"
            placeholder="Search..."
            class="w-full border border-gray-300 rounded-md py-3 pl-4 pr-12 focus:outline-none focus:ring-2 focus:ring-yellow-logo"
          />
          <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
          </div>
        </div>
  
        <!-- Grid kotak -->
        <div class="grid grid-cols-2 gap-8 w-full max-w-full">
          <div class="border border-yellow-custom rounded-md p-8 flex flex-col items-center justify-center cursor-default hover:shadow-lg transition-shadow min-h-[250px]">
            <span class="font-semibold text-lg mb-2 text-gray-700">Event Aktif</span>
            <span class="font-extrabold text-7xl leading-none text-gray-900">10</span>
          </div>
          <div class="border border-yellow-custom rounded-md p-8 flex flex-col items-center justify-center cursor-default hover:shadow-lg transition-shadow min-h-[250px]">
            <span class="font-semibold text-lg mb-2 text-gray-700">Permohonan</span>
            <span class="font-extrabold text-7xl leading-none text-gray-900">25</span>
          </div>
          <div class="border border-yellow-custom rounded-md p-8 flex flex-col items-center justify-center cursor-default hover:shadow-lg transition-shadow min-h-[250px]">
            <span class="font-semibold text-lg mb-2 text-gray-700">Perlu Tindakan</span>
            <span class="font-extrabold text-7xl leading-none text-gray-900">5</span>
          </div>
          <div class="border border-yellow-custom rounded-md p-8 flex flex-col items-center justify-center cursor-default hover:shadow-lg transition-shadow min-h-[20px]">
            <span class="font-semibold text-lg mb-2 text-gray-700">Expired</span>
            <span class="font-extrabold text-7xl leading-none text-gray-900">12</span>
          </div>
        </div>
      </main>
    </div>
  
    <!-- Footer warna kuning -->
    <footer class="bg-yellow-400 h-16"></footer>
  </div>
  
  </body>
</html>
