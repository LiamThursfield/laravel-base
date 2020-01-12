@extends('layouts.default')

@section('content')

<div class="bg-gray-100 flex flex-wrap h-100 items-center justify-center min-h-screen w-100">
    <div>
        <h1 class="px-4 text-4xl md:text-6xl">
            {{ config('app.name', 'Laravel') }}
        </h1>

        <div class="flex justify-center mt-6 -mx-2 text-lg md:text-xl">
            @auth
                <a
                    class="
                        bg-gray-900 mx-2 px-6 py-1 rounded text-white
                        hover:bg-gray-700
                    "
                    href="{{ url('/admin') }}"
                >
                    Admin
                </a>
            @else
                <a
                    class="
                        bg-gray-900 mx-2 px-6 py-1 rounded text-white
                        hover:bg-gray-700
                    "
                    href="{{ route('login') }}"
                >
                    Login
                </a>

                @if (Route::has('register'))
                    <a
                        class="
                            bg-gray-900 mx-2 px-6 py-1 rounded text-white
                            hover:bg-gray-700
                        "
                        href="{{ route('register') }}"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </div>
</div>

@endsection