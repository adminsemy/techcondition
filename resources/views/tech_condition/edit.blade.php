@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card-body">
            <form method="POST" id="Edit" action="{{ route('techCondition.update', $techCondition->id) }}">
                @csrf
                <div class="form-group row">
                    <label for="TU-1" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Number_1') }}</label>

                    <div class="col-md-1">
                        <input id="TU-1" type="text" class="form-control @error('TU-1') is-invalid @enderror" name="TU-1" value="{{ $techCondition['№TU-1'] }}" required autocomplete="TU-1" autofocus>

                        @error('TU-1')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <label for="TU-2" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Number_2') }}</label>

                    <div class="col-md-1">
                        <input id="TU-2" type="text" class="form-control @error('TU-2') is-invalid @enderror" name="TU-2" value="{{ $techCondition['№TU-2'] }}" required autocomplete="TU-2" autofocus>

                        @error('TU-2')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <label for="DataTU" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Number_2') }}</label>

                    <div class="col-md-1">
                        <input id="DataTU" type="text" class="form-control @error('DataTU') is-invalid @enderror" name="DataTU" value="{{ $techCondition->DataTU }}" required autocomplete="DataTU" autofocus>

                        @error('DataTU')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <label for="CodZakazchika" class="col-md-1 col-form-label text-md-right">{{ __('messages.Res') }}</label>

                    <div class="col-md-5">
                        <select class="custom-select form-control @error('CodZakazchika') is-invalid @enderror" id="CodZakazchika"  name="CodZakazchika">
                            @foreach($customers as $customer)
                                @if ($customer->id === $techCondition->CodZakazchika)
                                    <option selected value="{{ $customer->id }}">{{ $customer->full_name }}</option>
                                @else
                                    <option value="{{ $customer->id }}">{{ $customer->full_name . ' ' . $customer->Gorod . ' ' . $customer->Adres }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('CodRES')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    
                </div>
                
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
