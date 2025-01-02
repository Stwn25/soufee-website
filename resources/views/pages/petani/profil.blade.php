@extends('layouts.petani_layouts.profil')

@section('title')
    SouFee | Profil
@endsection

@section('content')
    <div class="w-[80%] h-[90%] rounded-2xl bg-[#f9f7ed] grid grid-cols-[0.3fr_1fr] gap-2 relative z-2">
        <div class="p-4 flex flex-col gap-2">
            
            <div class="flex gap-8 mb-4">
                <a href="{{ route('dashboard-petani') }}">
                    <i data-feather="arrow-left" class="cursor-pointer text-[#1C3F3A]"></i>
                </a>
                <p class="font-medium">Pengaturan Profil</p>
            </div>
            <div class="border-2 py-2 px-4 border-[#1C3F3A] bg-[#1C3F3A] cursor-pointer rounded-xl" id="bt-profil">
                <p class="text-[#edebe4] font-medium" id="teks-profil">Profil</p>
            </div>
        
            <div class="border-2 py-2 px-4 border-[#1C3F3A] cursor-pointer rounded-xl" id="bt-password">
                <p class="text-[#1C3F3A] font-medium" id="teks-password">Password</p>
            </div>
    
        </div>
        <div class="p-4 border-l-2 border-[#eaeaea]">
            <div class="" id="data-profil">
                <p class="text-2xl font-semibold">Profil</p>
                <p class="">Perbarui informasi profil anda</p>
                <hr class="my-3 border-2">
                <form action="{{ route('update-profil-petani', Auth::user()->id_user) }}" method="POST" class="w-full flex flex-col" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="relative">
                        <div class="flex items-center justify-center">
                            <div class="w-36 h-36 rounded-full flex items-center justify-center overflow-hidden cursor-pointer" id="img">
                                @if (Auth::user()->image == null)
                                    <img src="{{ asset('img/image.png') }}" alt="" >
                                @else
                                    <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="" >
                                @endif
                            </div>
                        </div>
                        <div id="bt-img" class="border-1 border-[#1C3F3A] bg-[#f9f7ed] rounded-full p-2 cursor-pointer absolute bottom-0 right-[43%] gap-2 items-center">
                            <img src="{{ asset('img/lucide_pen-line.svg') }}" alt="">
                        </div>

                        <input type="file" id="image" name="image" accept="image/*" class="hidden">
                    </div>

                    <label for="" class="font-semibold">Nama</label>
                    <input type="text" id="nama" name="name" class="mb-4 border-0 px-8 py-2 rounded-xl" value="{{ Auth::user()->name }}">

                    <label for="" class="font-semibold">Username</label>
                    <input type="text" id="username" name="username" class="mb-4 border-0 px-8 py-2 rounded-xl" value="{{ Auth::user()->username }}">

                    <label for="" class="font-semibold">Email</label>
                    <input type="email" id="email" name="email" class="mb-4 border-0 px-8 py-2 rounded-xl" value="{{ Auth::user()->email }}">

                    <label for="" class="font-semibold">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="mb-4 border-0 px-8 py-2 rounded-xl" value="{{ Auth::user()->alamat }}" placeholder="Masukkan alamat Anda">

                    <button id="bt-perbarui" class="px-16 py-3 border-2 border-[#1C3F3A] font-semibold text-[#1C3F3A] rounded-md absolute bottom-4 right-4">Perbarui</button>

                </form>
            </div>

            <div class="hidden" id="data-password">
                <p class="text-2xl font-semibold">Password</p>
                <p class="">Perbarui informasi password anda</p>
                <hr class="my-3 border-2">
                <form action="{{ route('update-password-petani', Auth::user()->id_user) }}" method="POST" class="flex flex-col">
                    @csrf
                    @method('PUT')
                    <label for="" class="font-semibold">Password lama</label>
                    <input type="password" id="password" name="password_lama" class="mb-4 border-0 px-8 py-2 rounded-xl" placeholder="Masukkan password lama anda">

                    <label for="" class="font-semibold">Password baru</label>
                    <input type="password" id="password" name="password_baru" class="mb-4 border-0 px-8 py-2 rounded-xl" placeholder="Masukkan password baru anda">

                    <label for="" class="font-semibold">Konfirmasi password</label>
                    <input type="password" id="password" name="konfirmasi_password" class="mb-4 border-0 px-8 py-2 rounded-xl" placeholder="Masukkan konfirmasi password anda">

                    <button class="px-16 py-3 border-2 border-[#1C3F3A] bg-[#1C3F3A] font-semibold text-[#f9f7ed] rounded-md absolute bottom-4 right-4">Ubah Password</button>
                </form>
            </div>
    </div>

    <div class="w-full absolute top-0 z-99 bottom-0 rounded-2xl overflow-hidden hidden items-center justify-center" id="overlay">
        <div class="absolute z-2 w-[35%]">
            <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="">
        </div>
        <div class="w-full absolute top-0 bottom-0 bg-black opacity-50 rounded-2xl"></div>
        <div class="absolute z-4 top-8 right-8 cursor-pointer" id="bt-close">
            <i data-feather="x" class="text-white size-12"></i>
        </div>
    </div>
