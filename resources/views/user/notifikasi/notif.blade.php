@extends('layouts.main')
@section('main-content')
<div class="min-h-screen flex flex-col items-center justify-start pt-8 px-4 pb-24">

    <!-- Header dengan lebar sama seperti konten -->
    <div class="w-full max-w-md flex items-center space-x-3 mb-14">
        <button aria-label="Back" class="text-black text-xl pl-1" id="back">
            <i class="fas fa-chevron-left"></i>
        </button>
        <i class="far fa-bell text-black text-xl"></i>
        <h1 class="font-extrabold text-black text-[22px] leading-[28px]">
            Notification
        </h1>
    </div>

    <!-- Konten notifikasi -->
    <div class="w-full max-w-md space-y-6">
        <!-- Notifikasi 1 -->
        <div
            class="bg-yellow-300 rounded-xl shadow-md flex items-center p-4 relative"
            style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1)"
        >
            <img
                alt="Desain Bareng"
                class="w-12 h-12 rounded"
                height="48"
                src="https://storage.googleapis.com/a1aa/image/9d18752c-3de3-480e-e127-fc2d1b911e8f.jpg"
                width="48"
            />
            <div class="ml-3 flex-1">
                <h2
                    class="font-semibold text-[14px] leading-[18px] text-[#3B3B3B]"
                >
                    Desain Bareng
                </h2>
                <p class="text-[12px] leading-[16px] text-[#3B3B3B]">
                    Catat tanggalnya! Workshop “Strategi Wawancara Kerja”
                    akan berlangsung pada 10 Juni.
                </p>
            </div>
            <button
                aria-label="Close notification"
                class="absolute top-3 right-3 text-black text-xs font-bold"
            >
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Notifikasi 2 -->
        <div
            class="bg-yellow-300 rounded-xl shadow-md flex items-center p-4 relative"
            style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1)"
        >
            <img
                alt="Webinar Startup"
                class="w-12 h-12 rounded"
                height="48"
                src="https://storage.googleapis.com/a1aa/image/1f353ae2-87f0-46be-25d1-79d74964327c.jpg"
                width="48"
            />
            <div class="ml-3 flex-1">
                <h2
                    class="font-semibold text-[14px] leading-[18px] text-[#3B3B3B]"
                >
                    Webinar Startup : Grow
                </h2>
                <p class="text-[12px] leading-[16px] text-[#3B3B3B]">
                    Event “Webinar Start-Up Mahasiswa” akan dimulai dalam 2
                    jam. Siapkan dirimu!
                </p>
            </div>
            <button
                aria-label="Close notification"
                class="absolute top-3 right-3 text-black text-xs font-bold"
            >
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Notifikasi 3 -->
        <div
            class="bg-yellow-300 rounded-xl shadow-md flex items-center p-4 relative"
            style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1)"
        >
            <img
                alt="Sekolah Sistem Kontrol"
                class="w-12 h-12 rounded"
                height="48"
                src="https://storage.googleapis.com/a1aa/image/ade8161c-7242-4b01-0989-80e299420eb7.jpg"
                width="48"
            />
            <div class="ml-3 flex-1">
                <h2
                    class="font-semibold text-[14px] leading-[18px] text-[#3B3B3B]"
                >
                    Sekolah Sistem Kontrol
                </h2>
                <p class="text-[12px] leading-[16px] text-[#3B3B3B]">
                    Pendaftaran untuk “Sekolah Sistem Kontrol” berhasil! Cek
                    emailmu untuk info selengkapnya.
                </p>
            </div>
            <button
                aria-label="Close notification"
                class="absolute top-3 right-3 text-black text-xs font-bold"
            >
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <!-- Tombol hapus -->
    <button
        class="mt-14 w-full max-w-md bg-yellow-400 text-white font-semibold text-[16px] leading-[24px] rounded-full py-3 shadow-md hover:bg-yellow-500 transition-colors"
    >
        Hapus Semua Notifikasi
    </button>
</div>
@endsection
