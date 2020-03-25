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

                    <label for="DataTU" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Date') }}</label>

                    <div class="col-md-1">
                        <input id="DataTU" type="text" class="form-control @error('DataTU') is-invalid @enderror" name="DataTU" value="{{ $techCondition->DataTU }}" required autocomplete="DataTU" autofocus>

                        @error('DataTU')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <label for="CodZakazchika" class="col-md-1 col-form-label text-md-right">{{ __('messages.Full_Name') }}</label>

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
                        @error('CodZakazchika')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NZayavki" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Number_Propocal') }}</label>
                    <div class="col-md-1">
                        <input id="NZayavki" type="text" class="form-control @error('NZayavki') is-invalid @enderror" name="NZayavki" value="{{ $techCondition['№Zayavki'] }}" required autocomplete="NZayavki" autofocus>

                        @error('NZayavki')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <label for="DataZayavki" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Date_Propocal') }}</label>
                    <div class="col-md-1">
                        <input id="DataZayavki" type="text" class="form-control @error('DataZayavki') is-invalid @enderror" name="DataZayavki" value="{{ $techCondition->DataZayavki }}" required autocomplete="DataZayavki" autofocus>

                        @error('DataZayavki')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="NaChtoZayavka" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Object') }}</label>
                    <div class="col-md-11">
                        <input id="NaChtoZayavka" type="text" class="form-control @error('NaChtoZayavka') is-invalid @enderror" name="NaChtoZayavka" value="{{ $techCondition['NaChtoZayavka'] }}" required autocomplete="NaChtoZayavka" autofocus>

                        @error('NaChtoZayavka')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="NasPunktZayavki" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Object_Address') }}</label>
                    <div class="col-md-11">
                        <input id="NasPunktZayavki" type="text" class="form-control @error('NasPunktZayavki') is-invalid @enderror" name="NasPunktZayavki" value="{{ $techCondition['NasPunktZayavki'] }}" required autocomplete="NasPunktZayavki" autofocus>

                        @error('NasPunktZayavki')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="accordion" id="specifications">
                    <div class="card">
                      <div class="card-header" id="btnSpecifications">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSpecifications" aria-expanded="true" aria-controls="collapseSpecifications">
                            {{ __('messages.TechCondition_Specifications') }}
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseSpecifications" class="collapsing" aria-labelledby="btnSpecifications" data-parent="#specifications">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="ZayavNagruzka" class="col-md-2 col-form-label text-md-right">{{ __('messages.TechCondition_Maximum_Load') }}</label>
                            <div class="col-md-1">
                                <input id="ZayavNagruzka" type="text" class="form-control @error('ZayavNagruzka') is-invalid @enderror" name="ZayavNagruzka" value="{{ $techCondition['ZayavNagruzka'] }}" required autocomplete="ZayavNagruzka" autofocus>
        
                                @error('ZayavNagruzka')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <label for="VnovNagruzka" class="col-md-2 col-form-label text-md-right">{{ __('messages.TechCondition_Again_Load') }}</label>
                            <div class="col-md-1">
                                <input id="VnovNagruzka" type="text" class="form-control @error('VnovNagruzka') is-invalid @enderror" name="VnovNagruzka" value="{{ $techCondition['VnovNagruzka'] }}" required autocomplete="VnovNagruzka" autofocus>
        
                                @error('VnovNagruzka')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <label for="SuchestvNagruzka" class="col-md-2 col-form-label text-md-right">{{ __('messages.TechCondition_Existing_Load') }}</label>
                            <div class="col-md-1">
                                <input id="SuchestvNagruzka" type="text" class="form-control @error('SuchestvNagruzka') is-invalid @enderror" name="SuchestvNagruzka" value="{{ $techCondition['SuchestvNagruzka'] }}" required autocomplete="SuchestvNagruzka" autofocus>
        
                                @error('SuchestvNagruzka')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <label for="CodNapryazhenia" class="col-md-2 col-form-label text-md-right">{{ __('messages.TechCondition_Connection_Voltage') }}</label>
                            <div class="col-md-1">
                                <select class="custom-select form-control @error('CodNapryazhenia') is-invalid @enderror" id="CodNapryazhenia"  name="CodNapryazhenia">
                                    @foreach($connectionVoltages as $connectionVoltage)
                                        @if ($connectionVoltage['id'] === $techCondition['CodNapryazhenia'])
                                            <option selected value="{{ $connectionVoltage['id'] }}">{{ $connectionVoltage['NaprVMestePrisoed'] }}</option>
                                        @else
                                            <option value="{{ $connectionVoltage['id'] }}">{{ $connectionVoltage['NaprVMestePrisoed'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('CodNapryazhenia')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="mainSource">
                    <div class="card">
                      <div class="card-header" id="btnMainSource">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseMainSource" aria-expanded="true" aria-controls="collapseMainSource">
                            {{ __('messages.TechCondition_Main_Source') }}
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseMainSource" class="collapsing" aria-labelledby="btnMainSource" data-parent="#mainSource">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="CodPodstancii" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Substation') }}</label>
                            <div class="col-md-2">
                                <select class="custom-select form-control @error('CodPodstancii') is-invalid @enderror" id="CodPodstancii"  name="CodPodstancii">
                                  <option selected value="0"></option>
                                    @foreach($substations as $substation)
                                        @if ($substation['id'] === $techCondition['CodPodstancii'])
                                            <option selected value="{{ $substation['id'] }}">{{ $substation['NazvaniePodstancii'] }}</option>
                                        @else
                                            <option value="{{ $substation['id'] }}">{{ $substation['NazvaniePodstancii'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('CodPodstancii')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <label for="OsnIstESnabzh" class="col-md-3 col-form-label text-md-right">{{ __('messages.TechCondition_Main_Source') }}</label>
                            <div class="col-md-6">
                                <input id="OsnIstESnabzh" type="text" class="form-control @error('OsnIstESnabzh') is-invalid @enderror" name="OsnIstESnabzh" value="{{ $techCondition['OsnIstESnabzh'] }}" required autocomplete="OsnIstESnabzh" autofocus>
        
                                @error('OsnIstESnabzh')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="TPOsnIstESnabzh" class="col-md-3 col-form-label text-md-right">{{ __('messages.TechCondition_Main_Source_Point') }}</label>
                            <div class="col-md-3">
                                <input id="TPOsnIstESnabzh" type="text" class="form-control @error('TPOsnIstESnabzh') is-invalid @enderror" name="TPOsnIstESnabzh" value="{{ $techCondition['TPOsnIstESnabzh'] }}" required autocomplete="TPOsnIstESnabzh" autofocus>
        
                                @error('TPOsnIstESnabzh')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <label for="OsnIstESnabzh" class="col-md-3 col-form-label text-md-right">{{ __('messages.TechCondition_Point_With_Offers') }}</label>
                            <div class="col-md-3">
                                <input id="OsnIstESnabzh" type="text" class="form-control @error('OsnIstESnabzh') is-invalid @enderror" name="OsnIstESnabzh" value="{{ $techCondition['OsnIstESnabzh'] }}" required autocomplete="OsnIstESnabzh" autofocus>
        
                                @error('OsnIstESnabzh')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="recerveSource">
                    <div class="card">
                      <div class="card-header" id="btnRecerveSource">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseRecerveSource" aria-expanded="true" aria-controls="collapseRecerveSource">
                            {{ __('messages.TechCondition_Recerve_Source') }}
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseRecerveSource" class="collapsing" aria-labelledby="btnRecerveSource" data-parent="#recerveSource">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="CodPodstRez" class="col-md-1 col-form-label text-md-right">{{ __('messages.TechCondition_Substation') }}</label>
                            <div class="col-md-2">
                                <select class="custom-select form-control @error('CodPodstRez') is-invalid @enderror" id="CodPodstRez"  name="CodPodstRez">
                                  <option selected value="0"></option>
                                    @foreach($substations as $substation)
                                        @if ($substation['id'] === $techCondition['CodPodstRez'])
                                            <option selected value="{{ $substation['id'] }}">{{ $substation['NazvaniePodstancii'] }}</option>
                                        @else
                                            <option value="{{ $substation['id'] }}">{{ $substation['NazvaniePodstancii'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('CodPodstRez')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <label for="RezIstESnabzh" class="col-md-3 col-form-label text-md-right">{{ __('messages.TechCondition_Recerve_Source') }}</label>
                            <div class="col-md-6">
                                <input id="RezIstESnabzh" type="text" class="form-control @error('RezIstESnabzh') is-invalid @enderror" name="RezIstESnabzh" value="{{ $techCondition['RezIstESnabzh'] }}" required autocomplete="RezIstESnabzh" autofocus>
        
                                @error('RezIstESnabzh')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="TPRezIstESnabzh" class="col-md-3 col-form-label text-md-right">{{ __('messages.TechCondition_Main_Source_Point') }}</label>
                            <div class="col-md-3">
                                <input id="TPRezIstESnabzh" type="text" class="form-control @error('TPRezIstESnabzh') is-invalid @enderror" name="TPRezIstESnabzh" value="{{ $techCondition['TPRezIstESnabzh'] }}" required autocomplete="TPRezIstESnabzh" autofocus>
        
                                @error('TPRezIstESnabzh')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="obligationsOrganization">
                    <div class="card">
                      <div class="card-header" id="btnRecerveSource">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseObligationsOrganization" aria-expanded="true" aria-controls="collapseObligationsOrganization">
                            {{ __('messages.TechCondition_Obligations_Organization') }}
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseObligationsOrganization" class="collapsing" aria-labelledby="btnObligationsOrganization" data-parent="#obligationsOrganization">
                        <div class="card-body">
                          <label for="TrebPoProekt" class="col-md-3 col-form-label text-md-right">{{ __('messages.TechCondition_Main_Source_Point') }}</label>
                            <div class="col-md-12">
                                <textarea id="TrebPoProekt" class="form-control @error('TrebPoProekt') is-invalid @enderror" name="TrebPoProekt" required autocomplete="TrebPoProekt" autofocus rows="10">{{ $techCondition['TrebPoProekt'] }}</textarea>
        
                                @error('TrebPoProekt')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="obligationsApplicant">
                    <div class="card">
                      <div class="card-header" id="btnObligationsApplicant">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseObligationsApplicant" aria-expanded="true" aria-controls="collapseObligationsApplicant">
                            {{ __('messages.TechCondition_Obligations_Applicant') }}
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseObligationsApplicant" class="collapsing" aria-labelledby="btnObligationsApplicant" data-parent="#obligationsApplicant">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="contract">
                    <div class="card">
                      <div class="card-header" id="btnContract">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseContract" aria-expanded="true" aria-controls="collapseContract">
                            {{ __('messages.TechCondition_Contract') }}
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseContract" class="collapsing" aria-labelledby="btnContract" data-parent="#contract">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life
                        </div>
                      </div>
                    </div>
                </div>

                <div class="accordion" id="additionalDirections">
                    <div class="card">
                      <div class="card-header" id="btnAdditionalDirections">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAdditionalDirections" aria-expanded="true" aria-controls="collapseAdditionalDirections">
                            {{ __('messages.TechCondition_Additional_Directions') }}
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseAdditionalDirections" class="collapsing" aria-labelledby="btnAdditionalDirections" data-parent="#additionalDirections">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life
                        </div>
                      </div>
                    </div>
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
