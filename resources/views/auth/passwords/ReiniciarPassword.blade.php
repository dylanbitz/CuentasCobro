@extends('layouts.app')

@section('title', 'Nueva Contraseña - CuentasCobro')

@section('content')
<div class="login-container d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center login-row">

            <!-- =============================
                 COL 1: FORMULARIO REINICIAR PASSWORD
            ============================= -->
            <div class="col-md-6 col-lg-6">
                <div class="login-card p-4">

                    <!-- Branding superior: logo, título, subtítulo -->
                    <div class="text-center mb-4">
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
                                <rect x="22" y="20" width="20" height="24" rx="3" fill="#fff" opacity="0.95"/>
                                <rect x="26" y="28" width="12" height="2" rx="1" fill="#ee7724"/>
                                <rect x="26" y="33" width="12" height="2" rx="1" fill="#d8363a"/>
                                <rect x="26" y="38" width="8" height="2" rx="1" fill="#b44593"/>
                                <text x="32" y="47" text-anchor="middle" font-size="14" fill="#b44593" font-weight="bold">$</text>
                            </g>
                        </svg>
                        <h3 class="fw-bold text-dark">CuentasCobro</h3>
                        <p class="text-muted mb-0">Nueva contraseña</p>
                        <small class="text-muted">Define tu nueva contraseña segura.</small>
                    </div>
                    
                    <!-- Mostrar errores si los hay -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li><i class="fas fa-exclamation-triangle me-1"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulario para cambiar la contraseña, incluye token -->
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!-- Token oculto necesario para reset -->
                        <input type="hidden" name="token" value="{{ $token ?? '' }}">
                        <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

                        <!-- Campo Nueva Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock me-1"></i>Nueva contraseña
                            </label>
                            <input type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   id="password"
                                   name="password"
                                   required
                                   autocomplete="new-password"
                                   placeholder="Crea una nueva contraseña">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Campo Repetir constraseña -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">
                                <i class="fas fa-lock me-1"></i>Repite nueva contraseña
                            </label>
                            <input type="password"
                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                   id="password_confirmation"
                                   name="password_confirmation"
                                   required
                                   autocomplete="new-password"
                                   placeholder="Confirma tu nueva contraseña">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Botón para enviar nueva contraseña -->
                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-lg"
                                style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); color:white; font-weight:700;">
                                <i class="fas fa-save me-1"></i>Guardar contraseña
                            </button>
                        </div>
                    </form>
                    <!-- Enlace para volver al login -->
                    <div class="text-center mt-3">
                        <small class="text-muted">
                            ¿Ya puedes acceder? 
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                <i class="fas fa-arrow-left me-1"></i>Ir al login
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
                    <!-- Imagen motivacional -->
                    <img src="{{ asset('img/reset.png') }}" alt="Nueva contraseña"
                         style="width: 190px; max-width: 85%; margin-bottom: 2rem;">
                    <!-- Mensaje para animar -->
                    <h2 class="fw-bold text-center mb-2" style="font-size:2rem;">¡Listo para volver!</h2>
                    <p class="text-center mb-0" style="max-width:340px;">
                        Ingresa y confirma tu nueva contraseña.<br>
                        ¡Tu cuenta estará de vuelta en segundos!
                    </p>
                    <i class="fas fa-unlock-alt fa-2x mt-3" style="opacity:0.8;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
