<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'loan-pocket') }}</title>

        <!-- Fonts -->
<<<<<<< HEAD
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

=======
        <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
>>>>>>> 36f74e7515f643c3223c4fce4fd094b868ac610d
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .bg-image {
                background-image: url('{{ asset('assets/back.jpg') }}');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                min-height: 100vh;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 ">
        <div class="bg-image flex flex-col sm:justify-center items-center sm:pt-0 ">
            <div class="w-full sm:max-w-2xl mt-6 px-32 py-24 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
