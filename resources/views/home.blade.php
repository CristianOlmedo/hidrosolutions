@extends('layouts.app')

@section('title', 'HidroSolutions')

@section('content')
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <img src="{{ asset('path_to_your_logo/logo.png') }}" alt="HidroSolutions Logo">
            </div>
            <ul class="navbar-menu">
                @if(auth()->check())
                    
                @else
                    <li><a href="{{route('login')}}">Iniciar Sesión</a></li>
                    <li><a href="{{route('register')}}">Registrarse</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        <section class="image-section">
            <img src="{{ asset('images/tumaco.jpeg') }}" alt="Image">
        </section>
    </main>

    @section('footer')
    <div class="footer-content">
        <p>&copy; {{ date('Y') }} All rights reserved. Created by InnovateTech Solutions 2024.</p>
    </div>
    @endsection
@endsection
