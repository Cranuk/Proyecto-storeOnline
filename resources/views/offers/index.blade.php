@extends('layouts.web')

@section('title', 'Ofertas')

@section('content-offers')
<section class="section">
    <div class="section-content">
        <div class="title">
            <span class="material-symbols-outlined">
                percent_discount
            </span>
            <span class="text">Ofertas vigentes:</span>
        </div>

        <div class="button-box">
            <a href="{{ route('offers.create') }}" class="buttons hover:text-zinc-900 hover:bg-green-600 duration-300" title="Nueva oferta">
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
                <th>Precio en oferta</th>
                <th>Cantidad en oferta</th>
                <th>Herramientas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $offer)
            <tr>
                <td>{{ $offer->name }}</td>
                <td>{{ $offer->description }}</td>
                <td>@formatCurrency($offer->price)</td>
                <td>@formatAmount($offer->amount_discount, $offer->type_unit)</td>
                <td>
                    <div class="tools">
                        <a href="{{ route('offers.edit', ['id'=>$offer->id]) }}">
                            <span class="material-symbols-outlined icon-small hover:text-amber-600 duration-300" title="Editar oferta">edit</span>
                        </a>
                        <form action="{{ route('offers.delete', ['id'=>$offer->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" title="Eliminar oferta">
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
            <span class="material-symbols-outlined icon-head icon-medium icon-material">info</span>
            No hay ofertas agregadas!!!
        </div>
    </div>
    @endif
    <div class="pagination-box">
        {{ $tables->links('pagination::bootstrap-4') }}
    </div>
</section>
@endsection
