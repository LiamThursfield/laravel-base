@extends('layouts.admin')

@section('content')

<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-xl mx-auto w-full">

        <div class="bg-white border-gray-800 border-t-4 p-6 rounded-b-lg rounded-t shadow-lg">
            <h1 class="text-center text-lg">{{ __('Login') }}</h1>

            <form class="mt-6" action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Email Input -->
                <two-col-input-group
                    class="text-sm"
                    @error('email')
                        error_class="text-red-600"
                        error_message="{{ $message }}"
                    @enderror
                    label_class="text-gray-700 md:w-32"
                    label_text="{{ __('E-Mail Address') }}"
                    input_autocomplete="email"
                    :input_autofocus="true"
                    input_id="email"
                    input_name="email"
                    :input_required="true"
                    input_type="email"
                    input_value="{{ old('email') }}"
                ></two-col-input-group>

                <!-- Password Input -->
                <two-col-input-group
                    class="mt-4 text-sm"
                    label_class="text-gray-700 md:w-32"
                    label_text="{{ __('Password') }}"
                    input_autocomplete="current-password"
                    input_id="password"
                    input_name="password"
                    :input_required="true"
                    input_type="password"
                ></two-col-input-group>

                <!-- Remember Input and Submit Button -->
                <div class="flex items-center mt-4 text-sm">
                    <div class="md:w-32"></div>

                    <div class="md:ml-6">
                        <!-- Remember Input -->
                        <checkbox-input
                            label_class="text-gray-700"
                            label_text="{{ __('Remember Me') }}"
                            :input_checked="{{ old('remember') ? 'true' : 'false' }}"
                            input_id="remember"
                            input_name="remember"
                        ></checkbox-input>

                        <!-- Submit Button -->
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
