@extends('layouts.app')

@section('title', __('messages.view_product'))

@section('content_header')
<div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
        <h2>{{ __('messages.view_product') }}</h2>
    </div>
</div>
@stop

@section('content')
<div class="p-3">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <td class="w-50">{{ __('messages.name') }}</td>
                <td class="w-50">{{ $product->name }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.description') }}</td>
                <td class="w-50">{{ $product->description }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.barcode') }}</td>
                <td class="w-50">{{ $product->barcode }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.purchase_price') }}</td>
                <td class="w-50">{{ $product->purchase_price }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.sale_price') }}</td>
                <td class="w-50">{{ $product->sale_price }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.unit') }}</td>
                <td class="w-50">{{ $product->unit }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.quantity_in_stock') }}</td>
                <td class="w-50">{{ $product->quantity_in_stock }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.minimum_quantity_in_stock') }}</td>
                <td class="w-50">{{ $product->minimum_quantity_in_stock }}</td>
            </tr>
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ url('products') }}" class="btn btn-light"><i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }}</a>
    </div>
</div>
@stop
