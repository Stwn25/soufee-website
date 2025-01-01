<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="{{('img/logo.png')}}" rel="icon">
  <link href="{{('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
  <!-- Vendor CSS Files -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>

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
</head>

<body style="font-family: 'Montserrat', sans-serif;" class="bg-[#EBE8D8]">
    
    @yield('content')
</body>
<script>
    feather.replace();
</script>
</html>