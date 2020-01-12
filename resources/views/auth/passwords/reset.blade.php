@extends('layouts.admin')

@section('content')
<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-xl mx-auto w-full">

        <div class="bg-white border-gray-800 border-t-4 p-6 rounded-b-lg rounded-t shadow-lg">
            <h1 class="text-center text-lg">{{ __('Reset Password') }}</h1>

            <form class="mt-6" action="{{ route('password.update') }}" method="POST" >
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <!-- Email Input -->
                <div class="input-group mt-4 text-sm">
                    <label class="text-gray-700 md:text-right md:w-32" for="email">
                        {{ __('E-Mail Address') }}
                    </label>

                    <input
                        id="email"
                        class="
                            flex-1 mt-1 md:ml-6 md:mt-0
                            @error('email') error @enderror
                        "
                        autocomplete="email"
                        autofocus
                        name="email"
                        required
                        type="email"
                        value="{{ $email ?? old('email') }}"
                    >
                </div>

                @error('email')
                    <div class="flex items-center mt-2 text-xs">
                        <div class="md:w-32"></div>

                        <div class="md:ml-6">
                            <p class="text-red-600">
                                {{ $message }}
                            </p>
                        </div>
                    </div>
                @enderror

                <!-- Password Input -->
                <div class="input-group mt-4 text-sm">
                    <label class="text-gray-700 md:text-right md:w-32" for="password">
                        {{ __('Password') }}
                    </label>

                    <input
                        id="password"
                        class="
                            flex-1 mt-1 md:ml-6 md:mt-0
                            @error('password') error @enderror
                        "
                        autocomplete="new-password"
                        name="password"
                        required
                        type="password"
                    >
                </div>

                @error('password')
                    <div class="flex items-center mt-2 text-xs">
                        <div class="md:w-32"></div>

                        <div class="md:ml-6">
                            <p class="text-red-600">
                                {{ $message }}
                            </p>
                        </div>
                    </div>
                @enderror

                <!-- Password Confirmation Input -->
                <div class="input-group mt-4 text-sm">
                    <label class="text-gray-700 md:text-right md:w-32" for="password-confirm">
                        {{ __('Confirm Password') }}
                    </label>

                <input
                    id="password-confirm"
                    class="flex-1 mt-1 md:ml-6 md:mt-0"
                    autocomplete="new-password"
                    name="password_confirmation"
                    required
                    type="password"
                >
                </div>

                <!-- Submit -->
                <div class="flex items-center mt-4 text-sm">
                    <div class="md:w-32"></div>

                    <button
                        class="bg-gray-800 px-6 py-2 rounded text-white md:ml-6"
                        type="submit"
                    >
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection
