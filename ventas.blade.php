@extends('layouts.app')

@section('title', 'Ventas del Mes Anterior')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h2">Ventas del Mes Anterior</h1>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Volver al Dashboard</a>
</div>

<div class="card">
    <div class="card-header">
        Total de Ventas: <strong>${{ number_format($totalVentas, 2) }}</strong>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Nº Factura</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ventas as $venta)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($venta->transaction_date)->format('d/m/Y H:i') }}</td>
                            <td>{{ $venta->invoice_no }}</td>
                            <td>${{ number_format($venta->final_total, 2) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No se encontraron ventas para el mes anterior.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- Renderizar los links de paginación --}}
        {{ $ventas->links() }}
    </div>
</div>
@endsection