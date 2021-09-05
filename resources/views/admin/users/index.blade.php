@extends('layouts.app')

@section('title', __('messages.users'))

@section('content_header')
    <div class="p-2">
        <div class="float-left">
            <h2>{{ __('messages.users') }}</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-xs btn-primary btn-" href="{{ url('admin/users/create') }}">{{ __('messages.create_user') }}</a>
        </div>
    </div>
@stop

@section('content')
    <div class="box p-2">
        <!-- /.box-header -->
        <div class="box-body mt-4">
            <table class="table table-bordered table-condensed">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">{{ __('messages.name') }}</th>
                    <th class="text-center">{{ __('messages.email') }}</th>
                    <th class="text-center">{{ __('messages.actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($users as $user)
                    <tr class="text-center">
                        <td>{{ $user->getKey() }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ url('admin/users/show', $user) }}">
                                {{ __('messages.view') }}
                            </a>
                            <a class="btn btn-xs btn-warning" href="{{ url('admin/users/edit', $user) }}">
                                {{ __('messages.edit') }}
                            </a>
                            <button type="button" class="btn btn-xs btn-danger destroy" data-id="{{ $user->getKey() }}">
                                {{ __('messages.delete') }}
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="4">{{ __('messages.no_records') }}</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
    </div>
@stop

@section('js')
 <script>
     $(function() {
         $('.destroy').on('click', function () {
             var id = $(this).data('id');
             Swal.fire({
                 title: "{{ __('messages.confirm_user_delete') }}",
                 confirmButtonText: "{{ __('messages.confirm') }}",
                 cancelButtonText: "{{ __('messages.cancel') }}",
                 showCancelButton: true,
                 showCloseButton: true
             })
             .then((confirm) => {
                 if (!confirm.value) {
                     return;
                 }

                 $.ajax({
                     url: "{{ url('admin/users/destroy', '_id') }}".replace('_id', id),
                     method: 'DELETE',
                     data: {
                        "_token": "{{ csrf_token() }}"
                    },
                     success: function (xhr) {
                         Swal.fire({
                             icon: 'success',
                             title: "{{ __('messages.user_deleted_success') }}",
                             showConfirmButton: false,
                             timer: 1500
                         })
                         .then(() => {
                             window.location.reload();
                         });
                     },
                     error: function (xhr) {
                         Swal.fire({
                             icon: 'error',
                             title: "{{ __('messages.user_deleted_fail') }}",
                             showConfirmButton: true,
                             timer: 1500
                         });
                     }
                 });
             });
         })
     });
 </script>
@endsection
