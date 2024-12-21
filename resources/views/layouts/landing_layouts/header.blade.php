<header class="w-full font-monsterrat flex justify-center fixed top-0 z-40 bg-[#EBE8D8]">
    <nav class="w-[1540px] px-4 py-6 grid grid-cols-[0.2fr_1fr_0.2fr] items-center justify-between">
        <div class="flex justify-center items-center">
            <h2 class="text-4xl font-bold text-[#1C3F3A]"><a href="/">Soufee</a></h2>
        </div>
        <ul class="flex text-[#1C3F3A] text-[110%] gap-[50px] justify-center">
            <li><a href="#tentangkami">Tentang Kami</a></li>
            <li><a href="#kelebihan">Kelebihan</a></li>
            <li><a href="#faq">FAQ</a></li>
        </ul>
        <div class="flex justify-center items-center gap-6">
            <a href="{{ route('login') }}" class="text-[#1C3F3A]">Masuk</a>
            <a href="{{ route('register') }}"> 
                <button class="bg-[#1C3F3A] text-white px-6 py-2 rounded-[25px]">Daftar</button>
            </a>
        </div>
    </nav>
</header>

{{-- repeat(3, minmax(0, 1fr)) --}}
