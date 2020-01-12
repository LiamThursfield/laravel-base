@extends('layouts.admin')

@section('content')
<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-xl mx-auto w-full">

        <div class="bg-white border-gray-800 border-t-4 p-6 rounded-b-lg rounded-t shadow-lg">
            <h1 class="text-center text-lg">{{ __('Register') }}</h1>

            <form class="mt-6" action="{{ route('register') }}" method="POST" >
                @csrf

                <!-- Name Input -->
                <div class="flex items-center text-sm">
                    <label class="text-gray-700 text-right w-32" for="name">
                        {{ __('Name') }}
                    </label>

                    <input
                        id="name"
                        class="
                            border border-gray-400 ml-6 py-2 px-3 rounded flex-1
                            @error('name') border-red-600 @enderror
                        "
                        autocomplete="name"
                        autofocus
                        name="name"
                        required
                        type="text"
                        value="{{ old('name') }}"
                    >
                </div>

                @error('name')
                    <div class="flex items-center mt-2 text-xs">
                        <div class="w-32"></div>

                        <div class="ml-6">
                            <p class="text-red-600">
                                {{ $message }}
                            </p>
                        </div>
                    </div>
                @enderror

                <!-- Email Input -->
                <div class="flex items-center mt-4 text-sm">
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

                <!-- Password Input -->
                <div class="flex items-center mt-4 text-sm">
                    <label class="text-gray-700 text-right w-32" for="password">
                        {{ __('Password') }}
                    </label>

                    <input
                        id="password"
                        class="
                            border border-gray-400 ml-6 py-2 px-3 rounded flex-1
                            @error('password') border-red-600 @enderror
                        "
                        autocomplete="new-password"
                        name="password"
                        required
                        type="password"
                    >
                </div>

                @error('password')
                    <div class="flex items-center mt-2 text-xs">
                        <div class="w-32"></div>

                        <div class="ml-6">
                            <p class="text-red-600">
                                {{ $message }}
                            </p>
                        </div>
                    </div>
                @enderror

                <!-- Password Confirmation Input -->
                <div class="flex items-center mt-4 text-sm">
                    <label class="text-gray-700 text-right w-32" for="password-confirm">
                        {{ __('Confirm Password') }}
                    </label>

                    <input
                        id="password-confirm"
                        class="border border-gray-400 ml-6 py-2 px-3 rounded flex-1"
                        autocomplete="new-password"
                        name="password_confirmation"
                        required
                        type="password"
                    >
                </div>

                <!-- Submit -->
                <div class="flex items-center mt-4 text-sm">
                    <div class="w-32"></div>

                    <button
                        class="bg-gray-800 ml-6 px-6 py-2 rounded text-white"
                        type="submit"
                    >
                        {{ __('Register') }}
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection