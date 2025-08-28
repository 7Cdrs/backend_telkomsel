<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'InLife - Auth')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'inlife-blue': '#0EA5E9',
                        'inlife-purple': '#E879F9',
                        'inlife-orange': '#FB923C',
                        'inlife-pink': '#EC4899',
                        'telkomsel-red': '#E11D48',
                        'telkomsel-pink': '#EC4899'
                    },
                    fontFamily: { 'inter': ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .gradient-bg { background: linear-gradient(135deg, #E879F9 0%, #FB923C 100%); }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

<div class="flex min-h-screen">
    <!-- Left Section -->
    <div class="hidden lg:flex lg:w-1/2 relative items-center justify-center p-10">
        <div class="relative w-full h-full flex items-center justify-center">
            <img src="{{ asset('assets/img/card-promosi-1.png') }}" 
                 alt="Promosi InLife" 
                 class="w-full h-[500px] object-cover rounded-xl">

            <div class="absolute bottom-0 left-0 w-full 
                        bg-gradient-to-t from-inlife-purple/80 via-inlife-pink/60 to-transparent 
                        rounded-b-xl flex items-end justify-center p-6">
                <p class="text-white text-lg font-semibold">
                    Program magang dari Telkomsel Branch Surabaya
                </p>
            </div>
        </div>
    </div>

    <!-- Right Section -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
        <div class="w-full max-w-md">
            @yield('content')
        </div>
    </div>
</div>

@stack('scripts')
</body>
</html>
