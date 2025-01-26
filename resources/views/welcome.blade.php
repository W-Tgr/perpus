<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset(Storage::url($setting->favicon ?? 'favicons/favicon.ico')) }}"
        type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/app.css">
    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            background: #fff;
            color: #333;
            padding: 2rem;
            border-radius: 1.5rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            border-radius: 2rem;
            background: linear-gradient(to right, #667eea, #764ba2);
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .button:hover {
            background: linear-gradient(to right, #6b73ff, #9d50bb);
            transform: scale(1.05);
        }

        .dark-mode-toggle {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-top: 2rem;
        }

        .dark-mode-toggle span {
            margin-left: 0.5rem;
        }

        .dark-mode {
            background: #1e293b;
            color: #cbd5e1;
        }

        .hero {
            text-align: center;
            margin-top: 4rem;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .flex-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .flex-container a {
            flex: 1;
            max-width: 200px;
            text-align: center;
        }
    </style>
</head>

<body class="antialiased">
    <div class="flex items-center justify-center min-h-screen">
        <div class="container mx-auto">
            <!-- Header -->


            <!-- Hero Section -->
            <div class="hero">
                <h1>Selamat Datang di Perpustakaan UMY</h1>
                <p>Akses berbagai layanan perpustakaan kami dengan mudah dan nyaman.</p>

                <!-- Buttons -->
                <div class="flex-container">
                    <a href="{{ route('login') }}" class="button">
                        <img src="https://www.svgrepo.com/show/408745/login-sign-in-user-entrance-account.svg"
                            alt="Login Icon" class="w-6 h-6 mr-2">
                        Masuk
                    </a>
                    <a href="{{ route('register') }}" class="button">
                        <img src="https://www.svgrepo.com/show/515135/book.svg" alt="Register Icon"
                            class="w-6 h-6 mr-2">
                        Daftar
                    </a>
                </div>
            </div>


        </div>
    </div>


</body>

</html>
