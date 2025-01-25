<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset(Storage::url($setting->favicon ?? 'favicons/favicon.ico')) }}"
        type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/app.css">

</head>

<body class="antialiased text-gray-100 bg-white-900 dark:bg-gray-900">
    <div class="flex items-center justify-center min-h-screen">
        <div class="container mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <a href="/" class="flex items-center">
                    <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                </a>



            </div>

            <div class="flex flex-col items-center mt-16">
                <h1 class="mb-6 text-3xl font-semibold text-center text-gray-800 dark:text-white">Selamat Datang Di
                    Perpustakaan UMY</h1>
                <p class="max-w-md text-center text-gray-100 text-gray-800 dark:text-white">Masuk untuk mengakses
                    layanan perpustakaan.</p>
                <div class="flex flex-col mt-8 space-y-4 md:flex-row md:space-y-0 md:space-x-4">
                    <a href="{{ route('login') }}"
                        class="flex items-center justify-center w-full p-4 space-x-2 transition duration-300 bg-white rounded-lg shadow-lg hover:shadow-xl md:w-auto">
                        <div class="flex items-center justify-center w-20 h-12 bg-blue-500 rounded-full">
                            <img src="https://www.svgrepo.com/show/408745/login-sign-in-user-entrance-account.svg"
                                alt="Login Icon" class="w-8 h-8">
                        </div>

                        <span class="text-xl font-semibold text-gray-900">Masuk</span>
                    </a>
                    <a href="{{ route('register') }}"
                        class="flex items-center justify-center w-full p-4 mt-4 space-x-2 transition duration-300 bg-white rounded-lg shadow-lg md:mt-0 hover:shadow-xl md:w-auto">
                        <div class="flex items-center justify-center w-20 h-12 bg-blue-500 rounded-full">
                            <img src="https://www.svgrepo.com/show/515135/book.svg" alt="Register Icon" class="w-8 h-8">
                        </div>

                        <span class="text-xl font-semibold text-gray-900">Daftar</span>
                    </a>
                </div>
            </div>

            <!-- Toggle Switch for Dark Mode -->

            <div class="flex items-center justify-between mt-16">


            </div>
        </div>
    </div>
</body>
<script src="/assets/app.js"></script>


</html>
