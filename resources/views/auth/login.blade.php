@extends('layouts.admin')

@section('content')

<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-xl mx-auto w-full">

        <div class="bg-white border-gray-800 border-t-4 p-6 rounded-b-lg rounded-t shadow-lg">
            <h1 class="text-center text-lg">{{ __('Login') }}</h1>

            <form class="mt-6" action="{{ route('login') }}" method="POST">
                @csrf

                <div class="flex items-center text-sm">
                    <label class="text-gray-700 text-right w-32" for="email">
                        {{ __('E-Mail Address') }}
                    </label>

                    <input
                        id="email"
                        class="
                            border border-gray-400 ml-6 py-2 px-3 rounded flex-1
                            @error('email') border-red-600 @enderror
                        "
                        autocomplete="email"
                        autofocus
                        name="email"
                        required
                        type="email"
                        value="{{ old('email') }}"
                    >
                </div>

                @error('email')
                    <div class="flex items-center mt-2 text-xs">
                        <div class="w-32"></div>

                        <div class="ml-6">
                            <p class="text-red-600">
                                {{ $message }}
                            </p>
                        </div>
                    </div>
                @enderror


                <div class="flex items-center mt-4 text-sm">
                    <label class="text-gray-700 text-right w-32" for="password">
                        {{ __('Password') }}
                    </label>

                    <input
                        id="password"
                        class="border border-gray-400 ml-6 py-2 px-3 rounded flex-1"
                        autocomplete="current-password"
                        name="password"
                        required
                        type="password"
                    >
                </div>

                <div class="flex items-center mt-4 text-sm">
                    <div class="w-32"></div>

                    <div class="ml-6">
                        <input
                            id="remember"
                            class="cursor-pointer"
                            {{ old('remember') ? 'checked' : '' }}
                            name="remember"
                            type="checkbox"
                        >

                        <label class="ml-2 cursor-pointer text-gray-700" for="remember">
                            {{ __('Remember Me') }}
                        </label>

                        <div class="flex items-center mt-6">
                            <button
                                class="bg-gray-800 px-6 py-2 rounded text-white"
                                type="submit"
                            >
                                {{ __('Login') }}
                            </button>

                            @if(Route::has('password.request'))
                                <a
                                    class="ml-4 hover:underline"
                                    href="{{ route('password.request') }}"
                                >
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection
