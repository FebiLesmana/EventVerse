@extends('layouts.main')
@section('main-content')

<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24 px-4 py-4">
  <!-- Bagian Poster -->
  <div class="w-full h-64 md:h-96 mb-8 rounded-3xl overflow-hidden shadow-md">
    <img src="{{ asset('img/terdekat_2.png')}}" alt="Training Tech 2024" alt="Poster Event" class="w-full h-full object-cover"/>
  </div>

  <!-- Konten Informasi -->
  <div class="flex items-center justify-between border-t border-b border-gray-200 py-4 mb-6">
    <div class="flex items-center space-x-3">
      <div class="bg-blue-600 rounded-full w-10 h-10 flex items-center justify-center text-white font-bold select-none">
        ESC
      </div>
      <div>
        <p class="text-gray-900 font-semibold text-sm">@esc.elektrounnes</p>
      </div>
    </div>
    <button class="border border-gray-300 rounded-full px-4 py-1 text-xs font-semibold hover:bg-gray-100 transition duration-150">
      Follow
    </button>
  </div>

  <div class="text-gray-700 text-xs leading-relaxed space-y-3 mb-6">
    <p><span class="font-semibold">Deskripsi :</span><br />
    Training Tech adalah program pelatihan yang dirancang untuk meningkatkan pemahaman dan keterampilan peserta dalam bidang teknologi informasi dan digital. Kegiatan ini mencakup berbagai topik seperti dasar-dasar pemrograman, pengembangan web, keamanan siber, penggunaan alat kolaboratif, hingga pengenalan kecerdasan buatan.</p>

    <p><span class="font-semibold">Tempat Pelaksanaan :</span><br />
    Ruang Seminar E11</p>

    <p><span class="font-semibold">Waktu Pelaksanaan :</span><br />
    Sabtu, 18 Desember 2024<br />
    Jam 07:00 - Selesai</p>

    <p><span class="font-semibold">Pembicara/ Pemateri :</span><br />
    Fernando Ari S.T., M.T.</p>
  </div>

  <p class="mt-3 text-xs text-blue-600 font-semibold cursor-pointer select-none mb-8">Baca Selengkapnya...</p>

  <!-- Tombol Daftar -->
  <div>
    <button
      class="bg-yellow-400 text-white font-bold w-full rounded-full py-4 text-lg shadow-md hover:bg-yellow-500 transition duration-200"
      type="button"
    >
      Daftar Sekarang
    </button>
  </div>

</div>

@include('components.nav')

@endsection
