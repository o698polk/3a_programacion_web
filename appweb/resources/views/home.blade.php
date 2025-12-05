@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Página de Inicio</h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Bienvenido a la aplicación de ejemplo. Este es el home de la página.</p>
            <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Ir al Login</a>
        </div>
    </div>
</div>
@endsection
