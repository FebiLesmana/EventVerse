@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24">
<div class="relative bg-yellow-400 pb-6 px-5">
            <h1 class="mt-6 text-black font-semibold text-lg leading-6">
                Register Peserta Event
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
                        for="nama-peserta"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Nama Lengkap</label
                    >
                    <input
                        id="nama-peserta"
                        type="text"
                        placeholder="Masukkan nama lengkap"
                        name="nama-peserta"
                        value
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
                <div>
                    <label
                        for="nomer-induk"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >NIM</label
                    >
                    <input
                        id="nomer-induk"
                        type="text"
                        value
                        name="nomer-induk"
                        placeholder="Masukkan NIM"
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
                    <select
                        name="fakultas"
                        id="fakultas"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none cursor-pointer"
                    >
                        <option value="">Fakultas Teknik</option>
                        <option value="">Fakultas Ekonomi dan Bisnis</option>
                        <option value="">
                            Fakultas Ilmu Sosial dan Ilmu Politik
                        </option>
                        <option value="">Fakultas Hukum</option>
                        <option value="">Fakultas Bahasa dan Sastra</option>
                        <option value="">
                            Fakultas Matematika dan Ilmu Pengetahuan Alam
                        </option>
                        <option value="">Fakultas Kedokteran</option>
                        <option value="">Fakultas Ilmu Keolahragaan</option>
                    </select>
                </div>
                <div>
                    <label
                        for="email-peserta"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Email Aktif</label
                    >
                    <input
                        id="email-peserta"
                        type="email"
                        placeholder="Masukkan email aktif"
                        name="email-peserta"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
                <div>
                    <label
                        for="nomer-hp"
                        class="block text-[13px] font-semibold text-gray-900 mb-1"
                        >Nomor HP Aktif</label
                    >
                    <input
                        id="nomer-hp"
                        type="tel"
                        placeholder="Masukkan nomor HP aktif"
                        name="nomer-hp"
                        pattern="08[0-9]{9,11}"
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 px-4 text-[13px] font-semibold text-gray-900 focus:outline-none"
                        required
                    />
                </div>
            </div>
        </form>

        <!-- Daftar Bar -->
        <div
            class="bg-yellow-400 rounded-l-lg px-5 py-4 sticky bottom-0 left-0 w-full"
            style="border-top-left-radius: 2rem"
            id="daftar-bar"
        >
            <p
                class="text-[11px] font-poppins text-gray-900 mb-3 leading-tight"
            >
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
                    class="bg-gray-400 text-white font-semibold rounded-full px-12 py-2 text-[14px] leading-none hover:bg-yellow-500 transition duration-300"
                >
                    Daftar
                </button>
            </div>
        </div>
        <script>
            window.addEventListener("resize", () => {
                const inputFokus =
                    document.activeElement.tagName === "INPUT" ||
                    document.activeElement.tagName === "TEXTAREA";
                const daftarBar = document.getElementById("daftar-bar");
                if (window.innerHeight < 500 && inputFokus) {
                    daftarBar.style.display = "none";
                }
                bottomBar.style.display = "block";
            });
        </script>
</div>
@endsection