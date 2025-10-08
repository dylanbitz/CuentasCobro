@extends('layouts.app')

@section('title', 'Iniciar Sesión - CuentasCobro')

@section('content')
<!-- Fondo con imagen + centrar contenido vertical y horizontal -->
<div class="login-container d-flex align-items-center justify-content-center">
    <div class="container">
        <!-- Fila principal con 2 columnas: login + información -->
        <div class="row justify-content-center login-row">

            <!-- =============================
                 COL 1: FORMULARIO LOGIN
            ============================= -->
            <div class="col-md-6 col-lg-6">
                <div class="login-card p-4">

                    <!-- Branding superior: logo, título, subtítulo -->
                    <div class="text-center mb-4">
                        <!-- Imagen principal/logo del login (puedes cambiar el src) -->
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                            style="width: 185px;" alt="logo" />
                        <h4 class="mt-1 mb-3 fw-bold text-dark">We are The Lotus Team</h4>
                        <p class="text-muted">Please login to your account</p>
                    </div>

                    <!-- Mostrar errores si hay (ej: autenticación fallida) -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulario de login (método POST hacia ruta login) -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Campo Email -->
                        <div class="mb-3">
                            <input type="email" name="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email address" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo Password -->
                        <div class="mb-3">
                            <input type="password" name="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Checkbox "Remember me" -->
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <!-- Botón principal para login -->
                        <button class="btn w-100 mb-3" 
                                style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); color: white;" 
                                type="submit">
                            Log In
                        </button>

                        <!-- ENLACE RECUPERAR CONTRASEÑA, carga forgot.blade.php por ruta -->
                        <a href="{{ route('password.request') }}" class="text-muted d-block text-center mb-3">
                            Forgot password?
                        </a>
                    </form>
                </div>
            </div>

            <!-- =============================
                 COL 2: INFO / Registro / Branding
            ============================= -->
            <div class="col-md-6 col-lg-6 d-flex flex-column justify-content-center align-items-center"
                 style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); border-radius: 0 15px 15px 0; color: white;">
                <!-- Centro vertical y horizontal de contenido -->
                <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height:100%;">
                    <h1 class="fw-bold mb-4 text-center" style="font-size:2.5rem;">¡Bienvenido!</h1>
                    
                    <!-- Mensaje motivacional/informativo -->
                    <p class="lead mb-4 text-center" style="max-width: 440px;">
                        Nos alegra tenerte aquí.<br>
                        Únete a nuestra familia <b>Lotus Team</b> y comienza tu viaje con nosotros.<br>
                        Conectamos personas, ideas y sueños para crear algo extraordinario.<br>
                        <span style="font-size: 1.1rem;">
                            ¡Tu historia importa, y juntos llegaremos más lejos!
                        </span>
                    </p>

                    <!-- Botón para ir a la vista de registro -->
                    <a href="/register" class="btn btn-lg btn-outline-light px-5 py-2 mb-3" style="border-width:2px;font-weight:700;">
                        Crear cuenta nueva
                    </a>

                    <!-- Enlace de acceso para usuarios que ya tienen cuenta -->
                    <small class="text-center" style="opacity:0.95;">
                        ¿Ya tienes una cuenta? <a href="/login" class="text-white text-decoration-underline">Inicia sesión</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
