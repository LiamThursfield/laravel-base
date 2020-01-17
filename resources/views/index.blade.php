@extends('layouts.app')

@section('content')

<div class="flex flex-wrap h-100 items-center justify-center min-h-screen w-100">
    <div>
        <header-example>
            {{ config('app.name', 'Laravel') }}
        </header-example>

        <div class="flex justify-center mt-6 -mx-2 text-lg md:text-xl">
            @auth
                <a
                    class="
                        bg-gray-700 mx-2 px-6 py-1 rounded text-white
                        hover:bg-gray-800
                    "
                    href="{{ url('/admin') }}"
                >
                    Admin
                </a>
            @else
                <a
                    class="
                        bg-gray-700 mx-2 px-6 py-1 rounded text-white
                        hover:bg-gray-800
                    "
                    href="{{ route('login') }}"
                >
                    Login
                </a>

                @if (Route::has('register'))
                    <a
                        class="
                            bg-gray-700 mx-2 px-6 py-1 rounded text-white
                            hover:bg-gray-800
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