@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('customers.create')}}" class="col-md-2 btn btn-danger" role="button">{{__('messages.Create_customer') }}</a>
                    <a href="{{route('customers.index')}}" class="col-md-2 btn btn-success" role="button">{{__('messages.All_records') }}</a>
                </div>
            </div>
            <form method="POST" action="{{ route('customers.search') }}">
                @csrf
                <div class="form-group row">

                    <label for="lastName" class="col-md-3 col-form-label text-md-right">{{ __('messages.Last_name') }}</label>

                    <div class="col-md-6">
                        <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                        @error('lastName')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('messages.Search') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">{{ __('messages.Number')  }}</th>
                    <th scope="col">{{ __('messages.Code_customer')  }}</th>
                    <th scope="col">{{ __('messages.Full_Name')  }}</th>
                    <th scope="col">{{ __('messages.Org_unit')  }}</th>
                    <th scope="col">{{ __('messages.City')  }}</th>
                    <th scope="col">{{ __('messages.Phone')  }}</th>
                    <th scope="col">{{ __('messages.Res')  }}</th>
                    <th scope="col">{{ __('messages.Action')  }}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->Familiya . ' ' . $customer->Imya . ' '. $customer->Otchestvo . ' ' }}</td>
                        <td>{{ $customer->legalForm['FormaPredpr'] }}</td>
                        <td>{{ $customer->Gorod }}</td>
                        <td>{{ $customer->Telefon }}</td>
                        <td>{{ $customer->unitModel['NaimenPodrazdelenia'] }}</td>
                        <td><a class="card-body" href="{{ route('customers.edit', $customer->id) }}">{{__('messages.Edit')}}</a></td>
                    </tr>
                    @php($i++)
                @endforeach
                </tbody>
            </table>
        </div>
        @if ( isset($lastName) )
            {{ $customers->appends(['lastName' => $lastName])->links() }}
        @else
            {{ $customers->links() }}
        @endif
    </div>
</div>
@endsection
