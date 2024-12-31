<header class="w-full flex justify-center fixed top-0 bg-[#edebe4] border-b-2 border-[#d7d7d7]">
    <nav class="w-[1540px] px-4 py-6 grid grid-cols-[0.2fr_1fr_0.5fr] items-center justify-between">
        <div class="flex justify-center items-center">
            <a href="#"><h2 class="text-3xl font-bold text-[#1C3F3A]" style="font-family: 'Montserrat', sans-serif;">Soufee</h2></a>
        </div>
        <div class="ml-10">
            <h1 class="text-3xl font-bold text-[#1C3F3A]" style="font-family: 'Montserrat', sans-serif;">Halo, {{ Auth::user()->username }}!</h1>
            <p class="text-[110%] text-[#a2a2a2]" style="font-family: 'Montserrat', sans-serif;">Tingkatkan hasil kopimu, mulai hari ini</p>
        </div>
        <div class="grid grid-cols-[0.2fr_1fr] items-center">
            <div class="border-2 border-[#1C3F3A] justify-center flex size-[50px] p-2 rounded-full cursor-pointer">
                <img src="{{('img/iconamoon_notification.svg') }}" alt="" >
            </div>

            <div id="profil" class="border-2 border-[#1C3F3A] grid grid-cols-[0.2fr_1fr_0.2fr] items-center gap-2 rounded-full cursor-pointer">
                <div class="p-1">
                    <img src="{{ asset('img/image.png') }}" alt="" class="rounded-full">
                </div>
                <div class="flex flex-col">
                    <p class="text-sm font-semibold text-[#1C3F3A]">{{ Auth::user()->name }}</p>
                    <p class="text-sm">{{ Auth::user()->email }}</p>
                </div>
                <i data-feather="chevron-down" class=""></i>
            </div>
        </div>
    </nav>

    <div id="dropdown-profile" class="hidden w-[15%] rounded-md border-2 border-[#1C3F3A] absolute top-24 right-5 px-4  bg-[#edebe4]">
        <a href="">
            <p class="text-[#1C3F3A] my-2 font-medium">Pengaturan Profil</p>
        </a>
        <hr>
        <a href="">
            <p class="text-[#1C3F3A] my-2 font-medium">Panduan Pengguna</p>
        </a>
    </div>

    <script>
        const profil = document.getElementById('profil');
        const dropdown = document.getElementById('dropdown-profile');

        profil.addEventListener('click', () => {
            dropdown.classList.toggle('hidden');
        });

    </script>
</header>
