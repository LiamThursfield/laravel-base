@extends('layouts.admin')

@section('content')
<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-xl mx-auto w-full">

        @if (session('status'))
            <div class="bg-white border-green-600 border-t-4 mb-8 p-6 rounded-b-lg rounded-t shadow-lg">
                <h1 class="text-center text-lg">
                    Success
                </h1>

                <p class="mt-2 text-center text-gray-700 text-sm">
                    {{ session('status') }}
                </p>
            </div>
        @endif


        <div class="bg-white border-gray-800 border-t-4 p-6 rounded-b-lg rounded-t shadow-lg">
            <h1 class="text-center text-lg">
                {{ __('Reset Password') }}
            </h1>

            <form class="mt-6" action="{{ route('password.email') }}" method="POST">
                @csrf

                <div class="input-group text-sm">
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
                        value="{{ old('email') }}"
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

                <div class="flex items-center mt-4 text-sm">
                    <div class="md:w-32"></div>

                    <div class="md:ml-6">
                        <button class="bg-gray-800 px-6 py-2 rounded text-white">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
