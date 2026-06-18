@extends('layouts.web')

@section('title', 'Metodos de pago')

@section('content-paymentmethod')
<section class="section">
    <div class="section-content">
        <div class="title">
            <span class="material-symbols-outlined">
                payments
            </span>
            <span class="text">Medios de pago:</span>
        </div>

        <div class="button-box">
            <a href="{{ route('paymentMethods.create') }}" class="buttons hover:text-zinc-900 hover:bg-green-600 duration-300" title="Nuevo medio de pago">
                <span class="material-symbols-outlined icon-small">add_box</span>
            </a>
        </div>
    </div>

    <div class="space-10"></div>

    @if($count > 0)
    <table>
        <thead>
            <tr>
                <th>Medio de pago</th>
                <th>Descripcion</th>
                <th>Herramientas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $methodPay)
            <tr>
                <td>{{ $methodPay->name }}</td>
                <td>{{ $methodPay->description }}</td>
                <td>
                    <div class="tools">
                        <a href="{{ route('paymentMethods.edit', ['id'=>$methodPay->id]) }}" title="Editar medio de pago">
                            <span class="material-symbols-outlined icon-small hover:text-amber-600 duration-300">edit</span>
                        </a>
                        <form action="{{ route('paymentMethods.delete', ['id'=>$methodPay->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" title="Eliminar medio de pago">
                                <span class="material-symbols-outlined icon-small hover:text-red-600 duration-300">delete</span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert-box">
        <div class="alert alert-notice">
            <span class="material-symbols-outlined icon-head icon-big icon-material">info</span>
            No hay medios de pagos registrados!!!
        </div>
    </div>
    @endif
    <div class="pagination-box">
        {{ $tables->links('pagination::bootstrap-4') }}
    </div>
</section>
@endsection
