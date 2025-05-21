@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24 px-4 py-4">
  <!-- Header -->
  <header class="mb-6 flex flex-col space-y-4">
    <div class="flex items-center justify-between">
      <h1 class="text-yellow-400 font-extrabold text-lg leading-none select-none">
        EventVerse.
      </h1>
      <div class="flex space-x-4 text-gray-600 text-xl">
        <button aria-label="Kalender" class="hover:text-yellow-400 focus:outline-none">
          <i class="far fa-calendar-alt"></i>
        </button>
        <button aria-label="Notifikasi" class="hover:text-yellow-400 focus:outline-none">
          <i class="far fa-bell"></i>
        </button>
      </div>
    </div>

    <h2 class="text-xl font-semibold text-gray-700 mt-2 sm:mt-4">
      Event Disukai
    </h2>
  </header>

  <ul class="space-y-4">
    @forelse ($favoriteEvents as $event)
      <li>
        <a href="{{ route('event-show', $event->id) }}" class="flex border border-gray-300 rounded-xl p-3 gap-3 hover:shadow-md transition-shadow">
          <img src="{{ asset('storage/' . $event->poster) }}" alt="{{ $event->nama }}" class="w-14 h-14 rounded-lg flex-shrink-0 object-cover" width="60" height="60">
          <div class="flex flex-col justify-center flex-grow min-w-0">
            <div class="text-xs text-blue-600 font-semibold leading-none">
              {{ \Carbon\Carbon::parse($event->waktu)->translatedFormat('F Y') }}
            </div>
            <div class="text-xs text-gray-600 font-semibold leading-none">
              {{ $event->organizer }}
            </div>
            <p class="text-sm font-semibold text-gray-900 truncate">
              {{ $event->nama }}
            </p>
          </div>
          <button aria-label="Favorite" class="text-red-500 focus:outline-none self-start">
            <i class="fas fa-heart text-lg"></i>
          </button>
        </a>
      </li>
    @empty
      <li class="text-center text-gray-500 py-4">
        Belum ada event yang disukai.
      </li>
    @endforelse
  </ul>

  <!-- Navigasi -->
  @include('components.nav')
</div>
@endsection
