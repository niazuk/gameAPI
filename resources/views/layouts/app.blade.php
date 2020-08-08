<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    @livewireStyles
    <title>Video Game</title>
</head>

<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <img src="/images/dofe-logos/dofe-gold.svg" alt="dofe logo" class="w-8 flex-none">
                </a>
                <ul class="flex ml-0 lg:ml-16 space-x-16 mt-6 lg:mt-0">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center mt-6 lg:mt-0">
                <div class="relative">
                    <input type="text"
                        class="bg-gray-800 text-sm w-64 rounded-full px-3 py-1 focus:outline-none focus:shadwo-outline"
                        placeholder="search...">
                </div>
                <div class="ml-6">
                    <a href="#"><img src="/images/hero/hero.jpg" alt="hero" class="rounded-full w-10"></a>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-8">
        @yield('content')
    </main>
    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered By <a href="#" class="underline hover:text-gray-800">IGDB API</a>
        </div>
    </footer>
    @livewireScripts
    <script src="/js/app.js"></script>
    @stack('scripts')
</body>

</html>