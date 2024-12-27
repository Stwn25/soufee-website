        <!-- Sidebar -->
        <div class="h-full ml-2">
            <div class="gap-3 flex flex-col sticky top-32 min-h-[82vh]">
                <h1 class="text-[#a2a2a2]" style="font-family: Montserrat, 'sans-serif';">Menu</h1>

                <!-- Link Katalog -->
                <a href="{{ route('dashboard-petani') }}"> 
                    <div class="bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8" id="bt-katalog">
                        <img src="{{ asset('img/streamline_coffee-bean-1.svg') }}" id="img-katalog-1" alt="">
                        <img src="{{ asset('img/streamline_coffee-bean.svg') }}" id="img-katalog-2" alt="" class="hidden">
                        <p class="text-[#1C3F3A] text-[110%]" id="teks-katalog">Tawaran</p>
                    </div>
                </a>

                <!-- Link Penjemputan -->
                <a href=""> {{--  --}}
                    <div class="bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8"
                        id="bt-penjemputan">
                        <img src="{{ asset('img/hugeicons_truck.svg') }}" alt="" id="img-truk-1">
                        <img src="{{ asset('img/hugeicons_truck-1.svg') }}" alt="" id="img-truk-2" class="hidden">
                        <p class="text-[#1C3F3A] text-[110%]" id="teks-penjemputan">Penjemputan</p>
                    </div>
                </a>

                <!-- Link Riwayat -->
                <a href=""> {{-- {{route('riwayat-petani')}} --}}
                    <div class="bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8"
                        id="bt-riwayat">
                        <img src="{{ asset('img/lucide_history.svg') }}" alt="" id="img-riwayat-1">
                        <img src="{{ asset('img/lucide_history-1.svg') }}" alt="" id="img-riwayat-2" class="hidden">
                        <p class="text-[#1C3F3A] text-[110%]" id="teks-riwayat">Riwayat</p>
                    </div>
                </a>

                <!-- Logout -->
                <a href="{{ route('logout') }}" class="text-[#1C3F3A] text-[130%]" id="teks-riwayat">
                    <div class="absolute bottom-0 w-full bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex justify-center items-center gap-2">
                        <p class="text-[#1C3F3A]" id="teks-riwayat">Keluar</p>
                        <img src="{{ asset('img/line-md_logout.svg') }}" alt="" id="img-riwayat-1" class="size-[30px]">
                    </div>
                </a>
            </div>
        </div>
