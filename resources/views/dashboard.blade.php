@extends('layouts.app')

@section('title', 'Dashboard - CuentasCobro')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <i class="fas fa-file-invoice-dollar me-2" style="color:#ee7724;"></i>
            <span style="background: linear-gradient(to right,#ee7724,#b44593); -webkit-background-clip: text; color: transparent; font-weight: bold;">
                CuentasCobro
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
                    <a class="nav-link" href="#" style="color: white; border-radius: 8px; margin-bottom: 6px;">
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
        <!-- Main Content -->
        <div class="col-md-9 col-lg-10">
            <div class="main-content p-4" style="background: #f6f8fa;">
                <!-- Welcome Section -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h1 class="h3" style="color: #b44593; font-weight:800;">
                            ¡Bienvenido, {{ Auth::user()->name }}!
                        </h1>
                        <p class="text-muted">Gestiona tus cuentas de cobro de manera eficiente</p>
                    </div>
                </div>
                <!-- Statistics Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card border-0 shadow-sm h-100" style="border-radius:13px; background: #f5e6f7;">
                            <div class="card-body text-center">
                                <div class="mb-2" style="color: #b44593;">
                                    <i class="fas fa-file-invoice fa-2x"></i>
                                </div>
                                <h5 class="card-title">Total Cuentas</h5>
                                <h3 style="color: #b44593;">0</h3>
                                <small class="text-muted">Cuentas registradas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card border-0 shadow-sm h-100" style="border-radius:13px; background: #fff3e5;">
                            <div class="card-body text-center">
                                <div class="mb-2" style="color: #ee7724;">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <h5 class="card-title">Pagadas</h5>
                                <h3 style="color: #ee7724;">0</h3>
                                <small class="text-muted">Cuentas pagadas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card border-0 shadow-sm h-100" style="border-radius:13px; background: #ffe5e5;">
                            <div class="card-body text-center">
                                <div class="mb-2" style="color: #d8363a;">
                                    <i class="fas fa-clock fa-2x"></i>
                                </div>
                                <h5 class="card-title">Pendientes</h5>
                                <h3 style="color: #d8363a;">0</h3>
                                <small class="text-muted">Por cobrar</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card border-0 shadow-sm h-100" style="border-radius:13px; background: #ffe9f1;">
                            <div class="card-body text-center">
                                <div class="mb-2" style="color: #dd3675;">
                                    <i class="fas fa-dollar-sign fa-2x"></i>
                                </div>
                                <h5 class="card-title">Total Facturado</h5>
                                <h3 style="color: #dd3675;">$0</h3>
                                <small class="text-muted">Este mes</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Quick Actions -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm" style="border-radius:13px;">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-rocket me-2" style="color: #ee7724;"></i>Acciones Rápidas
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="btn btn-lg w-100" style="background: linear-gradient(to right,#ee7724,#b44593); color: white; border: none;">
                                            <i class="fas fa-plus-circle me-2"></i>
                                            Nueva Cuenta de Cobro
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="btn btn-outline-primary btn-lg w-100" style="border-color: #dd3675; color: #dd3675;">
                                            <i class="fas fa-user-plus me-2"></i>
                                            Agregar Cliente
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="#" class="btn btn-outline-primary btn-lg w-100" style="border-color: #ee7724; color: #ee7724;">
                                            <i class="fas fa-chart-line me-2"></i>
                                            Ver Reportes
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Activity -->
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm" style="border-radius:13px;">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-history me-2" style="color: #d8363a;"></i>Actividad Reciente
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center py-4">
                                    <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                    <p class="text-muted">No hay actividad reciente para mostrar.</p>
                                    <p class="text-muted">¡Comienza creando tu primera cuenta de cobro!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logout Form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
@endsection
