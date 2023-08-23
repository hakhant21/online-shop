<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
            <div class="container mx-auto py-8 mb-6">
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-lg py-2 px-4 transition ease-in-out delay-150 bg-slate-700 hover:bg-slate-600 text-slate-50 hover:text-slate-100 duration-300">Dashboard</a>
                    @else
                    <a href="{{ route('welcome') }}"
                    class="rounded-lg py-2 px-4 transition ease-in-out delay-150 bg-slate-700 hover:bg-slate-600 text-slate-50 hover:text-slate-100 duration-300">Shop</a>
                    <a href="{{ route('login') }}"
                        class="rounded-lg py-2 px-4 transition ease-in-out delay-150 bg-slate-700 hover:bg-slate-600 text-slate-50 hover:text-slate-100 duration-300">
                      Sign In
                    </a>
                    @endauth
                </div>
                @endif
            </div>

            <main class="max-w-6xl mx-auto">
                <div>
                    {{ $slot }}
                </div>
            </main>
    </body>
</html>
