@extends('layouts.auth_layout.main')
@section('title', 'Soufee | Masuk')
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
                        <p style="font-family: 'Montserrat', sans-serif;" class="text-3xl font-semibold mt-12 text-black">Selamat datang kembali!</p>
                        <p style="font-family: 'Montserrat', sans-serif;" class="text-xl text-black">Mohon masukkan data akun</p>
                    </div>
                    <form class="mt-32 w-[80%]" method="POST" action="{{ route('login-proses') }}">
                        @csrf
                        <div class="">
                            <label for="yourEmail" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <input type="text" name="email" class="form-control" id="yourEmail"
                                    required>
                                <div class="invalid-feedback">Mohon masukkan email Anda!.</div>
                            </div>
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="mb-12">
                            <label for="yourPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="yourPassword">
                            <div class="invalid-feedback">Mohon masukkan password Anda!</div>
                        </div>
                        @error('username')
                            <p>{{ $message }}</p>
                        @enderror


                        <div class="mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                    value="true" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Ingat aku</label>
                            </div>
                        </div>
                        <div class="mb-6">
                            <button class="bg-[#1C3F3A] hover:bg-[#1C3F3A]/90 w-full text-white py-[15px] rounded-lg" type="submit">Masuk</button>
                        </div>
                        <div class="flex justify-center">
                            <p class="">Belum memiliki akun? <a href="{{ route('register') }}"><span class="text-[#1C3F3A] hover:text-[#1C3F3A]/90 font-semibold">Daftar</span></a></p>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if ($message = Session::get('error'))
                            <script>
                                Swal.fire('{{ $message }}');
                            </script>
                        @endif
                    </form>
                </div>

                <div class="h-full w-full rounded-lg overflow-hidden">
                    <img src="{{ asset('img/login-img.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                </div>
                
            </section>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ 'assets/vendor/apexcharts/apexcharts.min.js' }}"></script>
    <script src="{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
    <script src="{{ 'assets/vendor/chart.js/chart.umd.js' }}"></script>
    <script src="{{ 'assets/vendor/echarts/echarts.min.js' }}"></script>
    <script src="{{ 'assets/vendor/quill/quill.js' }}"></script>
    <script src="{{ 'assets/vendor/simple-datatables/simple-datatables.js' }}"></script>
    <script src="{{ 'assets/vendor/tinymce/tinymce.min.js' }}"></script>
    <script src="{{ 'assets/vendor/php-email-form/validate.js' }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ 'assets/js/main.js' }}"></script>
   
@endsection
