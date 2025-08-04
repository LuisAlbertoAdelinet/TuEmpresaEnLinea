@extends('layouts.app')

@section('title', 'Dashboard - Tu Empresa En Línea')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            {{-- Corregido para usar 'name' que definimos en el LoginController --}}
            <h1 class="display-5 fw-bold">¡Bienvenido, {{ Auth::user()->name }}!</h1>
            <p class="col-md-8 fs-4">Selecciona una opción para ver los datos del mes anterior.</p>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <a href="{{ route('ventas') }}" class="btn btn-success btn-lg w-100 p-5">Ventas</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="{{ route('gastos') }}" class="btn btn-danger btn-lg w-100 p-5">Gastos</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="{{ route('productos.mas.vendidos') }}" class="btn btn-info btn-lg w-100 p-5">Productos más vendidos</a>
        </div>
    </div>
@endsection