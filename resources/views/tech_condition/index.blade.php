@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="card-body">
            <div class="row justify-content-center">
                <a href="{{route('techCondition.create')}}" class="col-md-2 btn btn-danger" role="button">{{__('messages.TechCondition_Create') }}</a>
                <a href="{{route('techCondition.index')}}" class="col-md-2 btn btn-success" role="button">{{__('messages.TechCondition_Allrecords') }}</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('techCondition.search') }}">
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
                </div>
            </div>
            <div class="row justify-content-center">
                @if ( isset($lastName) )
                 {{ $techConditions->appends(['lastName' => $lastName])->links() }}
                @else
                 {{ $techConditions->links() }}
                @endif
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">{{ __('messages.Number')  }}</th>
                    <th scope="col">{{ __('messages.TechCondition_Id')  }}</th>
                    <th scope="col">{{ __('messages.TechCondition_Date')  }}</th>
                    <th scope="col">{{ __('messages.Full_Name')  }}</th>
                    <th scope="col">{{ __('messages.TechCondition_Object')  }}</th>
                    <th scope="col">{{ __('messages.TechCondition_Power_New')  }}</th>
                    <th scope="col">{{ __('messages.TechCondition_Nature_Power')  }}</th>
                    <th scope="col">{{ __('messages.Res')  }}</th>
                    <th scope="col">{{ __('messages.Action')  }}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($techConditions as $techCondition)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $techCondition->id }}</td>
                        <td>{{ $techCondition->DataTU }}</td>
                        @if ( $techCondition->CodZakazchika )
                        <td><a href="{{ route('customers.edit', $techCondition->CodZakazchika ) }}">{{ $techCondition->customers['Familiya'] . ' ' . mb_substr('' . $techCondition->customers['Imya'], 0, 1) . '.' . mb_substr($techCondition->customers['Otchestvo'], 0, 1) . '.' }}</a></td>
                        @else
                        <td class="text-muted">{{__('messages.No_Data')}}</td>
                        @endif
                        <td>{{ $techCondition->NaChtoZayavka }}</td>
                        <td>{{ $techCondition->ZayavNagruzka }}</td>
                        <td>{{ $techCondition->natureLoad['KharNagruzki'] }}</td>
                        <td>{{ $techCondition->unitModel['NaimenPodrazdelenia'] }}</td>
                        <td><a class="card-body" href="{{ route('techCondition.edit', $techCondition->id) }}">{{__('messages.Edit')}}</a></td>
                    </tr>
                    @php($i++)
                @endforeach
                </tbody>
            </table>
        </div>
        @if ( isset($lastName) )
            {{ $techConditions->appends(['lastName' => $lastName])->links() }}
        @else
            {{ $techConditions->links() }}
        @endif
    </div>
</div>
@endsection
