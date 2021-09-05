@extends('layouts.app')

@section('title', __('messages.view_user'))

@section('content_header')
    <div class="p-2">
        <h2>{{ __('messages.view_user') }}</h2>
    </div>
@stop

@section('content')
    <div class="card card-primary p-4">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td class="w-50">{{ __('messages.name') }}</td>
                    <td class="w-50">{{ $user->name }}</td>
                </tr>
                <tr>
                    <td class="w-50">{{ __('messages.email') }}</td>
                    <td class="w-50">{{ $user->email }}</td>
                </tr>
                <tr>
                    <td class="w-50">{{ __('messages.created_at') }}</td>
                    <td class="w-50">@datetime($user->created_at)</td>
                </tr>
                <tr>
                    <td class="w-50">{{ __('messages.updated_at') }}</td>
                    <td class="w-50">@datetime($user->updated_at)</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ url('admin/users') }}" class="btn btn-primary">{{ __('messages.go_back') }}</a>
        </div>
    </div>
@stop

@section('js')
@endsection
