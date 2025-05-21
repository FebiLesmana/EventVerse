@extends('layouts.main')
@section('main-content')

<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24 px-4 py-4">
  <img src="{{ asset('storage/' . $dataEvent->poster) }}" alt="{{ $dataEvent->nama }}" class="w-full h-full object-cover"/>

<div class="bg-blue-600 rounded-full w-10 h-10 flex items-center justify-center text-white font-bold select-none">
  {{ strtoupper(substr($dataEvent->organizer, 0, 3)) }}
</div>
<p class="text-gray-900 font-semibold text-sm">{{ $dataEvent->organizer }}</p>

<h2 class="text-xl font-bold my-2">{{ $dataEvent->nama }}</h2>
<p><span class="font-semibold">Deskripsi :</span><br />{{ $dataEvent->deskripsi }}</p>
<p><span class="font-semibold">Tempat Pelaksanaan :</span><br />{{ $dataEvent->tempat }}</p>
<p><span class="font-semibold">Waktu Pelaksanaan :</span><br />{{ $dataEvent->waktu }}</p>
<p><span class="font-semibold">Pembicara/ Pemateri :</span><br />{{ $dataEvent->pembicara }}</p>


  <p class="mt-3 text-xs text-blue-600 font-semibold cursor-pointer select-none mb-8">Baca Selengkapnya...</p>

  <!-- Tombol Daftar -->
  <div>
    <a href="/user/register_user" 
   class="bg-yellow-400 text-white font-bold w-full rounded-full py-4 text-lg shadow-md hover:bg-yellow-500 transition duration-200 inline-block text-center">
   Daftar Sekarang
  </a>
  </div>

</div>

@include('components.nav')

@endsection
