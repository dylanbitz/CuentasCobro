@extends('layouts.app')

@section('title', 'Registrar usuario - CuentasCobro')

@section('content')
<div class="login-container d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center login-row">
            <!-- Columna izquierda: formulario de registro -->
            <div class="col-md-6 col-lg-6">
                <div class="login-card p-4">
                    <div class="text-center mb-4">
                        <!-- Logo SVG con gradiente -->
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
                                <!-- Ícono documento simple: -->
                                <rect x="22" y="20" width="20" height="24" rx="3" fill="#fff" opacity="0.95"/>
                                <rect x="26" y="28" width="12" height="2" rx="1" fill="#ee7724"/>
                                <rect x="26" y="33" width="12" height="2" rx="1" fill="#d8363a"/>
                                <rect x="26" y="38" width="8" height="2" rx="1" fill="#b44593"/>
                                <text x="32" y="47" text-anchor="middle" font-size="14" fill="#b44593" font-weight="bold">$</text>
                            </g>
                        </svg>
                        <h3 class="fw-bold text-dark">CuentasCobro</h3>
                        <p class="text-muted mb-0">Registrarse</p>
                        <small class="text-muted">Crea tu nueva cuenta</small>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                <i class="fas fa-user me-1"></i>Nombre
                            </label>
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   required 
                                   autocomplete="name" 
                                   autofocus
                                   placeholder="Ingresa tu nombre">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

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
                                   autocomplete="email"
                                   placeholder="Ingresa tu correo">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock me-1"></i>Contraseña
                            </label>
                            <input type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password" 
                                   required 
                                   autocomplete="new-password"
                                   placeholder="Ingresa tu contraseña">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">
                                <i class="fas fa-lock me-1"></i>Repetir Contraseña
                            </label>
                            <input type="password" 
                                   class="form-control @error('password_confirmation') is-invalid @enderror" 
                                   id="password_confirmation" 
                                   name="password_confirmation" 
                                   required 
                                   autocomplete="new-password"
                                   placeholder="Repite tu contraseña">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-lg" 
                                style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); color:white; font-weight:700;">
                                <i class="fas fa-user-plus me-1"></i>Registrarme
                            </button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <small class="text-muted">
                            ¿Ya tienes una cuenta? 
                            <a href="/login" class="text-decoration-none">Inicia sesión</a>
                        </small>
                    </div>
                </div>
            </div>

            <!-- Columna derecha: imagen + mensaje breve -->
            <div class="col-md-6 col-lg-6 d-flex flex-column justify-content-center align-items-center"
                 style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); border-radius: 0 15px 15px 0; color: white;">
                <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height:100%;">
                    <img src="{{asset('img/registro.png') }}" alt="Registro" style="width: 750px; max-width: 100%; margin-bottom: 2rem;">
                    <h2 class="fw-bold text-center mb-2" style="font-size:2rem;">¡Crea tu cuenta!</h2>
                    <p class="text-center mb-0" style="max-width:340px;">
                        Gestión simple, segura y rápida.<br>
                        Empieza a usar <b>CuentasCobro</b>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
