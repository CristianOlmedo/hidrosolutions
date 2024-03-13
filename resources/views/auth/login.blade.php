@extends('layouts.sesion')

@section('title', 'HidroSolutions')

@section('left-section')
    <div class="login-container">
        <div class="logo">
            <img src="{{ asset('images/.jpg') }}" alt="Logo">
        </div>
        <div class="login-form-container">
            <h2 align="center">Inicia sesión</h2>
            <form action="#" method="POST" class="login-form">
                @csrf 
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                @error('message')
                    <p>El correo o la contraseña son incorrectos</p>
                @enderror
                <div class="form-group">
                    <button type="submit">Iniciar sesión</button>
                </div>
            </form>
            <p class="register-text">¿Aún no te has registrado? <a href="{{ route('register') }}">Regístrate aquí</a></p>
        </div>
    </div>
@endsection

@section('right-section')
    <div class="image-container">
        <img src="{{ asset('images/aguaPotable.jpg') }}" alt="Background Image" class="responsive-image">
    </div>
@endsection

@section('footer')
    <div class="footer-content">
        <p>&copy; {{ date('Y') }} All rights reserved. Created by InnovateTech Solutions 2024.</p>
    </div>
@endsection
