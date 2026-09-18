<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bright Future School - Home</title>
    <!-- Tailwind CSS via CDN (v4 browser build) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Small custom refinement for the school vibe */
        .school-gradient {
            background: linear-gradient(145deg, #f8fafc 0%, #eef2ff 100%);
        }

        /* Smooth hover effect for nav links */
        .nav-link {
            transition: color 0.2s ease, background-color 0.2s ease;
        }

        .container{
            width: 90%;
            margin: auto;
        }

        button{
            cursor: pointer;
        }
    </style>
</head>

<body class="school-gradient font-sans antialiased text-gray-800 min-h-screen flex flex-col">

    <!-- Navigation -->
    <x-header />

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />


    @include('sudam-sweet-alert::alert')
</body>

</html>
