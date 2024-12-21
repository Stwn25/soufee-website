@extends('layouts.auth_layout.main')
@section('title', 'Soufee | Daftar')
@section('content')
    <main class="w-full h-screen flex justify-center items-center">
        <section class="w-[1350px] h-[700px] grid grid-cols-2 rounded-lg p-4 gap-6 bg-[#f9f7ed] ">
            {{-- @include('_message') --}}
        <div class="h-full w-full flex items-center justify-center flex-col relative">
            <div class="flex justify-center absolute top-6 flex-col text-center w-[80%]">
                <a href="/">
                    <i data-feather="arrow-left" class="absolute top-4 left-0 cursor-pointer"></i>
                </a>
                <p style="font-family: 'Montserrat', sans-serif;" class="text-5xl font-bold text-[#1C3F3A]">Soufee</p>
                <p style="font-family: 'Montserrat', sans-serif;" class="text-3xl font-semibold mt-6 text-black">Daftarkan akun Anda!</p>
                <p style="font-family: 'Montserrat', sans-serif;" class="text-xl text-black">Mohon masukkan data akun</p>
            </div>
        <form class="mt-36 w-[80%]" action="{{ route('register-proses') }}" method="get" id="daftar-pengepul"> 
                @csrf
                <!-- Button Group -->
                <div class="flex flex-row justify-center">
                    <div class="">
                        <input type="radio" class="btn-check" name="role" id="btnPengepul"
                            value="pengepul" autocomplete="off" required>
                        <label class="btn btn-outline-success" for="btnPengepul">Pengepul</label>

                        <input type="radio" class="btn-check" name="role" id="btnPetani"
                            value="petani" autocomplete="off">
                        <label class="btn btn-outline-success" for="btnPetani">Petani</label>
                    </div>
                </div>

                <!-- Name Field -->
                <div class="">
                    <label for="yourName" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="yourName"
                        value="{{ old('name') }}">
                    <div class="invalid-feedback">Mohon masukkan nama lengkap Anda!</div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="">
                    <label for="yourEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="yourEmail"
                        value="{{ old('email') }}" required>
                    <div class="invalid-feedback">Mohon masukkan alamat email yang valid!</div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword"
                        required>
                    <div class="invalid-feedback">Mohon masukkan password Anda!</div>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Terms and Conditions -->
                <div class="mb-2">
                    <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox"
                            value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">
                            Saya setuju dan menerima <a href="#" class="font-semibold">Syarat & Ketentuan</a>
                        </label>
                        <div class="invalid-feedback">Harus menyetujui sebelum submit.</div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mb-6">
                    <button class="bg-[#1C3F3A] hover:bg-[#1C3F3A]/90 w-full text-white py-[15px] rounded-lg" type="submit">Daftar</button>
                </div>

                <!-- Already Registered -->
                <div class="flex justify-center">
                    <p class="small mb-0">Sudah memiliki akun? <a href="{{ route('login')}}"><span class="text-[#1C3F3A] font-semibold">Masuk</span></a></p>
                </div>
            </form>
        </div>

        <div class="h-full w-full rounded-lg overflow-hidden">
            <img src="{{ asset('img/login-img.jpg') }}" alt="" class="h-full w-full object-cover object-center">
        </div>

        </section>
    </main><!-- End #main -->
@endsection
