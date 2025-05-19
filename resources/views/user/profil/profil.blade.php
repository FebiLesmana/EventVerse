@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24">
    <div class="pt-6 px-6">
        <h1 class="text-yellow-400 font-semibold text-lg mb-4">Profil</h1>
        <div
            class="bg-yellow-400 rounded-lg flex items-center gap-4 px-4 py-3 mb-6 max-w-xs"
        >
            <img
                alt="Gambar Profil"
                class="w-10 h-10 rounded-full object-cover"
                height="40"
                src="https://storage.googleapis.com/a1aa/image/0905cda3-81fe-4129-5cd8-23ce8fcbb96e.jpg"
                width="40"
            />
            <div>
                <p class="text-white font-semibold text-sm leading-tight">
                    Aliya Putri
                </p>
                <p class="text-yellow-100 text-xs leading-tight">@aliya</p>
            </div>
        </div>
        <div class="bg-white rounded-xl">
            <ul class="divide-y divide-gray-100">
                <!-- List item -->
                <li
                    class="flex items-center justify-between px-5 py-4 hover:bg-gray-50 transition-all cursor-pointer transform hover:scale-[1.01]"
                >
                    <div class="flex items-center gap-3">
                        <div
                            class="w-7 h-7 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-400 text-xs"
                        >
                            <i class="fas fa-user"> </i>
                        </div>
                        <div>
                            <p
                                class="text-gray-900 font-semibold text-sm leading-tight"
                            >
                                My Account
                            </p>
                            <p class="text-gray-300 text-xs leading-tight">
                                Make changes to your account
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <i
                            class="fas fa-chevron-right text-gray-300 text-xs"
                        >
                        </i>
                    </div>
                </li>
                <li
                        class="flex items-center justify-between px-5 py-4 hover:bg-gray-50 transition-all cursor-pointer transform hover:scale-[1.01]"
                    >
                        <div class="flex items-center gap-3">
                            <div
                                class="w-7 h-7 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-400 text-xs"
                            >
                                <i class="fas fa-star"> </i>
                            </div>
                            <div>
                                <p
                                    class="text-gray-900 font-semibold text-sm leading-tight"
                                >
                                    Rate Us
                                </p>
                                <p class="text-gray-300 text-xs leading-tight">
                                    Rating our apps
                                </p>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right text-gray-300 text-xs">
                        </i>
                    </li>
                    <li
                        class="flex items-center justify-between px-5 py-4 hover:bg-gray-50 transition-all cursor-pointer transform hover:scale-[1.01]"
                    >
                        <div class="flex items-center gap-3">
                            <div
                                class="w-7 h-7 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-400 text-xs"
                            >
                                <i class="fas fa-lock"> </i>
                            </div>
                            <div>
                                <p
                                    class="text-gray-900 font-semibold text-sm leading-tight"
                                >
                                    Terms and Privacy
                                </p>
                                <p class="text-gray-300 text-xs leading-tight">
                                    Application requirement
                                </p>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right text-gray-300 text-xs">
                        </i>
                    </li>
                    <li
                        class="flex items-center justify-between px-5 py-4 rounded-b-xl hover:bg-gray-50 transition-all cursor-pointer transform hover:scale-[1.01]"
                    >
                        <div class="flex items-center gap-3">
                            <div
                                class="w-7 h-7 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-400 text-xs"
                            >
                                <i class="fas fa-sign-out-alt"> </i>
                            </div>
                            <div>
                                <p
                                    class="text-gray-900 font-semibold text-sm leading-tight"
                                >
                                    Log out
                                </p>
                                <p class="text-gray-300 text-xs leading-tight">
                                    Further secure your account for safety
                                </p>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right text-gray-300 text-xs">
                        </i>
                    </li>
            </ul>
        </div>
    </div>
    @include('components.nav')
</div>
@endsection
