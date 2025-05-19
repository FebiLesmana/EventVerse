@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24">
<body class="bg-yellow-400 min-h-screen flex flex-col">
    <div class="relative bg-yellow-400 pb-6 px-5">
            <h1 class="mt-6 text-black font-semibold text-lg leading-6">
                Register Form Event
            </h1>
            <p class="mt-1 text-black text-[12px] font-normal leading-tight">
                Isikan data di bawah ini dengan benar !
            </p>
        </div>

        <!-- Form container -->
        <form
            class="bg-white flex-grow rounded-l-lg px-5 pt-6 pb-30"
            style="border-top-left-radius: 2rem"
            action="/register-peserta"
            method="POST"
        >
            <div class="space-y-4">
                <div>
                    <label
                        for="nama-event"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Nama Event</label
                    >
                    <input
                        id="nama-event"
                        type="text"
                        placeholder="Masukkan nama event"
                        value
                        name="nama-event"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
                <div>
                    <label
                        for="jenis-event"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Jenis Event</label
                    >
                    <input
                        id="jenis-event"
                        type="text"
                        value
                        name="jenis-event"
                        placeholder="Masukkan jenis event"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
                <div>
                    <label
                        for="deskripsi-event"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Deskripsi Event</label
                    >
                    <input
                        id="deskripsi-event"
                        type="text"
                        value
                        name="deskripsi-event"
                        placeholder="Masukkan deskripsi event"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                    />
                </div>
                <div>
                    <label
                        for="tempat-pelaksanaan"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Tempat Pelaksanaan</label
                    >
                    <input
                        id="tempat-pelaksanaan"
                        type="text"
                        value
                        placeholder="Masukkan tempat pelaksanaan"
                        name="tempat-pelaksanaan"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
                <div>
                    <label
                        for="waktu-pelaksanaan"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Waktu Pelaksanaan</label
                    >
                    <div class="relative">
                        <input
                            id="waktu-pelaksanaan"
                            type="date"
                            value
                            placeholder="Masukkan waktu pelaksanaan"
                            name="waktu-pelaksanaan"
                            class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 pr-12 text-[13px] font-semibold text-gray-900 focus:outline-none"
                            required
                        />
                    </div>
                </div>
                <div>
                    <label
                        for="pembicara"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Pembicara (Opsional)</label
                    >
                    <input
                        id="pembicara"
                        type="text"
                        value
                        placeholder="Masukkan nama pembicara"
                        name="pembicara"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                    />
                </div>
                <div>
                    <label
                        for="instagram"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Intagram (Info lebih lanjut)</label
                    >
                    <input
                        id="instagram"
                        type="text"
                        value
                        placeholder="Masukkan nama instagram"
                        name="instagram"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                    />
                </div>
                <div>
                    <label
                        for="poster"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Poster</label
                    >
                    <input
                        id="poster"
                        type="file"
                        required
                        class="relative w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 flex items-center justify-between cursor-pointer select-none"
                    >
                    </input>
                </div>
            </div>
        </form>

        <!-- Daftar Bar -->
        <div
            class="bg-yellow-400 rounded-l-lg px-5 py-4 sticky bottom-0 left-0 w-full"  style="border-top-left-radius: 2rem"
            id="daftar-bar"
        >
            <p class="text-[11px] font-poppins text-gray-900 mb-3 leading-tight">
                Harap diperhatikan kembali data–data yang anda isi tersebut,
                pastikan tidak ada yang keliru !!
            </p>
            <div class="flex space-x-3 justify-center">
                <button
                    type="button"
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