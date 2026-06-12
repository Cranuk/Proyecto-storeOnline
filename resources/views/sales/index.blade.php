@extends('layouts.web')

@section('title', 'Ventas')

@section('content-sales')
<section class="section">
    <div class="section-content">
        <div class="title">
            <span class="material-symbols-outlined">
                point_of_sale
            </span>
            <span class="text">Ventas:</span>
        </div>

        <div class="button-box">
            <a href="{{ route('sales.create')}}" class="buttons" title="Nueva venta">
                <span class="material-symbols-outlined icon-small">add_box</span>
            </a>
            <a id="filter-button" class="buttons button-yellow" title='Filtro' data-table="sales">
                <span class="material-symbols-outlined icon-small">filter_alt</span>
            </a>
            <a id="report-button" class="buttons" title='Generar reporte' data-table="sales">
                <span class="material-symbols-outlined icon-small">description</span>
            </a>
        </div>
    </div>

    <div class="space-10"></div>

    @if($count > 0)
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio unitario / Oferta</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Medio de pago</th>
                <th>Fecha</th>
                <th>Herramientas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $sale)
            <tr>
                <td>
                    @isset($sale->offer->name)
                    <span class="material-symbols-outlined alert-offer" title="Oferta">percent_discount</span>
                    {{ $sale->offer->name }}
                    @else
                    {{ $sale->product->name }}
                    @endisset
                </td>
                <td>@formatCurrency( $sale->product_price ?? $sale->offer->price )</td>
                <td>@formatAmount($sale->amount, $sale->product->type_unit ?? $sale->offer->type_unit)</td>
                <td>@formatCurrency($sale->price ?? $sale->offer->price)</td>
                <td>{{ $sale->paymentMethod->name }}</td>
                <td>@formatDate($sale->created_at)</td>
                <td>
                    <div class="tools">
                        <form action="{{ route('sales.delete', ['id'=>$sale->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" title="Cancelar venta">
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
            No hay ventas registradas en el mes!!!
        </div>
    </div>
    @endif
    <div class="pagination-box">
        {{ $tables->links('pagination::bootstrap-4') }}
    </div>
</section>
@endsection
