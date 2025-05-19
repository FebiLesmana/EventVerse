@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24">
  <div class="flex items-center justify-between px-4 py-3">
    <h1 class="text-xl font-bold text-yellow-500">EventVerse.</h1>
    <div class="flex space-x-4">
      <button><i class="fi fi-tr-calendar"></i></button>
      <button><i class="fi fi-tr-bell"></i></button>
    </div>
  </div>

  <!-- Search -->
  <div class="px-4 mb-3">
    <div class="flex space-x-4 items-center bg-gray-100 rounded-full px-4 py-2">
      <input type="text" placeholder="Cari event..." class="bg-transparent w-full outline-none text-sm" />
      <button><i class="fi fi-tr-filter"></i></button>
      <button><i class="fi fi-tr-issue-loupe"></i></button>
    </div>
  </div>

  <!-- Event Terdekat -->
<div class="px-4">
    <h2 class="font-semibold text-lg mb-2">Event Terdekat</h2>
    <div class="flex overflow-x-auto space-x-4 pb-2">
      
      <!-- Card 1 -->
      <div class="flex-shrink-0 w-72 rounded-xl overflow-hidden shadow-sm">
        <img src="{{ asset('img/terdekat_1.png')}}" alt="Training Tech 2024" class="w-full h-auto">
      </div>
  
      <!-- Card 2 -->
      <div class="flex-shrink-0 w-72 rounded-xl overflow-hidden shadow-sm">
        <img src="{{ asset('img/terdekat_2.png')}}" alt="AI Bootcamp" class="w-full h-auto">
      </div>
  
    </div>
  </div>

  <!-- Diminati -->
  <div class="px-4 flex items-center justify-between">
    <h2 class="font-semibold text-lg">Diminati</h2>
    <a href="#" class="text-sm text-yellow-500">View More</a>
  </div>

  <!-- List Event Cards -->
  <div class="px-4 space-y-3 mt-3 pb-24">
    <!-- Card 1 -->
    <div class="bg-white rounded-xl shadow-md flex items-center p-3 space-x-3">
      <img src="{{ asset('img/event_1.png') }}" alt="Webinar Startup : Grow" class="w-24 h-20 rounded-lg object-cover flex-shrink-0" />
      <div class="flex-grow">
        <p class="text-blue-500 text-sm font-medium mb-1">Desember 2024</p>
        <p class="text-gray-500 text-xs mb-1">Electrical Science Club</p>
        <h3 class="font-semibold text-lg leading-tight">Webinar Startup : Grow</h3>
      </div>
        <button class="ml-auto p-2 rounded-full">
        <i class="fi fi-tr-issue-loupe"></i>
        </button>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-xl shadow-md flex items-center p-3 space-x-3">
      <img src="{{ asset('img/event_1.png') }}" alt="Webinar Startup : Grow" class="w-24 h-20 rounded-lg object-cover flex-shrink-0" />
      <div class="flex-grow">
        <p class="text-blue-500 text-sm font-medium mb-1">Desember 2024</p>
        <p class="text-gray-500 text-xs mb-1">Electrical Science Club</p>
        <h3 class="font-semibold text-lg leading-tight">Webinar Startup : Grow</h3>
      </div>
        <button class="ml-auto p-2 rounded-full">
        <i class="fi fi-tr-issue-loupe"></i>
        </button>
    </div>
    <!-- Card 3 -->
    <div class="bg-white rounded-xl shadow-md flex items-center p-3 space-x-3">
      <img src="{{ asset('img/event_1.png') }}" alt="Webinar Startup : Grow" class="w-24 h-20 rounded-lg object-cover flex-shrink-0" />
      <div class="flex-grow">
        <p class="text-blue-500 text-sm font-medium mb-1">Desember 2024</p>
        <p class="text-gray-500 text-xs mb-1">Electrical Science Club</p>
        <h3 class="font-semibold text-lg leading-tight">Webinar Startup : Grow</h3>
      </div>
        <button class="ml-auto p-2 rounded-full">
        <i class="fi fi-tr-issue-loupe"></i>
        </button>
    </div>
    <!-- Card 4 -->
    <div class="bg-white rounded-xl shadow-md flex items-center p-3 space-x-3">
      <img src="{{ asset('img/event_1.png') }}" alt="Webinar Startup : Grow" class="w-24 h-20 rounded-lg object-cover flex-shrink-0" />
      <div class="flex-grow">
        <p class="text-blue-500 text-sm font-medium mb-1">Desember 2024</p>
        <p class="text-gray-500 text-xs mb-1">Electrical Science Club</p>
        <h3 class="font-semibold text-lg leading-tight">Webinar Startup : Grow</h3>
      </div>
        <button class="ml-auto p-2 rounded-full">
        <i class="fi fi-tr-issue-loupe"></i>
        </button>
    </div>
    <!-- Tambahkan card lainnya dengan struktur serupa -->

  </div>

  @include('components.nav')
</div>

@endsection