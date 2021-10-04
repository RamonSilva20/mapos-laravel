    <form role="form" action="{{ $service->exists
        ? url('services/update', ['service' => $service->getKey()])
        : url('services/store') }}" method="POST">
        @method($service->exists ? 'PUT' : 'POST')
        @csrf

        <div class="row p-3">

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="name">{{ @trans('messages.name') }}</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Serviço exemplo" value="{{ $service->name ?? old('name') }}" autofocus>
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="description">{{ @trans('messages.description') }}</label>
                    <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" name="description" placeholder="Descrição exemplo" value="{{ $service->description ?? old('description') }}">
                    @if ($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="price">{{ @trans('messages.price') }}</label>
                    <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" name="price" placeholder="0.00" value="{{ $service->price ?? old('price') }}">
                    @if ($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card-footer" style="padding-top: 0">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ @trans('messages.save') }}</button>
            <a class="btn btn-light" href="{{ url('services') }}"><i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }}</a>
        </div>
    </form>
