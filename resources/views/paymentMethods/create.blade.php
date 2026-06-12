@extends('layouts.web')

@php
$title = isset($edit) ? 'Editar Medio de pago' : 'Nuevo medio de pago';
$route = isset($edit) ? 'paymentMethods.update' : 'paymentMethods.save';
@endphp

@section('title', $title)

@section('content-paymentmethod')
<div class="flex justify-center">
    <form action="{{ route($route)}}" method="POST" class="form-style">
        @csrf

        <div class="subtitle underlined center">
            @isset($edit)
            Editar Medio de pago
            @else
            Nuevo medio de pago
            @endisset
        </div>

        <div class="space-10"></div>

        @isset($edit)
        <input type="hidden" name="id" value="{{ $edit->id }}">
        @endisset

        <label for="name" class="label-text">Nombre:</label>
        <input type="text" name="name" class="input-text" value="{{ $edit->name ?? '' }}" required>

        <label for="description" class="label-text">Descripcion:</label>
        <textarea name="description" class="input-textarea" cols="29" rows="5" required>{{ $edit->description ?? '' }}</textarea>

        <div class="button-box">
            <a href="{{ route('paymentMethods') }}" class="buttons" title="Volver">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
            <input type="submit" value="Guardar" class="buttons">
        </div>
    </form>
</div>
@endsection
