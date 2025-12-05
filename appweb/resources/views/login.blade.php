@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-center mb-6">{{ __('Login') }}</h2>
        <form method="POST" action="#">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" name="email" required autocomplete="email" autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Password') }}</label>
                <input id="password" type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" name="password" required autocomplete="current-password">
            </div>

            <div class="mb-4 flex items-center">
                <input class="mr-2" type="checkbox" name="remember" id="remember">
                <label class="text-sm text-gray-700" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition duration-300">
                {{ __('Login') }}
            </button>
        </form>
    </div>
</div>
@endsection
