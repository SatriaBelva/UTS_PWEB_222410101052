<nav class="flex flex-col md:flex-row justify-between items-center bg-[#0B242F] text-white px-6 md:px-[130px] py-4 md:h-[100px] sticky top-0 z-50 font-[Poppins]">
    <div class="flex flex-col md:flex-row items-center w-full md:w-auto">
        <div class="flex flex-row items-center justify-between w-full md:w-auto">
            <a href="{{ route('dashboard', ['nama' => $nama, 'nim' => $nim]) }}" class="flex flex-col items-end md:items-start md:mr-4 no-underline">
                <span class="text-[14px] text-white">SISTEM INFORMASI AKADEMIK</span>
                <span class="text-[#A1A5B7] text-[12px]">UNIVERSITAS JEMBER</span>
            </a>
            <a href="{{ route('dashboard', ['nama' => $nama, 'nim' => $nim]) }}" class="md:hidden block">
                <img src="../assets/Navbar/UNEJ.png" alt="" class="h-[50px] w-[50px]">
            </a>
        </div>

        <div class="hidden md:block ml-4">
            <a href="{{ route('dashboard', ['nama' => $nama, 'nim' => $nim]) }}">
                <img src="../assets/Navbar/UNEJ.png" alt="" class="h-[70px] w-[70px]">
            </a>
        </div>

        <div class="mt-2 md:mt-0 md:ml-8 border border-[#3D3C51] text-[#EDEDED] text-[12px] px-4 py-2 rounded-[8px] hover:bg-[#2E2D42] hover:border-[#2E2D42] cursor-pointer">
            Mahasiswa
        </div>
    </div>

    <!-- RIGHT SECTION -->
    <div class="flex flex-col md:flex-row items-center mt-4 md:mt-0 space-y-4 md:space-y-0 md:space-x-2">
        <!-- Icons -->
        <div class="flex items-center space-x-2">
            <div class="flex items-center justify-center h-[40px] w-[40px]">
                <img src="../assets/Navbar/magnifier.png" alt="" class="h-[20px] w-[20px]">
            </div>
            <div class="flex items-center justify-center h-[40px] w-[40px]">
                <img src="../assets/Navbar/theme.png" alt="" class="h-[20px] w-[20px]">
            </div>
            <div class="flex items-center justify-center h-[40px] w-[40px]">
                <img src="../assets/Navbar/app.png" alt="" class="h-[20px] w-[20px]">
            </div>
            <div class="flex items-center justify-center h-[40px] w-[40px]">
                <img src="../assets/Navbar/megaphone.png" alt="" class="h-[20px] w-[20px]">
            </div>
            <div class="flex items-center justify-center h-[40px] w-[40px]">
                <img src="../assets/Navbar/menu.png" alt="" class="h-[20px] w-[20px]">
            </div>
        </div>

        <!-- User Info -->
        <a href="{{ route('profile', ['nama' => $nama, 'nim' => $nim]) }}">
            
            <div class="flex items-center text-left space-x-2">
                <div>
                    <img src="../assets/Navbar/Foto.png" alt="" class="h-[45px] w-[45px] md:h-[60px] md:w-[60px] rounded-[7px]">
                </div>
                <div class="flex flex-col justify-center">
                    <span class="text-[14px] md:text-base">{{ $nama }}</span>
                    <span class="text-[12px] text-[#A1A5B7]">{{ $nim }}</span>
                </div>
            </div>
        </a>
    </div>
</nav>

