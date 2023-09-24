<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Richard Guevara - Tailwind CSS + Laravel + VueJS + API Sanctum + SCSS</title>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../../../public/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../../public/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../../../assets/css/argon-dashboard-tailwind.css" rel="stylesheet" />


    <!-- Fonts -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
    {{-- <link rel='stylesheet' href='{{asset('assets/css/tailwind.min.css')}}'>  --}}
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite([ 'resources/js/app.js'])


</head>
 <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    
    <div id="app"></div>
    
      <!-- plugin for charts  -->
    <script src="../../assets/js/plugins/chartjs.min.js" async></script>
    <!-- plugin for scrollbar  -->
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js" async></script>
    <!-- main script file  -->
    <script src="../../assets/js/argon-dashboard-tailwind.js" async></script>
</body>
</html>
