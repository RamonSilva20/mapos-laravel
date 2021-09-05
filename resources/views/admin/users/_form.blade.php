<div>
    <form role="form" action="{{ $user->exists
        ? url('admin/users/update', ['user' => $user->getKey()])
        : url('admin/users/store') }}"
        method="POST"
    >
        @method($user->exists ? 'PUT' : 'POST')
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2" for="name">{{ __('messages.name') }}</label>
                <div class="input-group-sm col-sm-10">
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="João Silva" value="{{ $user->name ?? old('name') }}" autofocus>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="email">{{ __('messages.email') }}</label>
                <div class="input-group-sm col-sm-10">
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="joao_silva@email.com" value="{{ $user->email ?? old('email') }}">
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="password">{{ __('messages.password') }}</label>
                <div class="input-group-sm col-sm-10">
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="{{ __('messages.password') }}">
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="password_confirmation">{{ __('messages.repeat_password') }}</label>
                <div class="input-group-sm col-sm-10">
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password_confirmation" name="password_confirmation" placeholder="{{ __('messages.repeat_password') }}">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
        </div>
    </form>
</div>
