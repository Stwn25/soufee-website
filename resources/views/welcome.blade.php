@extends('layouts.landing_layouts.app')

@section('title')
    SouFee | Landing Page
@endsection

@section('content')
    <div class="relative w-full mt-16 flex flex-col justify-center items-center">
        <div class="grid grid-cols-[1fr_0.8fr] space-y-4 max-w-[1350px] items-center" style="grid-template-areas: 
        'teks img'
        'desc img'
        'button img';">
            <div style="grid-area: teks">
                <h1 class="font-bold text-[450%] leading-tight">Jembatan Terbaik untuk Petani dan Pengepul Kopi</h1>
            </div>
            <div style="grid-area: desc" class="pt-[20px] pr-24 text-[110%]">
                <p>Dari menghubungkan petani lokal dengan pengepul terbaik hingga 
                    memastikan harga yang adil dan transaksi yang aman, 
                    <span class="font-bold text-[#1C3F3A]">Soufee</span> membantu 
                    Anda mendapatkan manfaat maksimal dari kopi Anda.</p>
            </div>
            <div style="grid-area: button">
                <a href="">  {{-- {{ route('login') }} --}}
                    <button class="bg-[#1C3F3A] text-[#edebe4] font-semibold text-[130%] px-20 py-5 rounded-[35px]">Mulai sekarang</button>
                </a>
            </div>
            <div style="grid-area: img">
                <img src="{{ asset('img/hero-img.png') }}" alt="Landing Image">
            </div>
        </div>
        
        <hr class="border-[#c6c6c661] border-[2px] my-24 w-[1350px]">

        <div class="relative z-5 flex flex-col max-w-[1350px] items-center mb-24">
            <img src="{{ asset('img/Group 8.svg') }}" alt="" class="absolute top-0 left-0 z-[-1]">
            <div class="pb-5">
                <h1 class="font-semibold text-[#1C3F3A] text-[130%]" id="tentangkami">Tentang Kami</h1>
            </div>
            <div class="pb-5 px-10 max-w-[850px] text-center">
                <h1 class="font-semibold text-[300%] leading-tight">Satu platform untuk semua kebutuhan kopi Anda</h1>
            </div>
            <div class="pb-5 max-w-[850px] text-center text-[130%]">
                <p>Menghubungkan petani kopi lokal dengan pengepul terpercaya untuk 
                    menciptakan transaksi yang adil dan transparan.</p>
            </div>
            <div class="grid grid-cols-[0.42fr_1fr] space-x-4 w-[1350px] pt-5">
                <div>
                    <img src="{{ asset('img/img1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/img2.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="relative z-5x flex flex-col w-[1350px] mb-24">
            <img src="{{ asset('img/Group 8.svg') }}" alt="" class="absolute top-0 right-0 z-[-1]">
            <div class="pb-5">
                <h1 class="font-semibold text-[#1C3F3A] text-[130%]" id="kelebihan">Kelebihan</h1>
            </div>
            <div class="pb-5 grid grid-cols-[1fr_0.6fr] space-x-4 items-center">
                <h1 class="font-semibold text-[300%] leading-tight">Nilai lebih di setiap <br> transaksi</h1>
                <p class="text-[130%] text-left">Bergabung bersama kami, dapatkan harga terbaik untuk kopi Anda!</p>
            </div>
            <div>
                <div class="grid grid-cols-2 space-x-6 pt-5">    
                    <div class="bg-white p-10 rounded-[10px] h-[500px] text-black">
                        <h1 class="font-bold text-[250%]">Petani</h1>
                        <p class="text-[130%] pt-8"> <span class="font-semibold">Harga tertinggi</span> <br> Terima penawaran dari berbagai pengepul dan pilih yang terbaik.</p>
                        <p class="text-[130%] pt-8"> <span class="font-semibold">Cakupan luas</span> <br>Jangkau pengepul dari berbagai wilayah, tanpa perantara.</p>
                        <a href=""> {{-- {{ route('register') }} --}}
                            <button class="bg-[#54473F] text-[130%] text-white font-semibold px-10 py-4 mt-10 ml-64 rounded-[30px]">Jual kopi sekarang ></button>
                        </a>
                    </div>
                    <div class="bg-[#54473F] p-10 rounded-[10px] rounded-tr-[125px] text-white">
                        <h1 class="font-bold text-[250%]">Pengepul</h1>
                        <p class="text-[130%] pt-8"> <span class="font-semibold">Akses langsung</span> <br>Terhubung dengan petani dari daerah penghasil kopi terbaik di Indonesia.</p>
                        <p class="text-[130%] pt-8"> <span class="font-semibold">Efisiensi waktu</span> <br>Hemat waktu dengan proses negosiasi yang cepat dan transparan.</p>
                        <a href=""> {{-- {{ route('register') }} --}}
                            <button class="bg-white text-[130%] text-[#54473F] font-semibold px-10 py-4 mt-10 ml-64 rounded-[30px]">Cari kopi sekarang ></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-[1350px] mb-24 relative z-5">
            <img src="{{ asset('img/Group 8.svg') }}" alt="" class="absolute top-[60%] left-0 z-[-1]">
            <div class="pb-5">
                <h1 class="font-semibold text-[#1C3F3A] text-[150%]" id="faq">FAQ</h1>
            </div>
            <div class="pb-5 grid grid-cols-[0.8fr_1fr] space-x-4 items-top">
                <h1 class="font-semibold text-[300%] align- leading-tight">Pertanyaan yang <br> sering diajukan</h1>
                <div>
                    <div>
                        <div class="mb-8">
                            <div class="accordion grid grid-cols-[1fr_0.1fr] space-x-6 items-center mb-4">
                                <p class="font-semibold text-[130%]" id="teks1">Bagaimana cara petani mendaftarkan <br> kopi mereka?</p>
                                <i data-feather="plus" class=" items-center cursor-pointer" id="plus1" onclick="showDesc1()"></i>
                            </div>
                            <div>
                                <p class="text-[130%] pr-24 hidden" id="desc1">Petani dapat mengunggah detail kopi mereka melalui dashboard kami.</p>
                            </div>
                        </div>
                        <hr class="border-[#c6c6c661] border-[2px] w-full">
                    </div>
                    <div>
                        <div class="my-8">
                            <div class="grid grid-cols-[1fr_0.1fr] space-x-6 items-center mb-4">
                                <p class="font-semibold text-[130%]" id="teks2">Bagaimana pengepul memberikan <br> penawaran harga?</p>
                                <i data-feather="plus" class="items-center cursor-pointer" id="plus2"></i>
                            </div>
                            <div>
                                <p class="text-[130%] pr-24 hidden" id="desc2">Pengepul dapat melihat produk dan memberikan penawaran melalui sistem bidding.</p>
                            </div>
                        </div>
                        <hr class="border-[#c6c6c661] border-[2px] w-full">
                    </div>
                    <div>
                        <div class="my-8">
                            <div class="grid grid-cols-[1fr_0.1fr] space-x-6 items-center mb-4">
                                <p class="font-semibold text-[130%]" id="teks3">Apakah transaksi dijamin aman?</p>
                                <i data-feather="plus" class="items-center cursor-pointer" id="plus3"></i>
                            </div>
                            <div>
                                <p class="text-[130%] pr-24 hidden" id="desc3">Ya, kami menggunakan sistem escrow untuk memastikan keamanan kedua belah pihak.</p>
                            </div>
                        </div>
                        <hr class="border-[#c6c6c661] border-[2px] w-full">
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-[0.7fr_1fr] w-[1350px] h-[360px] bg-[#1C3F3A] overflow-hidden rounded-[10px] mb-24">
            <div class="">
                <img src="{{ asset('img/imgkopi.png') }}" alt="" class="w-full">
            </div>
            <div class="px-14 py-4">
                <h1 class="text-white text-[300%] font-semibold">Ubah cara Anda jual dan <br> beli kopi</h1>
                <p class="text-white text-[130%] pt-5">untuk mendapatkan pengalaman jual beli <br> kopi terbaik.</p>
                <a href=""> {{-- {{ route('login') }} --}}
                    <button class="bg-white text-[130%] text-[#1C3F3A] font-semibold px-10 py-4 mt-5 ml-96 rounded-[30px]">Mulai sekarang ></button>
                </a>
            </div>
        </div>

    </div>
@endsection
