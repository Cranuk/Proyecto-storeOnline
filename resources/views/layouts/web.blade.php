<!-- NOTE: Plantilla predeterminada sobre el diseño de la web-->
<!-- NOTE: layouts.web-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="icon" href="{{ asset('storeOnline.png')}}">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Store - @yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js',])
</head>
<body class="flex flex-col min-h-screen">

    <div class="flex flex-1 w-full">
        <x-menu-lateral />
        <main class="flex-grow p-6">
            @yield('content-dashboard')
            @yield('content-sales')
            @yield('content-supplies')
            @yield('content-products')
            @yield('content-paymentmethod')
            @yield('content-offers')
        </main>
    </div>

    @include('includes.filter')
    @include('includes.alerts')
    <x-footer />
</body>
</html>
