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
                    <button aria-label="Kalender"
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
                        placeholder="Essay"
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
                type="button"
                        aria-label="Search"
                        class="absolute right-2 inset-y-0 flex items-center px-2 text-gray-500 hover:text-gray-700 text-lg focus:outline-none"
                    >
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </form>
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
                            class="text-gray-400 hover:text-yellow-400 focus:outline-none self-start"
                        >
                            <i class="far fa-heart text-lg"> </i>
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
                            class="text-gray-400 hover:text-yellow-400 focus:outline-none self-start"
                        >
                            <i class="far fa-heart text-lg"> </i>
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
                            class="text-gray-400 hover:text-yellow-400 focus:outline-none self-start"
                        >
                            <i class="far fa-heart text-lg"> </i>
                        </button>
                    </a>
                </li>
            </ul>
@include('components.nav')
</div>

@endsection