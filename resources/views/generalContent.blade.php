@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <i class="fas fa-file-invoice-dollar me-2" style="color:#ee7724;"></i>
            <span style="background: linear-gradient(to right,#ee7724,#b44593); -webkit-background-clip: text; color: transparent; font-weight: bold;">
                Cuentas de Cobro
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user me-1" style="color:#b44593;"></i>{{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-user-cog me-1" style="color:#ee7724;"></i>Perfil</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog me-1" style="color:#b44593;"></i>Configuración</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-1" style="color:#d8363a;"></i>Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>  

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 p-0">
            <div class="sidebar" style="background: #2c3e50; min-height: 115vh; box-shadow: 4px 0 18px 0 rgba(180,69,147,0.07);">
                <div class="p-3">
                    <h6 class="text-white-50 text-uppercase">Menú Principal</h6>
                </div>
                <nav class="nav flex-column px-3">
                    <a class="nav-link active" href="{{ route('dashboard') }}"
                        style="background: #b44593; color: white; border-radius: 8px; margin-bottom: 6px; font-weight:600;">
                        <i class="fas fa-tachometer-alt me-2" style="color:#fff;"></i>Dashboard
                    </a>
                    <a class="nav-link" href="{{ route('cuentas-cobro') }}" style="color: white; border-radius: 8px; margin-bottom: 6px;">
                        <i class="fas fa-file-invoice me-2" style="color:#ee7724;"></i>Cuentas de Cobro
                    </a>
                    <a class="nav-link" href="#" style="color: white; border-radius: 8px; margin-bottom: 6px;">
                        <i class="fas fa-plus-circle me-2" style="color:#d8363a;"></i>Nueva Cuenta
                    </a>
                    <a class="nav-link" href="#" style="color: white; border-radius: 8px; margin-bottom: 6px;">
                        <i class="fas fa-users me-2" style="color:#dd3675;"></i>Clientes
                    </a>
                    <a class="nav-link" href="#" style="color: white; border-radius: 8px; margin-bottom: 6px;">
                        <i class="fas fa-chart-bar me-2" style="color:#ee7724;"></i>Reportes
                    </a>
                    <a class="nav-link" href="#" style="color: white; border-radius: 8px; margin-bottom: 6px;">
                        <i class="fas fa-cog me-2" style="color:#b44593;"></i>Configuración
                    </a>
                </nav>
            </div>
        </div>
        @yield('main-content')
        
    </div>
</div>

<!-- Logout Form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
@endsection
