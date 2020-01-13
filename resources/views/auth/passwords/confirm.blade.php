@extends('layouts.admin')

@section('content')
<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-xl mx-auto w-full">

        <div class="bg-white border-gray-800 border-t-4 p-6 rounded-b-lg rounded-t shadow-lg">
            <h1 class="text-center text-lg">{{ __('Confirm Password') }}</h1>

            <p class="mt-2 text-center text-gray-700 text-sm">
                {{ __('Please confirm your password before continuing.') }}
            </p>

            <form class="mt-8" action="{{ route('password.confirm') }}" method="POST" >
                @csrf

                <!-- Password Input -->
                <two-col-input-group
                    class="mt-4 text-sm"
                    @error('password')
                        error_class="text-red-600"
                        error_message="{{ $message }}"
                    @enderror
                    label_class="text-gray-700 md:w-32"
                    label_text="{{ __('Password') }}"
                    input_autocomplete="current-password"
                    :input_autofocus="true"
                    input_id="password"
                    input_name="password"
                    :input_required="true"
                    input_type="password"
                ></two-col-input-group>

                <div class="input-group mt-6 text-sm">
                    <div class="md:w-32"></div>

                    <div class="md:ml-6">
                        <div class="flex items-center">
                            <button
                                class="bg-gray-800 px-6 py-2 rounded text-white"
                                type="submit"
                            >
                                {{ __('Confirm Password') }}
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
