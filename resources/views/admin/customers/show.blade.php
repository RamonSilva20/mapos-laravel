@extends('layouts.app')

@section('title', __('messages.view_customer'))

@section('content_header')

<div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
        <h2>{{ __('messages.view_customer') }}</h2>
    </div>

</div>

@stop

@section('content')
<div class="p-3">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <td class="w-50">{{ __('messages.name') }}</td>
                <td class="w-50">{{ $customer->name }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.document_number') }}</td>
                <td class="w-50">{{ $customer->document_number }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.phone_number') }}</td>
                <td class="w-50">{{ $customer->phone_number }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.mobile_phone_number') }}</td>
                <td class="w-50">{{ $customer->mobile_phone_number }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.email') }}</td>
                <td class="w-50">{{ $customer->email }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.postal_code') }}</td>
                <td class="w-50">{{ $customer->postal_code }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.street_number') }}</td>
                <td class="w-50">{{ $customer->street_number }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.street_name') }}</td>
                <td class="w-50">{{ $customer->street_name }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.neighborhood') }}</td>
                <td class="w-50">{{ $customer->neighborhood }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.city') }}</td>
                <td class="w-50">{{ $customer->city }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.state') }}</td>
                <td class="w-50">{{ $customer->state }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.complement') }}</td>
                <td class="w-50">{{ $customer->complement }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.contact') }}</td>
                <td class="w-50">{{ $customer->contact }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.created_at') }}</td>
                <td class="w-50">@datetime($customer->created_at)</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.updated_at') }}</td>
                <td class="w-50">@datetime($customer->updated_at)</td>
            </tr>
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ url('customers') }}" class="btn btn-light"> <i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }}</a>
    </div>

</div>
@stop

@section('js')
@endsection
