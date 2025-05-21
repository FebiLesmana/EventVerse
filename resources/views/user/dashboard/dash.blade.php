@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24">
  <div class="flex items-center justify-between px-4 py-3">
    <h1 class="text-xl font-bold text-yellow-500">EventVerse.</h1>
    <div class="flex space-x-4">
      <button><i class="hgi hgi-stroke hgi-calendar-03"></i></button>
      <button><i class="hgi hgi-stroke hgi-notification-03"></i></button>
    </div>
  </div>

  <!-- Search -->
  <div class="px-4 mb-3">
    <div class="flex space-x-4 items-center bg-gray-100 rounded-full px-4 py-2">
      <input type="text" placeholder="Cari event..." class="bg-transparent w-full outline-none text-sm" />
      <button><i class="hgi hgi-stroke hgi-filter-vertical"></i></i></button>
      <button><i class="hgi hgi-stroke hgi-search-01"></i></button>
    </div>
  </div>

  <!-- Event Terdekat -->
<div class="px-4">
    <h2 class="font-semibold text-lg mb-2">Event Terdekat</h2>
    <div class="flex overflow-x-auto space-x-4 pb-2">
      
      @foreach ($dataEvent->take(3) as $item)
          <!-- Card 1 -->
          <div class="flex-shrink-0 w-72 rounded-xl overflow-hidden shadow-sm">
            <img src="{{ asset('storage/' . $item->poster) }}" alt="Training Tech 2024" class="w-full h-auto">
          </div>
          {{-- {{ $item->poster }} --}}
      @endforeach
  
    </div>
  </div>

  <!-- Diminati -->
  <div class="px-4 flex items-center justify-between">
    <h2 class="font-semibold text-lg">Diminati</h2>
    <a href="#" class="text-sm text-yellow-500">View More</a>
  </div>

  <!-- List Event Cards -->
  <div class="px-4 space-y-3 mt-3 pb-24">

    @foreach ($dataEvent as $item)
    <a href="/detail/{{ $item->id }}">
    <div class="bg-white rounded-xl shadow-md flex items-center p-3 space-x-3 hover:bg-gray-50 transition">
    <img src="{{ asset('storage/' . $item->poster) }}" alt="{{ $item->nama }}" class="w-24 h-20 rounded-lg object-cover flex-shrink-0" loading="lazy"/>
    <div class="flex-grow">
      <p class="text-blue-500 text-sm font-medium mb-1">{{ $item->waktu }}</p>
      <p class="text-gray-500 text-xs mb-1">{{ $item->nama }}</p>
      <h3 class="font-semibold text-lg leading-tight">{{ $item->organizer }}</h3>
    </div>
    <button class="ml-auto p-2 rounded-full" type="button" onclick="addtofavorit($item->id)">
      <i class="hgi hgi-stroke hgi-favourite"></i>
    </button>
  </div>
</a>
    @endforeach
  </div>

  @include('components.nav')
</div>

@endsection