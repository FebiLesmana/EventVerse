@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24 px-4 py-4">
            <!-- Header -->
            <header class="mb-6 flex flex-col space-y-4">
                <!-- Baris Atas: Logo + Ikon -->
                <div class="flex items-center justify-between">
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
                </div>

                <!-- Judul Section -->
                <h2 class="text-xl font-semibold text-gray-700 mt-2 sm:mt-4">
                    Event Disukai
                </h2>
            </header>
            <ul class="space-y-4">
                <!-- Daftar Content -->
                <li>
                    <a
                        class="flex border border-gray-300 rounded-xl p-3 gap-3 hover:shadow-md transition-shadow"
                        href="#"
                    >
                        <img
                            alt="Profile picture silhouette with blue and yellow event banner"
                            class="w-14 h-14 rounded-lg flex-shrink-0 object-cover"
                            height="60"
                            src="https://storage.googleapis.com/a1aa/image/7d7fcbc8-0a75-4b2b-85bd-3945432c516f.jpg"
                            width="60"
                        />
                        <div
                            class="flex flex-col justify-center flex-grow min-w-0"
                        >
                            <div
                                class="text-xs text-blue-600 font-semibold leading-none"
                            >
                                Agustus 2025
                            </div>
                            <div
                                class="text-xs text-gray-600 font-semibold leading-none"
                            >
                                Himprote
                            </div>
                            <p
                                class="text-sm font-semibold text-gray-900 truncate"
                            >
                                Gemaste Essay Nasional
                            </p>
                        </div>
                        <button
                            aria-label="Favorite"
                            class="text-red-500 focus:outline-none self-start"
                        >
                        <i class="fas fa-heart text-lg"></i>
                        </button>
                    </a>
                </li>
                <li>
                    <a
                        class="flex border border-gray-300 rounded-xl p-3 gap-3 hover:shadow-md transition-shadow"
                        href="#"
                    >
                        <img
                            alt="Profile picture silhouette with blue and yellow event banner"
                            class="w-14 h-14 rounded-lg flex-shrink-0 object-cover"
                            height="60"
                            src="https://storage.googleapis.com/a1aa/image/7d7fcbc8-0a75-4b2b-85bd-3945432c516f.jpg"
                            width="60"
                        />
                        <div
                            class="flex flex-col justify-center flex-grow min-w-0"
                        >
                            <div
                                class="text-xs text-blue-600 font-semibold leading-none"
                            >
                                Juni 2025
                            </div>
                            <div
                                class="text-xs text-gray-600 font-semibold leading-none"
                            >
                                HMPTK
                            </div>
                            <p
                                class="text-sm font-semibold text-gray-900 truncate"
                            >
                                Essay Nasional
                            </p>
                        </div>
                        <button
                            aria-label="Favorite"
                            class="text-red-500 focus:outline-none self-start"
                        >
                        <i class="fas fa-heart text-lg"></i>
                        </button>
                    </a>
                </li>
                <li>
                    <a
                        class="flex border border-gray-300 rounded-xl p-3 gap-3 hover:shadow-md transition-shadow"
                        href="#"
                    >
                        <img
                            alt="Profile picture silhouette with blue and yellow event banner"
                            class="w-14 h-14 rounded-lg flex-shrink-0 object-cover"
                            height="60"
                            src="https://storage.googleapis.com/a1aa/image/7d7fcbc8-0a75-4b2b-85bd-3945432c516f.jpg"
                            width="60"
                        />
                        <div
                            class="flex flex-col justify-center flex-grow min-w-0"
                        >
                            <div
                                class="text-xs text-blue-600 font-semibold leading-none"
                            >
                                May 2025
                            </div>
                            <div
                                class="text-xs text-gray-600 font-semibold leading-none"
                            >
                                ESC
                            </div>
                            <p
                                class="text-sm font-semibold text-gray-900 truncate"
                            >
                                Essay: Future of Technology
                            </p>
                        </div>
                        <button
                            aria-label="Favorite"
                            class="text-red-500 focus:outline-none self-start"
                        >
                            <i class="fas fa-heart text-lg"></i>
                        </button>
                    </a>
                </li>
            </ul>

        <!-- Navigasi -->
        @include('components.nav')

@endsection
