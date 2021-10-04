    <form role="form" action="{{ $product->exists
        ? url('products/update', ['product' => $product->getKey()])
        : url('products/store') }}" method="POST">
        @method($product->exists ? 'PUT' : 'POST')
        @csrf
        <div class="row p-3">
            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="name">{{ __('messages.name') }}</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Produto Exemplo" value="{{ $product->name ?? old('name') }}" autofocus>
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="barcode">{{ __('messages.barcode') }}</label>
                    <input type="text" class="form-control {{ $errors->has('barcode') ? 'is-invalid' : '' }}" id="barcode" name="barcode" placeholder="Código de barras" value="{{ $product->barcode ?? old('barcode') }}">
                    @if ($errors->has('barcode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('barcode') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-12">
                <div class="mb-2">
                    <label for="description">{{ __('messages.description') }}</label>
                    <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" name="description" placeholder="{{ __('messages.description') }}">{{ $product->description ?? old('description') }}</textarea>
                    @if ($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="purchase_price">{{ __('messages.purchase_price') }}</label>
                    <input type="text" class="form-control {{ $errors->has('purchase_price') ? 'is-invalid' : '' }}" id="purchase_price" name="purchase_price" value="{{ $product->purchase_price ?? old('purchase_price') }}">
                    @if ($errors->has('purchase_price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purchase_price') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="sale_price">{{ __('messages.sale_price') }}</label>
                    <input type="text" class="form-control {{ $errors->has('sale_price') ? 'is-invalid' : '' }}" id="sale_price" name="sale_price" value="{{ $product->sale_price ?? old('sale_price') }}">
                    @if ($errors->has('sale_price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sale_price') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="unit">{{ __('messages.unit') }}</label>
                    <input type="text" class="form-control {{ $errors->has('unit') ? 'is-invalid' : '' }}" id="unit" name="unit" value="{{ $product->unit ?? old('unit') }}">
                    @if ($errors->has('unit'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="quantity_in_stock">{{ __('messages.quantity_in_stock') }}</label>
                    <input type="number" class="form-control {{ $errors->has('quantity_in_stock') ? 'is-invalid' : '' }}" id="quantity_in_stock" name="quantity_in_stock" value="{{ $product->quantity_in_stock ?? old('quantity_in_stock') }}">
                    @if ($errors->has('quantity_in_stock'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity_in_stock') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="minimum_quantity_in_stock">{{ __('messages.minimum_quantity_in_stock') }}</label>
                    <input type="number" class="form-control {{ $errors->has('minimum_quantity_in_stock') ? 'is-invalid' : '' }}" id="minimum_quantity_in_stock" name="minimum_quantity_in_stock" value="{{ $product->minimum_quantity_in_stock ?? old('minimum_quantity_in_stock') }}">
                    @if ($errors->has('minimum_quantity_in_stock'))
                    <div class="invalid-feedback">
                        {{ $errors->first('minimum_quantity_in_stock') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('messages.save') }}</button>
            <a class="btn btn-light" href="{{ url('products') }}"><i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }}</a>
        </div>
    </form>
