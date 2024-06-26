
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>
<body>
    <header class="text-gray-600 body-font border-b-2">
        <div class="container flex flex-col flex-wrap items-center p-2 mx-auto pb-3 md:flex-row">
            <a class="flex items-center mb-4 font-medium text-gray-900 title-font md:mb-0">
            <span class="ml-3 text-2xl">注文.com</span>
            </a>
            <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto">
                <a class="mr-5 hover:text-black hover:font-bold" href="{{ route('home') }}">HOME</a>
                <a class="mr-5 hover:text-black hover:font-bold" href="{{ route('home') }}" >ABOUT</a>
                <a class="mr-5 hover:text-black hover:font-bold" href="{{ route('home') }}">NEWS</a>
            </nav>
            <button class="inline-flex items-center px-3 py-1 mt-4 text-base bg-gray-100 border-0 rounded focus:outline-none hover:bg-gray-200 md:mt-0">
            LOGIN
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
            </button>
        </div>
        <div class ="border-t border-black-600 mx-4 py-2 md:ml-2 px-20">
            <div class="container flex flex-col flex-wrap items-center md:flex-row">
                <h1 class="text-3xl">
                {{ $header }}
                </h1>
            </div>
        </div>


        </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="text-gray-600 body-font border-t-2">
        <div class="container flex flex-col items-center px-5 py-8 mx-auto sm:flex-row">
            <p>footerfooterfooterfooter</p>
            <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
            <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
                </a>
                </span>
            </div>
        </footer>
</body>
</html>
