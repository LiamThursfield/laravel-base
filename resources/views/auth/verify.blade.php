@extends('layouts.admin')

@section('content')
<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-xl mx-auto w-full">

        @if (session('resent'))
            <div class="bg-white border-green-600 border-t-4 mb-8 p-6 rounded-b-lg rounded-t shadow-lg">
                <h1 class="text-center text-lg">
                    Success
                </h1>

                <p class="mt-2 text-center text-gray-700 text-sm">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </p>
            </div>
        @endif

        <div class="bg-white border-gray-800 border-t-4 p-6 rounded-b-lg rounded-t shadow-lg">
            <h1 class="text-center text-lg">{{ __('Verify Your Email Address') }}</h1>

            <div class="mt-4 text-center text-gray-700 text-sm">
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},

                <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button
                        class="inline text-blue-500"
                        type="submit"
                    >
                        {{ __('click here to request another') }}
                    </button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection