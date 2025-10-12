@extends('layouts.web')

@php
$title = isset($edit) ? 'Editar Oferta' : 'Nueva oferta';
$route = isset($edit) ? 'offers.update' : 'offers.save';
@endphp

@section('title', $title)

@section('content-offers')
@include('offers.form')
@endsection
