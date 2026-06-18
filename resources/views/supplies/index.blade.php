@extends('layouts.web')

@section('title', 'Insumos')

@section('content-supplies')
<section class="section">
    <div class="section-content">
        <div class="title">
            <span class="material-symbols-outlined">
                trolley
            </span>
            <span class="text">Insumos:</span>
        </div>

        <div class="button-box">
            <a href="{{ route('supplies.create') }}" class="buttons hover:bg-green-600 hover:text-zinc-900 duration-300" title="Nuevo insumo">
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
                <th>Precio</th>
                <th>Fecha</th>
                <th>Herramientas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $supplie)
            <tr>
                <td>{{ $supplie->name }}</td>
                <td>@formatCurrency($supplie->price)</td>
                <td>@formatDate($supplie->created_at)</td>
                <td>
                    <div class="tools">
                        <a href="{{ route('supplies.edit', ['id'=>$supplie->id]) }}" title="Editar insumo">
                            <span class="material-symbols-outlined icon-small hover:text-amber-600 duration-300">edit</span>
                        </a>
                        <form action="{{ route('supplies.delete', ['id'=>$supplie->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" title="Eliminar insumo">
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
            No hay insumos agregados!!!
        </div>
    </div>
    @endif
    <div class="pagination-box">
        {{ $tables->links('pagination::bootstrap-4') }}
    </div>
</section>
@endsection
