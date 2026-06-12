@extends('layouts.web')

@section('title', 'Dashboard')

@section('content-dashboard')
<section class="dashboard">
    <div class="dash-content">
        <div class="title">
            <span class="material-symbols-outlined icon-material">analytics</span>
            <span class="title-text">Dashboard</span>
        </div>

        <div class="boxes">
            @foreach($payMethod as $data)
            <div class="box box1">
                <span class="material-symbols-outlined icon-material">payments</span>
                <p class="boxes-text">Total en {{$data->name}}</p>
                <p class="number">@getBalancePositive($data->id)</p>
            </div>
            @endforeach
            <div class="box box1">
                <span class="material-symbols-outlined icon-material">finance_chip</span>
                <p class="boxes-text">Total en ventas</p>
                <p class="number">@getBalancePositive()</p>
            </div>
        </div>

        <div class="boxes">
            <div class="box box2">
                <span class="material-symbols-outlined icon-material">shopping_bag</span>
                <p class="boxes-text">Total en insumos</p>
                <p class="number">@getBalanceNegative()</p>
            </div>
            <div class="box box3">
                <span class="material-symbols-outlined icon-material">bar_chart</span>
                <p class="boxes-text">Balance general</p>
                <p class="number">@getBalance()</p>
            </div>
        </div>

        <div class="activity">
            <div class="title">
                <span class="material-symbols-outlined icon-material">book</span>
                <p class="title-text">Ultimas ventas</p>
            </div>

            @if($count > 0)
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio del producto</th>
                        <th>Total</th>
                        <th>Medio de pago</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sales as $sale)
                    <tr>
                        <td>
                            @isset($sale->offer->name)
                            <span class="material-symbols-outlined alert-offer" title="Producto en oferta">percent_discount</span>
                            {{ $sale->offer->name }}
                            @else
                            {{ $sale->product->name }}
                            @endisset
                        </td>
                        <td>@formatAmount($sale->amount, $sale->product->type_unit ?? $sale->offer->type_unit)</td>
                        <td>@formatCurrency($sale->product_price ?? $sale->offer->price)</td>
                        <td>@formatCurrency($sale->price ?? $sale->offer->price)</td>
                        <td>{{ $sale->paymentMethod->name }}</td>
                        <!--NOTE: muestra el metodo de pago asociado a la venta-->
                        <td>@formatDate($sale->created_at)</td>
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

        </div>
    </div>
</section>
@endsection