</div>


<script>
    //script untuk menampilkan overlay
    const img = document.getElementById('img');
    const overlay = document.getElementById('overlay');
    const close = document.getElementById('bt-close');

    img.addEventListener('click', () => {
        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
    })

    close.addEventListener('click', () => {
        overlay.classList.remove('flex');
        overlay.classList.add('hidden');
    })

    //script untuk input gambar
    const imgInput = document.getElementById('image');
    const btimg = document.getElementById('bt-img');

    btimg.addEventListener('click', () => {
        imgInput.click();
    })


    //script untuk perubahan tab

    const btProfil = document.getElementById('bt-profil');
    const teksProfil = document.getElementById('teks-profil');
    const btPassword = document.getElementById('bt-password');
    const teksPassword = document.getElementById('teks-password');
    const dataProfil = document.getElementById('data-profil');
    const dataPassword = document.getElementById('data-password');

    
    btProfil.addEventListener('click', () => {
        dataProfil.classList.remove('hidden');
        dataPassword.classList.add('hidden');
        btProfil.style.backgroundColor = '#1C3F3A';
        teksProfil.style.color = '#f9f7ed';
        btPassword.style.backgroundColor = '#f9f7ed';
        teksPassword.style.color = '#1C3F3A';
    })

    btPassword.addEventListener('click', () => {
        dataPassword.classList.remove('hidden');
        dataProfil.classList.add('hidden');
        btPassword.style.backgroundColor = '#1C3F3A';
        teksPassword.style.color = '#f9f7ed';
        btProfil.style.backgroundColor = '#f9f7ed';
        teksProfil.style.color = '#1C3F3A';
    })
    
    //script untuk perubahan pada value dan otomatis mengaktifkan tombol
    const nama = document.getElementById('nama');
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const alamat = document.getElementById('alamat');
    
    const btPerbarui = document.getElementById('bt-perbarui');

    const initialNama = "{{ Auth::user()->nama }}";
    const initialUsername = "{{ Auth::user()->username }}";
    const initialEmail = "{{ Auth::user()->email }}";
    const initialAlamat = "{{ Auth::user()->alamat }}";

    // Fungsi untuk memeriksa perubahan
    const checkChanges = () => {
        if (nama.value !== initialNama || username.value !== initialUsername || email.value !== initialEmail || alamat.value !== initialAlamat) {
            btPerbarui.style.backgroundColor = '#1C3F3A';
            btPerbarui.style.color = '#f9f7ed';
            btPerbarui.disabled = false; // Aktifkan tombol
        } else {
            btPerbarui.style.backgroundColor = '#f9f7ed';
            btPerbarui.style.color = '#1C3F3A';
            btPerbarui.disabled = true; // Nonaktifkan tombol
        }
    };

    // Tambahkan event listener pada semua input
    nama.addEventListener('input', checkChanges);
    username.addEventListener('input', checkChanges);
    email.addEventListener('input', checkChanges);
    alamat.addEventListener('input', checkChanges);

    feather.replace()
</script>
@endsection