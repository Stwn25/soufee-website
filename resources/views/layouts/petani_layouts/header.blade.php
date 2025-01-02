<header class="w-full flex justify-center fixed top-0 z-40 bg-[#edebe4] border-b-2 border-[#d7d7d7]">
    <nav class="w-[100vw] px-4 py-6 grid grid-cols-[0.3fr_1fr_0.4fr] items-center justify-between">
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
                <div class=" w-12 h-12 rounded-full overflow-hidden">
                    @if (Auth::user()->image == null)
                        <img src="{{ asset('img/image.png') }}" alt="" class="rounded-full">
                    @else
                        <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="" class="rounded-full">
                    @endif
                </div>
                <div class="flex flex-col">
                    <p class="text-sm font-semibold text-[#1C3F3A]">{{ Auth::user()->name }}</p>
                    <p class="text-sm">{{ Auth::user()->email }}</p>
                </div>
                <i data-feather="chevron-down" class=""></i>
            </div>
        </div>
    </nav>

    <div id="dropdown-profile" class="hidden w-[17%] rounded-md border-2 border-[#1C3F3A] absolute top-24 right-5 px-3 py-2  bg-[#edebe4]">
        <a href="{{ route('profil-petani') }}" class="flex gap-3 py-1">
            <img src="{{ asset('img/hugeicons_account-setting-02.svg') }}" alt="">
            <p class="text-[#1C3F3A] my-2 font-medium">Pengaturan Profil</p>
        </a>
        <hr>
        <a href="" class="flex gap-3 py-1">
            <img src="{{ asset('img/lucide_book-open-text.svg') }}" alt="">
            <p class="text-[#1C3F3A] my-2 font-medium">Panduan Pengguna</p>
        </a>
    </div>

    <script>
        const profil = document.getElementById('profil');
        const dropdown = document.getElementById('dropdown-profile');

        profil.addEventListener('click', () => {
            dropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
        if (!dropdown.contains(event.target) && !profil.contains(event.target)) {
            dropdown.classList.add('hidden');
            }
        });

    </script>
</header>
