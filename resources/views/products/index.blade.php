@extends('layouts.web')

@section('title', 'Productos')

@section('content-products')
<section class="section">
    <div class="section-content">
        <div class="title">
            <span class="material-symbols-outlined">
                inventory_2
            </span>
            <span class="text">Productos:</span>
        </div>

        <div class="button-box">
            <a href="{{ route('products.create') }}" class="buttons" title="Nuevo producto">
                <span class="material-symbols-outlined icon-small">add_box</span>
            </a>
        </div>
    </div>

    <div class="space-10"></div>

    @if($count > 0)
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad en venta</th>
                <th>Herramientas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $product)
            <tr>
                <td>
                    @if($product->amount <= $product->minimal_amount)
                        <span class="material-symbols-outlined icon-small alert-amount" title="Aviso de poco stock">
                            info
                        </span>
                        @endif
                        {{ $product->name }}
                </td>
                <td>{{ $product->description }}</td>
                <td>@formatCurrency($product->price)</td>
                <td>@formatAmount($product->amount, $product->type_unit)</td>
                <td>
                    <div class="tools">
                        <a href="{{ route('products.edit', ['id'=>$product->id]) }}">
                            <span class="material-symbols-outlined icon-small">edit</span>
                        </a>
                        <form action="{{ route('products.delete', ['id'=>$product->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" title="Eliminar medio de pago">
                                <span class="material-symbols-outlined icon-small">delete</span>
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
            <span class="material-symbols-outlined icon-head icon-medium icon-material">info</span>
            No hay productos agregados!!!
        </div>
    </div>
    @endif
    <div class="pagination-box">
        {{ $tables->links('pagination::bootstrap-4') }}
    </div>
</section>
@endsection
