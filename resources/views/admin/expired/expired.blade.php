@extends('layouts.main')
@section('main-content')
<body class="bg-white">

  <div class="min-h-screen flex flex-col">
  
    <div class="flex flex-1">
      @include('components.nav-admin-expired')
  
      <!-- Konten utama -->
      <main class="flex-1 p-8">
        <!-- Search -->
        <div class="mb-10 relative w-full max-w-full">
          <input
            type="text"
            placeholder="Search..."
            class="w-full border border-gray-300 rounded-md py-3 pl-4 pr-12 focus:outline-none focus:ring-2 focus:ring-yellow-logo"
          />
          <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
          </div>
        </div>
  
        <div class="overflow-x-auto">
          <table class="w-full border border-gray-300 rounded-lg">
            <thead>
              <tr class="bg-white border-b border-gray-300">
                <th class="text-left text-gray-600 font-semibold text-sm py-3 px-5 border-r border-gray-300 items-center justify-center">Nama Event</th>
                <th class="text-left text-gray-600 font-semibold text-sm py-3 px-5 border-r border-gray-300 items-center justify-center">Jenis Event</th>
                <th class="text-left text-gray-600 font-semibold text-sm py-3 px-5 border-r border-gray-300 items-center justify-center">Deskripsi</th>
                <th class="text-left text-gray-600 font-semibold text-sm py-3 px-5 border-r border-gray-300 items-center justify-center">Kode Event</th>
                <th class="text-left text-gray-600 font-semibold text-sm py-3 px-5 border-r border-gray-300 items-center justify-center">Waktu Pelaksanaan</th>
                <th class="text-left text-gray-600 font-semibold text-sm py-3 px-5 border-r border-gray-300 items-center justify-center">Hapus</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b border-gray-300 text-gray-700 text-sm">
                <td class="py-4 px-5 border-r border-gray-300">SchoolProg</td>
                <td class="py-4 px-5 border-r border-gray-300">Seminar</td>
                <td class="py-4 px-5 border-r border-gray-300">.....</td>
                <td class="py-4 px-5 border-r border-gray-300">Seminar E11-101</td>
                <td class="py-4 px-5 border-r border-gray-300">11-12 Juni 2025</td>
                <td class="py-4 px-4 border-r border-gray-300">
                  <div class="flex items-center justify-center">
                  <input type="checkbox" class="form-checkbox w-4 h-4 text-blue-600" />
                  </div>
                </td>

              </tr>
              <tr class="border-b border-gray-300 text-gray-700 text-sm">
                <td class="py-4 px-5 border-r border-gray-300">Gemaste</td>
                <td class="py-4 px-5 border-r border-gray-300">Essay</td>
                <td class="py-4 px-5 border-r border-gray-300">.....</td>
                <td class="py-4 px-5 border-r border-gray-300">Graha Cendekia</td>
                <td class="py-4 px-5 border-r border-gray-300">12-13 Agustus 2025</td>
                <td class="py-4 px-4 border-r border-gray-300">
                  <div class="flex items-center justify-center">
                  <input type="checkbox" class="form-checkbox w-4 h-4 text-blue-600" />
                  </div>
                </td>
              </tr>
              <tr class="text-gray-700 text-sm">
                <td class="py-4 px-5 border-r border-gray-300">Riptech</td>
                <td class="py-4 px-5 border-r border-gray-300">Webinar</td>
                <td class="py-4 px-5 border-r border-gray-300">.....</td>
                <td class="py-4 px-5 border-r border-gray-300">Dekanat Lantai 3</td>
                <td class="py-4 px-5 border-r border-gray-300">04 September 2025</td>
                <td class="py-4 px-4 border-r border-gray-300">
                  <div class="flex items-center justify-center">
                  <input type="checkbox" class="form-checkbox w-4 h-4 text-blue-600" />
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Tombol Simpan -->
        <div class="mt-12 flex justify-end">
          <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-xl transition duration-200">
            Simpan Perubahan
          </button>
        </div>

      </main>
    </div>
  
    <!-- Footer warna kuning -->
    <footer class="bg-yellow-400 h-16"></footer>
  </div>
  
  </body>
</html>