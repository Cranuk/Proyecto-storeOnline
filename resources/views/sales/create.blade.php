@extends('layouts.web')

@php
$title = 'Nueva venta';
$route = 'sales.save';
@endphp

@section('title', $title)

@section('content-sales')
@include('sales.form')
@endsection
