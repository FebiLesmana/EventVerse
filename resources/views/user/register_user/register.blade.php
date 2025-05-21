@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto">
<div class="bg-blue-400 min-h-screen flex flex-col">
    <div class="relative bg-blue-400 pb-6 px-5 flex flex-col items-center justify-center pt-5">
            <h1 class="text-white font-semibold text-lg leading-6">
                Register Peserta Event
            </h1>
            <p class="mt-1 text-black text-[12px] font-normal leading-tight">
                Isikan data di bawah ini dengan benar !
            </p>
        </div>

        <!-- Form container -->
        <form action="{{ route('peserta-store') }}" method="POST" enctype="multipart/form-data" class="bg-white flex-grow pt-6 pb-30" style="border-top-left-radius: 2rem">
        @csrf
            <div class="space-y-4 px-5 mb-30">
                <div>
                    <label
                        for="nama_peserta"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Nama Lengkap</label
                    >
                    <input
                        id="nama_peserta"
                        type="text"
                        placeholder="Masukkan nama lengkap"
                        value
                        name="nama_peserta"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
                <div>
                    <label
                        for="nim"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >NIM</label
                    >
                    <input
                        id="nim"
                        type="text"
                        value
                        name="nim"
                        placeholder="Masukkan nim"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
                <div>
                    <label
                        for="fakultas"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Fakultas</label
                    >
                    <input
                        id="fakultas"
                        type="text"
                        value
                        name="fakultas"
                        placeholder="Masukkan fakultas"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                    />
                </div>
                <div>
                    <label
                        for="email"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Email aktif</label
                    >
                    <input
                        id="email"
                        type="email"
                        value
                        placeholder="Masukkan email aktif"
                        name="email"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
                <div>
                    <label
                        for="no_hp"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >No HP aktif</label
                    >
                    <div class="relative">
                        <input
                            id="no_hp"
                            type="text"
                            value
                            placeholder="Masukkan no hp aktif"
                            name="no_hp"
                            class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                            required
                        />
                    </div>
                </div>
    </div>
    <div class="bg-blue-400 px-5 mt-10 py-4 sticky bottom-0 left-0 w-full" style="border-top-left-radius: 2rem" id="daftar-bar">
        <p class="text-[11px] font-poppins text-gray-900 mb-3 leading-tight">
            Harap diperhatikan kembali data–data yang anda isi tersebut,
            pastikan tidak ada yang keliru !!
        </p>
        <div class="flex space-x-3 justify-center">
            <button
                type="button"
                onclick="window.history.back()"
                class="bg-white text-gray-900 font-semibold rounded-full px-12 py-2 text-[14px] leading-none"
            >
                Batal
            </button>
            <button
                type="submit"
                class="bg-gray-400 text-white font-semibold rounded-full px-12 py-2 text-[14px] leading-none"
            >
                Daftar
            </button>
        </div>
            </div>
        </form>

        <!-- Daftar Bar -->
        <script>
            window.addEventListener("resize", () => {
              const inputFokus = document.activeElement.tagName === "INPUT" || document.activeElement.tagName === "TEXTAREA";
              const daftarBar = document.getElementById("daftar-bar");
              if (window.innerHeight < 500 && inputFokus) {
                daftarBar.style.display = "none";
              }
              bottomBar.style.display = "block";
            });
        </script>
</div>
@endsection