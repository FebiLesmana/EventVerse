@extends('layouts.main')
@section('main-content')
  <div class="pt-16 px-6 max-w-md mx-auto">
    <!-- Judul Form -->
    <h2 class="text-center text-gray-800 font-semibold mb-4">Add New Note</h2>

    <!-- Form -->
    <form class="space-y-4">

      <!-- Event Name -->
      <input
        type="text"
        placeholder="Event name*"
        required
        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400"
      />

      <!-- Note -->
      <textarea
        rows="3"
        placeholder="Type the note here..."
        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 resize-none focus:outline-none focus:ring-2 focus:ring-yellow-400"
      ></textarea>

      <!-- Date -->
      <div class="relative">
        <input
          type="date"
          placeholder="Date"
          class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400"
        />
        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-5 4v1m-7 3h14a2 2 0 002-2V7a2 2 0 00-2-2h-2m-8 12H5a2 2 0 01-2-2v-5a2 2 0 012-2z" />
          </svg>
        </div>
      </div>

      <!-- Start Time & End Time -->
      <div class="flex gap-4">
        <div class="relative flex-1">
          <input
            type="time"
            placeholder="Start Time"
            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400"
          />
          <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
            </svg>
          </div>
        </div>
        <div class="relative flex-1">
          <input
            type="time"
            placeholder="End Time"
            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400"
          />
          <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
            </svg>
          </div>
        </div>
      </div>

      <!-- Reminder Toggle -->
      <div class="flex items-center gap-3">
        <label for="reminder" class="text-gray-700 select-none">Reminds me</label>
        <input
          type="checkbox"
          id="reminder"
          class="toggle toggle-yellow"
          style="width: 42px; height: 24px; appearance: none; background-color: #e5e7eb; rounded-full; position: relative; cursor: pointer; outline: none;"
          onchange="this.style.backgroundColor = this.checked ? '#FFD600' : '#E5E7EB'; this.nextElementSibling.style.transform = this.checked ? 'translateX(18px)' : 'translateX(0)';"
        />
        <span style="position: absolute; width: 18px; height: 18px; background: white; border-radius: 9999px; top: 3px; left: 3px; transition: transform 0.3s ease;"></span>
      </div>

      <!-- Category Selection -->
      <div class="border border-gray-300 rounded-lg p-3 flex flex-wrap gap-3 items-center">
        <span class="font-semibold text-gray-700 w-full mb-2">Select Category</span>
        <button type="button" class="bg-yellow-300 px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium text-gray-900">
          <span class="block w-3 h-3 rounded-full bg-yellow-400"></span> Tugas
        </button>
        <button type="button" class="bg-yellow-300 px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium text-gray-900">
          <span class="block w-3 h-3 rounded-full bg-yellow-400"></span> Acara
        </button>
        <button type="button" class="text-gray-500 text-sm hover:underline">+Add New</button>
      </div>

      <!-- Create Event Button -->
      <button
        type="submit"
        class="w-full bg-yellow-400 hover:bg-yellow-500 transition-colors text-white rounded-lg py-3 text-center font-semibold text-lg mt-4"
      >
        Create Event
      </button>
    </form>
  </div>
@endsection
