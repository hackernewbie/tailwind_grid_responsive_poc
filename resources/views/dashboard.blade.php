@extends('layouts.backendlayout-app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <header class="flex justify-between w-full font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                <h2>
                   Welcome To The ODAS Data-Sync Dashboard!
                </h2>
                <p class="text-gray-700">
                    {{-- Welcome, <strong>{{auth()->user()->name}}</strong>! --}}
                </p>
            </header>

            <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="border-1 rounded-md shadow-sm shadow-lg px-3 py-4 my-4 mx-4">
                    <header class="w-full font-semibold bg-gray-200 text-gray-700 py-5 px-6 py-6 px-8 rounded-t-md">
                        Hello Header
                    </header>
                    <div class="body w-full p-6">
                        This is some body content.
                    </div>
                </div>

                <div class="border-1 rounded-md shadow-sm shadow-lg px-3 py-4 my-4 mx-4">
                    <header class="w-full font-semibold bg-gray-200 text-gray-700 py-5 px-6 py-6 px-8 rounded-t-md">
                        Hello Header
                    </header>
                    <div class="body w-full p-6">
                        This is some body content.
                    </div>
                </div>

                <div class="border-1 rounded-md shadow-sm shadow-lg px-3 py-4 my-4 mx-4">
                    <header class="w-full font-semibold bg-gray-200 text-gray-700 py-5 px-6 py-6 px-8 rounded-t-md">
                        Hello Header
                    </header>
                    <div class="body w-full p-6">
                        This is some body content.
                    </div>
                </div>

                <div class="border-1 rounded-md shadow-sm shadow-lg px-3 py-4 my-4 mx-4">
                    <header class="w-full font-semibold bg-gray-200 text-gray-700 py-5 px-6 py-6 px-8 rounded-t-md">
                        Hello Header
                    </header>
                    <div class="body w-full p-6">
                        This is some body content.
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
