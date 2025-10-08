@extends('generalContent')

@section('title', 'Dashboard - CuentasCobro')

@section('main-content')
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

@endsection