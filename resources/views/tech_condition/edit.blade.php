@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <form method="POST" id="Edit" action="{{ route('customers.update', $customer->id) }}">
                @csrf
                <div class="form-group row">
                    <label for="CodFormsPredpr" class="col-md-2 col-form-label text-md-right">{{ __('messages.Org_unit') }}</label>

                    <div class="col-md-8">
                        <select class="custom-select form-control @error('CodFormsPredpr') is-invalid @enderror" id="CodFormsPredpr"  name="CodFormsPredpr">
                            @foreach($legalForms as $legalForm)
                                @if ($legalForm->id === $customer->CodFormsPredpr)
                                    <option selected value="{{ $legalForm->id }}">{{ $legalForm->FormaPredpr }}</option>
                                @else
                                    <option value="{{ $legalForm->id }}">{{ $legalForm->FormaPredpr }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('CodFormsPredpr')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Familiya" class="col-md-2 col-form-label text-md-right">{{ __('messages.Last_name') }}</label>

                    <div class="col-md-8">
                        <input id="Familiya" type="text" class="form-control @error('Familiya') is-invalid @enderror" name="Familiya" value="{{ $customer->Familiya }}" required autocomplete="Familiya" autofocus>

                        @error('Familiya')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Imya" class="col-md-2 col-form-label text-md-right">{{ __('messages.First_name') }}</label>

                    <div class="col-md-8">
                        <input id="Imya" type="text" class="form-control @error('Imya') is-invalid @enderror" name="Imya" value="{{ $customer->Imya }}" required autocomplete="Imya" autofocus>

                        @error('Imya')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Otchestvo" class="col-md-2 col-form-label text-md-right">{{ __('messages.Middle_name') }}</label>

                    <div class="col-md-8">
                        <input id="Otchestvo" type="text" class="form-control @error('Otchestvo') is-invalid @enderror" name="Otchestvo" value="{{ $customer->Otchestvo }}" required autocomplete="Otchestvo" autofocus>

                        @error('Otchestvo')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Gorod" class="col-md-2 col-form-label text-md-right">{{ __('messages.City') }}</label>

                    <div class="col-md-8">
                        <input id="Gorod" type="text" class="form-control @error('Gorod') is-invalid @enderror" name="Gorod" value="{{ $customer->Gorod }}" required autocomplete="Gorod" autofocus>

                        @error('Gorod')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Adres" class="col-md-2 col-form-label text-md-right">{{ __('messages.Address') }}</label>

                    <div class="col-md-8">
                        <input id="Adres" type="text" class="form-control @error('Adres') is-invalid @enderror" name="Adres" value="{{ $customer->Adres }}" required autocomplete="Adres" autofocus>

                        @error('Adres')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Telefon" class="col-md-2 col-form-label text-md-right">{{ __('messages.Phone') }}</label>

                    <div class="col-md-8">
                        <input id="Telefon" type="text" class="form-control @error('Telefon') is-invalid @enderror" name="Telefon" value="{{ $customer->Telefon }}" autocomplete="Telefon" autofocus>

                        @error('Telefon')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                @include('customers.__passport')
                @include('customers.__organization')
                <div class="form-group row">
                    <div class="col-md-10 offset-md-10">
                        <button type="submit" class="btn btn-primary">
                            {{ __('messages.Save') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
