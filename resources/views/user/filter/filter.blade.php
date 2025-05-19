@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24">
<div class="pt-6 px-6 pb-20">
            <!-- Header -->
            <header class="flex items-center justify-between mb-6">
                <h1
                    class="text-yellow-400 font-extrabold text-lg leading-none select-none"
                >
                    EventVerse.
                </h1>
                <div class="flex space-x-4 text-gray-600 text-xl">
                    <button
                        aria-label="Kalender"
                        class="hover:text-yellow-400 focus:outline-none"
                    >
                        <i class="far fa-calendar-alt"></i>
                    </button>
                    <button
                        aria-label="Notifikasi"
                        class="hover:text-yellow-400 focus:outline-none"
                    >
                        <i class="far fa-bell"></i>
                    </button>
                </div>
            </header>

            <!-- Search bar -->
            <form class="flex items-center space-x-2 mb-6">
                <div class="relative w-full max-w-md">
                    <input
                        type="text"
                        placeholder="Cari event..."
                        class="w-full rounded-full border border-gray-300 text-gray-500 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400 px-2.5 py-2"
                    />
                    <button
                        type="button"
                        aria-label="Filter Event"
                        class="absolute right-10 inset-y-0 flex items-center px-2 text-gray-500 hover:text-gray-700 text-lg focus:outline-none"
                    >
                        <i class="fas fa-sliders-h"></i>
                    </button>

                    <a
                        href="/filter/"
                        aria-label="Search"
                        class="absolute right-2 inset-y-0 flex items-center px-2 text-gray-500 hover:text-gray-700 text-lg focus:outline-none"
                    >
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </form>

            <!-- Tipe Event -->
            <section class="mb-6">
                <h2
                    class="text-xs font-semibold text-gray-700 mb-2 select-none"
                >
                    Tipe Event
                </h2>
                <div class="flex flex-wrap gap-2">
                    <button
                        class="bg-yellow-200 text-gray-800 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Essay
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Seminar
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Bootcamp
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Design
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Editing
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        E-Sport
                    </button>
                </div>
            </section>

            <!-- Rentan Waktu -->
            <section class="mb-6">
                <h2
                    class="text-xs font-semibold text-gray-700 mb-2 select-none"
                >
                    Rentan Waktu
                </h2>
                <div class="flex flex-wrap gap-2">
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Januari
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Februari
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Maret
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        April
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Mei
                    </button>
                    <button
                        class="bg-yellow-200 text-gray-800 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Juni
                    </button>
                    <button
                        class="bg-yellow-200 text-gray-800 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Juli
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Agustus
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        September
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Oktober
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        November
                    </button>
                    <button
                        class="bg-gray-300 text-gray-700 text-xs font-semibold rounded-lg px-4 py-2 select-none"
                    >
                        Desember
                    </button>
                </div>
            </section>

            <!-- Buttons -->
            <div class="flex justify-center gap-6 mt-4">
                <button
                    class="bg-white border border-gray-300 rounded-lg px-10 py-2 text-gray-700 font-semibold select-none hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-yellow-400"
                >
                    Batal
                </button>
                <button
                    class="bg-blue-500 rounded-lg px-10 py-2 text-white font-semibold select-none hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600"
                >
                    Simpan
                </button>
            </div>
        </div>
@include('components.nav')
</div>

@endsection