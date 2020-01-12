<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaravelBaseApp') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div id="app">

        <!-- Navbar -->
        <nav class="bg-white py-4 shadow-md w-full">
            <div class="container flex items-center mx-auto px-4">

                <!-- Logo -->
                <a
                    class="mr-16 text-xl"
                    href="{{ url('/') }}"
                >
                    {{ config('app.name', 'Laravel') }}
                </a>

                <!-- Navigation -->
                <div class="flex flex-1 justify-between mr-8 text-gray-700">
                    <!-- Left Navigation -->
                    <div>
                        @auth
                            <a class="mr-4 hover:text-gray-900" href="/admin">
                                Dashboard
                            </a>
                            <a class="hover:text-gray-900" href="/admin/about">
                                About
                            </a>
                        @endauth
                    </div>
                    <!-- Right Navigation -->
                    <div class="border-l border-gray-500 pl-6">
                        @guest
                            <a class="mr-4 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>

                            <a class="hover:text-gray-900" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        @else
                            <div class="flex flex-row">
                                <p class="mr-2">{{ Auth::user()->name }}</p>
                                <form class="inline-block" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="text-xs text-gray-500 hover:text-gray-900" type="submit">
                                        ({{ __('Logout') }})
                                    </button>
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>

            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
