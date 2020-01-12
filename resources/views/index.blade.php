@extends('layouts.default')

@section('content')

<div class="bg-gray-100 flex flex-wrap h-100 items-center justify-center min-h-screen w-100">
    <div>
        <h1 class="text-6xl">
            {{ config('app.name', 'Laravel') }}
        </h1>

        <div class="flex justify-center mt-6 -mx-4 text-xl">
            @auth
                <a class="mx-4" href="{{ url('/admin') }}">
                    Admin
                </a>
            @else
                <a class="mx-4" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="mx-4" href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    </div>
</div>

@endsection