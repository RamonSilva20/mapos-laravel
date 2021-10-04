    <form role="form" action="{{ $customer->exists
        ? url('customers/update', ['customer' => $customer->getKey()])
        : url('customers/store') }}" method="POST">
        @method($customer->exists ? 'PUT' : 'POST')
        @csrf
        <div class="row p-3">
            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="name">{{ __('messages.name') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Nome.." value="{{ $customer->name ?? old('name') }}" autofocus>
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="document_number">{{ __('messages.document_number') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('document_number') ? 'is-invalid' : '' }}" id="document_number" name="document_number" placeholder="Ex: 000.000.000-00" value="{{ $customer->document_number ?? old('document_number') }}">
                    @if ($errors->has('document_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('document_number') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="phone_number">{{ __('messages.phone_number') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" id="phone_number" name="phone_number" placeholder="(00) 0000-0000" value="{{ $customer->phone_number ?? old('phone_number') }}">
                    @if ($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="mobile_phone_number">{{ __('messages.mobile_phone_number') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('mobile_phone_number') ? 'is-invalid' : '' }}" id="mobile_phone_number" name="mobile_phone_number" placeholder="(00) 00000-0000" value="{{ $customer->mobile_phone_number ?? old('mobile_phone_number') }}">
                    @if ($errors->has('mobile_phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_phone_number') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-12">
                <div class="mb-2">
                    <label for="email">{{ __('messages.email') }}</label>
                    <input required type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="email@email.com" value="{{ $customer->email ?? old('email') }}">
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="postal_code">{{ __('messages.postal_code') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" id="postal_code" name="postal_code" placeholder="00000-000" value="{{ $customer->postal_code ?? old('postal_code') }}">
                    @if ($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="street_number">{{ __('messages.street_number') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('street_number') ? 'is-invalid' : '' }}" id="street_number" name="street_number" placeholder="1234" value="{{ $customer->street_number ?? old('street_number') }}">
                    @if ($errors->has('street_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('street_number') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="street_name">{{ __('messages.street_name') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('street_name') ? 'is-invalid' : '' }}" id="street_name" name="street_name" placeholder="Rua Exemplo" value="{{ $customer->street_name ?? old('street_name') }}">
                    @if ($errors->has('street_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('street_name') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="neighborhood">{{ __('messages.neighborhood') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('neighborhood') ? 'is-invalid' : '' }}" id="neighborhood" name="neighborhood" placeholder="Centro" value="{{ $customer->neighborhood ?? old('neighborhood') }}">
                    @if ($errors->has('neighborhood'))
                    <div class="invalid-feedback">
                        {{ $errors->first('neighborhood') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="city">{{ __('messages.city') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" id="city" name="city" placeholder="Cidade" value="{{ $customer->city ?? old('city') }}">
                    @if ($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="state">{{ __('messages.state') }}</label>
                    <input required type="text" class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" id="state" name="state" placeholder="Estado" value="{{ $customer->state ?? old('state') }}">
                    @if ($errors->has('state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('state') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="complement">{{ __('messages.complement') }}</label>
                    <input type="text" class="form-control {{ $errors->has('complement') ? 'is-invalid' : '' }}" id="complement" name="complement" placeholder="Complemento" value="{{ $customer->complement ?? old('complement') }}">
                    @if ($errors->has('complement'))
                    <div class="invalid-feedback">
                        {{ $errors->first('complement') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="contact">{{ __('messages.contact') }}</label>
                    <input type="text" class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}" id="contact" name="contact" placeholder="Contato" value="{{ $customer->contact ?? old('contact') }}">
                    @if ($errors->has('contact'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact') }}
                    </div>
                    @endif
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('messages.save') }}</button>
            <a class="btn btn-light" href="{{ url('customers') }}"><i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }}</a>
        </div>

    </form>
