@extends('layouts.app')

@section('title', 'Recuperar contraseña - CuentasCobro')

@section('content')
<!-- Contenedor principal con fondo y centrado completo -->
<div class="login-container d-flex align-items-center justify-content-center">
    <div class="container">
        <!-- Fila con dos columnas: formulario + imagen motivacional -->
        <div class="row justify-content-center login-row">

            <!-- =============================
                 COL 1: FORMULARIO ENVIAR PASSWORD
            ============================= -->
            <div class="col-md-6 col-lg-6">
                <div class="login-card p-4">
                    
                    <!-- Branding superior: logo SVG con gradiente -->
                    <div class="text-center mb-4">
                        <!-- Logo SVG gradiente igual a login/registro -->
                        <svg width="52" height="52" viewBox="0 0 64 64" class="mb-2">
                            <defs>
                                <linearGradient id="mainGradient" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#ee7724"/>
                                    <stop offset="34%" stop-color="#d8363a"/>
                                    <stop offset="67%" stop-color="#dd3675"/>
                                    <stop offset="100%" stop-color="#b44593"/>
                                </linearGradient>
                            </defs>
                            <rect x="8" y="8" width="48" height="48" rx="12" fill="url(#mainGradient)"/>
                            <g>
                                <!-- Documento con líneas y símbolo $ -->
                                <rect x="22" y="20" width="20" height="24" rx="3" fill="#fff" opacity="0.95"/>
                                <rect x="26" y="28" width="12" height="2" rx="1" fill="#ee7724"/>
                                <rect x="26" y="33" width="12" height="2" rx="1" fill="#d8363a"/>
                                <rect x="26" y="38" width="8" height="2" rx="1" fill="#b44593"/>
                                <text x="32" y="47" text-anchor="middle" font-size="14" fill="#b44593" font-weight="bold">$</text>
                            </g>
                        </svg>
                        <h3 class="fw-bold text-dark">CuentasCobro</h3>
                        <p class="text-muted mb-0">Recuperar contraseña</p>
                        <small class="text-muted">¿Olvidaste tu clave? Ingresa tu correo abajo.</small>
                    </div>

                    <!-- Mensaje de éxito (si el email fue enviado exitosamente) -->
                    @if (session('status'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Errores de validación (si los hay) -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li><i class="fas fa-exclamation-triangle me-1"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulario para solicitar email de recuperación -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <!-- Campo email con ícono y validación -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope me-1"></i>Correo electrónico
                            </label>
                            <input type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autofocus
                                   autocomplete="email"
                                   placeholder="Ingresa tu correo registrado">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Botón para enviar el formulario con gradiente -->
                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-lg"
                                style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); color:white; font-weight:700;">
                                <i class="fas fa-paper-plane me-1"></i>Enviar enlace de recuperación
                            </button>
                        </div>
                    </form>

                    <!-- Enlace para volver al login -->
                    <div class="text-center mt-3">
                        <small class="text-muted">
                            ¿Ya recordaste tu contraseña? 
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                <i class="fas fa-arrow-left me-1"></i>Volver al login
                            </a>
                        </small>
                    </div>
                </div>
            </div>

            <!-- =============================
                 COL 2: IMAGEN + MENSAJE MOTIVACIONAL
            ============================= -->
            <div class="col-md-6 col-lg-6 d-flex flex-column justify-content-center align-items-center"
                 style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); border-radius: 0 15px 15px 0; color: white;">
                <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height:100%;">
                    
                    <!-- Imagen motivacional (cambiar por tu imagen propia si tienes) -->
                    <img src="{{ asset('img/recuperar.png') }}" alt="Recuperación" 
                         style="width: 235px; max-width: 85%; margin-bottom: 2rem;">
                    
                    <!-- Mensaje principal -->
                    <h2 class="fw-bold text-center mb-2" style="font-size:2rem;">¿Olvidaste tu clave?</h2>
                    
                    <!-- Mensaje descriptivo/motivacional -->
                    <p class="text-center mb-0" style="max-width:340px;">
                        ¡No te preocupes!<br>
                        Ingresa tu correo y te enviaremos las instrucciones para recuperar tu contraseña de forma segura.
                    </p>

                    <!-- Ícono decorativo opcional -->
                    <i class="fas fa-key fa-2x mt-3" style="opacity:0.7;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
