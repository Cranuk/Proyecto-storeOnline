<?php

use App\Http\Controllers\FilterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplieController;
use Illuminate\Support\Facades\Route;

// ANCHOR: rutas para el main
Route::get('/', [IndexController::class, 'main'])->name('main');

// ANCHOR: rutas que tiene acceso el panel
Route::get('/sales', [PanelController::class, 'sales'])->name('sales');
Route::get('/supplies', [PanelController::class, 'supplies'])->name('supplies');
Route::get('/products', [PanelController::class, 'products'])->name('products');
Route::get('/offers', [PanelController::class, 'offers'])->name('offers');
Route::get('/paymentMethod', [PanelController::class, 'paymentMethod'])->name('paymentMethods');

// ANCHOR: rutas para metodos de pago
Route::prefix('paymentMethod')
    ->name('paymentMethods.')
    ->controller(PaymentMethodController::class)
    ->group(function () {
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::delete('delete/{id}', 'delete')->name('delete');
        Route::post('save', 'save')->name('save');
        Route::post('update', 'update')->name('update');
    });

// ANCHOR: rutas para los productos
Route::prefix('product')
    ->name('products.')
    ->controller(ProductController::class)
    ->group(function () {
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::delete('delete/{id}', 'delete')->name('delete');
        Route::post('save', 'save')->name('save');
        Route::post('update', 'update')->name('update');
    });

// ANCHOR: rutas para insumos
Route::prefix('supplie')
    ->name('supplies.')
    ->controller(SupplieController::class)
    ->group(function () {
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::delete('delete/{id}', 'delete')->name('delete');
        Route::post('save', 'save')->name('save');
        Route::post('update', 'update')->name('update');
    });

// ANCHOR: rutas para ventas
Route::prefix('sale')
    ->name('sales.')
    ->controller(SaleController::class)
    ->group(function () {
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::delete('delete/{id}', 'delete')->name('delete');
        Route::post('save', 'save')->name('save');
        Route::post('update', 'update')->name('update');
    });

// ANCHOR: rutas para ofertas
Route::prefix('offer')
    ->name('offers.')
    ->controller(OfferController::class)
    ->group(function () {
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::delete('delete/{id}', 'delete')->name('delete');
        Route::post('save', 'save')->name('save');
        Route::post('update', 'update')->name('update');
    });

// NOTE: Rutas para filtros
Route::post('/filter/table',[FilterController::class, 'filter'])->name('filterDate');

// NOTE: Rutas para reportes
Route::post('/report/pdf', [ReportController::class, 'report'])->name('reportPdf');
