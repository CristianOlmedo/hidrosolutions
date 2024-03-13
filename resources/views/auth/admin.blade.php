@extends('layouts.administrador')

@section('title', 'HidroSolutions-Admin')

@section('content')

    <header>
        <nav class="navbar">
            <div class="navbar-left">
                <img src="{{ asset('images/logo.png') }}" alt="HidroSolutions" class="logo">
            </div>
            <div class="navbar-right">
                <a href="{{route('login.destroy')}}" class="logout">Cerrar Sesión</a>
            </div>
        </nav>
    </header>
@section('left-section')
    <p><b>Bienvenido {{ auth()->user()->role}}istrador:</b> {{ auth()->user()->first_name}} {{ auth()->user()->last_name}}</p>
    <div class="contenedor">
        <button class="btn" class="fa fa-map-marker"><a href="{{route('registerSector')}}">Registrar Sector y Barrio</a></button>
        <button class="btn"><a href="{{route('registerSchedule')}}">Registrar Horario de Suministro de Agua</a></button>
        <button class="btn"><a href="{{route('inconsistenciesNotification')}}">Notificación de Inconsistencias</a></button>
    </div>
@endsection

@section('right-section')
    <div class="image-container">
        <img src="{{ asset('images/.jpg') }}" alt="Background Image" class="responsive-image">
    </div>
@endsection

@section('footer')
    <div class="footer-content">
        <p>&copy; {{ date('Y') }} All rights reserved. Created by InnovateTech Solutions 2024.</p>
    </div>
@endsection
