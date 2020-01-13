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
