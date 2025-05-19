@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24">
  <div class="flex items-center justify-between px-4 py-3">
    <h1 class="text-xl font-bold text-yellow-500">EventVerse.</h1>
    <div class="flex space-x-4">
      <button><i class="fi fi-tr-calendar"></i></button>
      <button><i class="fi fi-tr-bell"></i></button>
    </div>
  </div>         
  <div class="px-4">
    <h2 class="font-semibold text-lg mb-2">Daftar Pengajuan Event</h2>
  </div>
        <!-- main content -->
            <div class="rounded-lg px-4">
                <div class="flex text-xs font-semibold text-gray-700 px-3 py-2">
                    <div class="w-1/3">Jenis Event</div>
                    <div class="w-1/3">Status</div>
                    <div class="w-1/3">Waktu Pengajuan</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Seminar</div>
                    <div class="w-1/3">Pending</div>
                    <div class="w-1/3">11 April 2025 10.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Essay</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Des 2024 09.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Webinar</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Nov 2024 14.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Seminar</div>
                    <div class="w-1/3">Pending</div>
                    <div class="w-1/3">11 April 2025 10.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Essay</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Des 2024 09.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Webinar</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Nov 2024 14.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Seminar</div>
                    <div class="w-1/3">Pending</div>
                    <div class="w-1/3">11 April 2025 10.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Essay</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Des 2024 09.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Webinar</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Nov 2024 14.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Seminar</div>
                    <div class="w-1/3">Pending</div>
                    <div class="w-1/3">11 April 2025 10.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Essay</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Des 2024 09.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Webinar</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Nov 2024 14.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Seminar</div>
                    <div class="w-1/3">Pending</div>
                    <div class="w-1/3">11 April 2025 10.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Essay</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Des 2024 09.20</div>
                </div>
                <div class="flex text-xs text-gray-700 px-3 py-3">
                    <div class="w-1/3">Webinar</div>
                    <div class="w-1/3">Disetujui</div>
                    <div class="w-1/3">17 Nov 2024 14.20</div>
                </div>
            </div>
        <!-- Ajukan event -->
        <div>
    <button
      class="bg-yellow-400 text-white font-bold w-full rounded-full py-4 text-lg shadow-md hover:bg-yellow-500 transition duration-200"
      type="button">
      Ajukan Event
    </button>
  </div>

  @include('components.nav')
</div>

@endsection