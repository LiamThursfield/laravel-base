@extends('layouts.admin')

@section('content')
<div class="container flex mt-8 mx-auto px-4">

    <div class="max-w-3xl mx-auto w-full">

        <div>
            <h1 class="text-2xl">
                Dashboard
            </h1>
        </div>

        @if (session('status'))
            <div class="bg-white border-green-600 border-l-4 mt-8 p-6 rounded-l rounded-r-lg shadow-lg">
                <p>
                    {{ session('status') }}
                </p>
            </div>
        @endif

        <div class="bg-white border-gray-800 border-l-4 mt-8 p-6 rounded-l rounded-r-lg shadow-lg">
            <p>
                You are logged in!
            </p>
        </div>

    </div>

</div>
@endsection
