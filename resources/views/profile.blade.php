@extends('Layout.app')
@section('content')
<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- Foto Profil -->
      <div class="flex flex-col items-center">
        <img src="../assets/Navbar/Foto.png" class="w-60 h-auto rounded-lg border border-gray-300">
        
      </div>
  
      <!-- Informasi Mahasiswa -->
      <div class="md:col-span-2">
        <h2 class="text-2xl font-bold text-center text-gray-800"> {{ $nama }} </h2>
        <p class="text-center text-black font-semibold mt-1">{{ $nim }}</p>
        <hr class="my-4 border-t-2 border-blue-900">
  
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Kolom Kiri -->
          <div>
            <div class="mb-4">
              <p class="text-sm text-gray-600"><span class="font-semibold text-black">Jalur</span> Seleksi</p>
              <p class="text-gray-800">SBMPTN / SNBT</p>
            </div>
            <div class="mb-4">
              <p class="text-sm text-gray-600"><span class="font-semibold text-black">Akademik</span> Masuk</p>
              <p class="text-gray-800">20221</p>
            </div>
            <div class="mb-4">
              <p class="text-sm text-gray-600"><span class="font-semibold text-black">Fakultas/</span> Program Studi</p>
              <p class="text-gray-800">Fak. Ilmu Komputer/Sistem Informasi</p>
            </div>
          </div>
  
          <!-- Kolom Kanan -->
          <div>
            <div class="mb-4">
              <p class="text-sm text-gray-600"><span class="font-semibold text-black">Tanggal</span> Lahir</p>
              <p class="text-gray-800">31 Aug 2002</p>
            </div>
            <div class="mb-4">
              <p class="text-sm text-gray-600"><span class="font-semibold text-black">No.</span> Hp</p>
              <p class="text-gray-800">081230666004</p>
            </div>
            <div class="mb-4">
              <p class="text-sm text-gray-600"><span class="font-semibold text-black">Alamat</span> Email</p>
              <p class="text-gray-800">satriabelvanararya@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

  