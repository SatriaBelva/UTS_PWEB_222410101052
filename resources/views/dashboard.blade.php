@extends('Layout.app')
@section('content')
<div class="flex justify-center bg-[#F3F6F9] py-8 px-4 font-[Poppins]">
    <div class="w-full max-w-[1255px] flex flex-col gap-6">
      <div class="flex flex-col md:flex-row gap-4 w-full">
            <!-- Kampus Merdeka -->
            <div class="flex bg-white rounded-xl p-5 gap-5 items-center flex-[3]">
            <img src="../assets/Banner/kampus merdeka.png" alt="kampus merdeka" class="w-[167px] object-contain">
            <div>
                <h3 class="text-[15px] font-bold text-[#181C32] -mt-4 mb-1">Daftarkan Keikutsertaan MBKM Kamu</h3>
                <p class="text-sm font-light mb-4">
                Supaya kegiatan pembelajaran Kampus Merdeka kamu dapat dikonversi ke Mata kuliah.
                Untuk membaca pedoman MBKM klik disini
                </p>
                <div class="flex flex-wrap gap-4">
                <a href="https://kampusmerdeka.kemdikbud.go.id/" target="_blank" class="bg-yellow-300 text-[#181C32] text-sm font-semibold px-5 py-2.5 rounded-lg hover:scale-105 hover:shadow-md transition transform">
                    DAFTAR KAMPUS MERDEKA
                </a>
                <a href="https://kampusmerdeka.kemdikbud.go.id/" target="_blank" class="bg-yellow-300 text-[#181C32] text-sm font-semibold px-5 py-2.5 rounded-lg hover:scale-105 hover:shadow-md transition transform">
                    DAFTAR KAMPUS MERDEKA PERTUKARAN PELAJAR
                </a>
                </div>
            </div>
            </div>
    
            <!-- PDDIKTI -->
            <div class="flex flex-col items-center justify-center text-center bg-[#E8FFF3] border-2 border-dashed border-[#50CD89] rounded-xl p-5 w-full flex-[1]">
            <img src="../assets/Banner/pddikti.png" alt="pddikti" class="w-[150px] object-contain mb-2">
            <h3 class="text-[15px] font-bold text-[#181C32] -mt-4 mb-1">INFORMASI DATA PDDIKTI</h3>
            <p class="text-[11px] font-semibold text-[#3F4254]">Data kamu sudah ada di PDDIKTI</p>
            <p class="text-[11px] font-normal text-[#3F4254] mb-2">Informasi detail klik link di bawah ini</p>
            <a href="https://pddikti.kemdiktisaintek.go.id/" target="_blank" class="text-[#009EF7] font-bold text-[11px] mt-1 hover:underline">DATA PDDIKTI</a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[30%_auto] gap-4 mt-8">
            <!-- Dashboard Section -->
            <div class="flex flex-col">
              <div class="text-[23px] font-bold text-[#181C32] mb-5">
                Dashboard
                <span class="text-white text-[10px] font-medium bg-[#009EF7] px-2 py-0.5 rounded ml-1">TA 2024/2025 Genap</span>
              </div>
              <div class="grid grid-cols-2 gap-5">
                    @foreach ($dashboard as $dashboard)
                      <div class="flex flex-col rounded-xl text-white p-6" style="background-color: {{ $dashboard['bg'] }}">
                          <div class="h-10 mb-4">
                              <img src="{{ $dashboard['img'] }}" alt="SKS Tempuh" class="h-full object-contain">
                          </div>
                          <div class="text-[14px] font-semibold">{{ $dashboard['title'] }}</div>
                          <div class="text-[22px] font-bold">{{ $dashboard['value'] }}</div>
                      </div>
                    @endforeach
              </div>
            </div>
          
            <!-- Menu Section -->
            <div class="flex flex-col">
              <div class="text-[23px] font-bold text-[#181C32] mb-5">Menu</div>
              <div class="flex flex-col gap-4">
                
                <!-- Menu Top -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                  @foreach ( $menuTop as $menuTop)
                    <a href="{{ route('pengelolaan', ['nama' => $nama, 'nim' => $nim]) }}">
                      <div class="bg-white rounded-xl px-4 py-12 h-42 cursor-pointer hover:bg-blue-50 transition ">
                        <div class="flex items-center mb-3 pl-6">
                          <img src="{{ $menuTop['img'] }}"  class="h-8 object-contain">
                        </div>
                        <div class="pl-6 text-[19px] font-medium text-[#3F4254] hover:text-blue-600">{{ $menuTop['title'] }}</div>
                      </div>
                    </a>
                  @endforeach
                  
                </div>

                <!-- Menu Bottom -->
                <div class="grid grid-cols-3 gap-6">
                  @foreach ( $menuBottom as $menuBottom)
                    <a href="{{ route('pengelolaan', ['nama' => $nama, 'nim' => $nim]) }}">
                      <div class="bg-white rounded-xl px-4 py-9 cursor-pointer hover:bg-blue-50 transition">
                        <div class="flex items-center mb-3 pl-6">
                          <img src="{{ $menuBottom['img'] }}" alt="Kegiatan" class="h-8 object-contain">
                        </div>
                        <div class="pl-6 text-[19px] font-medium text-[#3F4254] hover:text-blue-600">{{ $menuBottom['title'] }}</div>
                      </div>
                    </a>
                  @endforeach
                </div>
              </div>
            </div>
    </div>
    <h3 class="text-xl font-semibold mb-4">Kalender Akademik Tahun Akademik 2024/2025 Genap</h3>
        <div class="bg-white rounded-2xl p-6 w-full overflow-auto">
            <table class="w-full table-auto text-sm font-poppins">
                <tbody>
                    @foreach ( $calendarContent as $calendarContent )
                    <tr>
                        <td rowspan="2" class="align-top w-2">
                        <span class="inline-block w-1 h-10 bg-gray-400 rounded mr-2"></span>
                        </td>
                        <td colspan="5" class="font-regular text-gray-800 py-1">{{ $calendarContent }}</td>
                    </tr>
                    <tr>
                        <td class="text-gray-500 font-medium whitespace-nowrap">2 Januari 2025</td>
                        <td class="text-center text-gray-400 w-6"><i class="fa fa-rocket"></i></td>
                        <td class="px-2 text-center text-gray-700">
                        <span class="inline-block w-full text-xs font-light">---------------------------------------------------------- &nbsp;&nbsp;&nbsp;s.d.&nbsp;&nbsp;&nbsp; ----------------------------------------------------------</span>
                        </td>
                        <td class="text-center text-gray-400 w-6"><i class="fa fa-flag"></i></td>
                        <td class="text-gray-500 font-medium whitespace-nowrap">31 Januari 2025</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h3 class="text-xl font-semibold mb-4">Jadwal Hari Ini</h3>
        <div class="bg-white rounded-2xl p-6 flex flex-col justify-center items-center">
            <div class="text-[26px] font-bold text-[#181C32] py-12 px-7 text-center">
                BELUM ADA JADWAL HARI INI
            </div>
            <div class="h-[373px] w-full flex justify-center items-center px-12 pb-4">
                <img src="../assets/Jadwal/empty.png" alt="Jadwal Kosong" class="h-full object-contain" />
            </div>
        </div>
</div>  
@endsection