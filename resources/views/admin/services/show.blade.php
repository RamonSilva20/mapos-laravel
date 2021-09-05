@extends('layouts.app')


@section('content_header')

<div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
        <h2>{{ __('messages.view_service') }}</h2>
    </div>
</div>

@stop

@section('content')
<div class="p-3">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <td class="w-50">{{ __('messages.name') }}</td>
                <td class="w-50">{{ $service->name }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.description') }}</td>
                <td class="w-50">{{ $service->description }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.price') }}</td>
                <td class="w-50">{{ $service->price }}</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.created_at') }}</td>
                <td class="w-50">@datetime($service->created_at)</td>
            </tr>
            <tr>
                <td class="w-50">{{ __('messages.updated_at') }}</td>
                <td class="w-50">@datetime($service->updated_at)</td>
            </tr>
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ url('admin/services') }}" class="btn btn-light"><i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }}</a>
    </div>
</div>
@stop

@section('js')
@endsection
