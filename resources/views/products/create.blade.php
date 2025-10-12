@extends('layouts.web')

@php
$title = isset($edit) ? 'Editar Productos' : 'Nuevo producto';
$route = isset($edit) ? 'products.update' : 'products.save';
@endphp

@section('title', $title)

@section('content-products')
@include('products.form')
@endsection
