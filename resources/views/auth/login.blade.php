@extends('layouts.app')

@section('title', 'Iniciar Sesión - CuentasCobro')

@section('content')
<div class="login-container d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Columna izquierda: formulario -->
            <div class="col-md-6 col-lg-5">
                <div class="login-card p-4">
                    <div class="text-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                            style="width: 185px;" alt="logo" />
                        <h4 class="mt-1 mb-3 fw-bold text-dark">We are The Lotus Team</h4>
                        <p class="text-muted">Please login to your account</p>
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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <input type="email" name="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email address" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <button class="btn w-100 mb-3" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); color: white;" type="submit">Log In</button>

                        <a href="#" class="text-muted d-block text-center mb-3">Forgot password?</a>
                    </form>

                    <div class="text-center">
                        <span>Don't have an account? </span><a href="#" class="btn btn-outline-danger btn-sm">Create New</a>
                    </div>
                </div>
            </div>

            <!-- Columna derecha: texto con gradiente -->
            <div class="col-md-6 col-lg-6 d-flex flex-column justify-content-center"
                 style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); border-radius: 0 15px 15px 0; color: white;">
                <div class="p-4 p-md-5">
                    <h4>We are more than just a company</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
