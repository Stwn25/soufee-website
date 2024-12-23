<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="{{('img/logo.png')}}" rel="icon">
    <link href="{{('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{('assets/css/style.css')}}" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: NiceAdmin
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Updated: Apr 20 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  
      @vite('resources/css/app.css')
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>
        @yield('title')
    </title>
    @stack('styles')
</head>

<body class="bg-[#edebe4] mt-24" style="font-family: 'Montserrat', sans-serif;">
    @include('layouts.petani_layouts.header')
    {{-- @include('Petani.layouts.sidebar') --}}
    <div class="w-full mt-32 grid grid-cols-[0.25fr_1fr] gap-16">
        {{-- Sidebar --}}
        @include('layouts.petani_layouts.sidebar')
        <!-- Content -->
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
  

</html>
