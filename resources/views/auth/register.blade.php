@extends('layouts.admin')

@section('content')
<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-xl mx-auto w-full">

        <div class="bg-white border-gray-800 border-t-4 p-6 rounded-b-lg rounded-t shadow-lg">
            <h1 class="text-center text-lg">{{ __('Register') }}</h1>

            <form class="mt-6" action="{{ route('register') }}" method="POST" >
                @csrf

                <!-- Name Input -->
                <two-col-input-group
                    class="text-sm"
                    @error('name')
                        error_class="text-red-600"
                        error_message="{{ $message }}"
                    @enderror
                    label_class="text-gray-700 md:w-32"
                    label_text="{{ __('Name') }}"
                    input_autocomplete="name"
                    :input_autofocus="true"
                    input_id="name"
                    input_name="name"
                    :input_required="true"
                    input_type="text"
                    input_value="{{ old('name') }}"
                ></two-col-input-group>

                <!-- Email Input -->
                <two-col-input-group
                    class="mt-4 text-sm"
                    @error('email')
                        error_class="text-red-600"
                        error_message="{{ $message }}"
                    @enderror
                    label_class="text-gray-700 md:w-32"
                    label_text="{{ __('E-Mail Address') }}"
                    input_autocomplete="email"
                    input_id="email"
                    input_name="email"
                    :input_required="true"
                    input_type="email"
                    input_value="{{ old('email') }}"
                ></two-col-input-group>

                <!-- Password Input -->
                <two-col-input-group
                    class="mt-4 text-sm"
                    @error('password')
                        error_class="text-red-600"
                        error_message="{{ $message }}"
                    @enderror
                    label_class="text-gray-700 md:w-32"
                    label_text="{{ __('Password') }}"
                    input_autocomplete="new-password"
                    input_id="password"
                    input_name="password"
                    :input_required="true"
                    input_type="password"
                ></two-col-input-group>

                <!-- Password Confirmation Input -->
                <two-col-input-group
                    class="mt-4 text-sm"
                    label_class="text-gray-700 md:w-32"
                    label_text="{{ __('Confirm Password') }}"
                    input_autocomplete="new-password"
                    input_id="password-confirm"
                    input_name="password_confirmation"
                    :input_required="true"
                    input_type="password"
                ></two-col-input-group>

                <!-- Submit Button -->
                <div class="flex items-center mt-4 text-sm">
                    <div class="md:w-32"></div>

                    <button
                        class="bg-gray-800 px-6 py-2 rounded text-white md:ml-6"
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