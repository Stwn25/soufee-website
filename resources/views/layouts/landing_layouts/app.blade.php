<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>
        @yield('title')
    </title>
    <script>
        @vite('resources/js/landing.js')
    </script>
    @stack('styles')
    @vite('resources/css/app.css')
</head>

<body class="bg-[#EBE8D8] mt-24" style="font-family: 'Montserrat', sans-serif;">
    <img src="{{ asset('img/Group 7.svg') }}" class="absolute top-[10%] left-0 z-1" alt="">
    <img src="{{ asset('img/Group 7.svg') }}" class="absolute bottom-0 right-0 z-1" alt="">
    @include('layouts.landing_layouts.header')
    <div class="px-20 mb-5">
        @yield('content')
    </div>
    @include('layouts.landing_layouts.footer')
    <script>
        feather.replace();
    </script>
</body>

</html>