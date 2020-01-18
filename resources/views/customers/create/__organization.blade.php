<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('messages.Organization') }}</div>

            <div class="card-body">
                <div class="form-group row">
                    <label for="NaimenOrg" class="col-md-2 col-form-label text-md-right">{{ __('messages.Organization_Name') }}</label>

                    <div class="col-md-10">
                        <input id="NaimenOrg" type="text" class="form-control @error('NaimenOrg') is-invalid @enderror" name="NaimenOrg" value="{{ old('NaimenOrg') }}"
                               autocomplete="NaimenOrg" autofocus>

                        @error('NaimenOrg')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="VLice" class="col-md-2 col-form-label text-md-right">{{ __('messages.Organization_Represented') }}</label>

                    <div class="col-md-3">
                        <input id="VLice" type="text" class="form-control @error('VLice') is-invalid @enderror" name="VLice" value="{{ old('VLice') }}"
                               autocomplete="VLice" autofocus>

                        @error('VLice')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                    <label for="NaOsnovanii" class="col-md-2 col-form-label text-md-right">{{ __('messages.Organization_With_Justification') }}</label>

                    <div class="col-md-5">
                        <input id="NaOsnovanii" type="text" class="form-control @error('NaOsnovanii') is-invalid @enderror" name="NaOsnovanii" value="{{ old('NaOsnovanii') }}"
                               autocomplete="NaOsnovanii" autofocus>

                        @error('NaOsnovanii')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="INN" class="col-md-2 col-form-label text-md-right">{{ __('messages.INN') }}</label>

                    <div class="col-md-2">

                        <input id="INN" type="text" class="form-control @error('INN') is-invalid @enderror" name="INN" value="{{ old('INN') }}"
                               autocomplete="INN" autofocus>

                        @error('INN')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                    <label for="KPP" class="col-md-1 col-form-label text-md-right">{{ __('messages.KPP') }}</label>

                    <div class="col-md-2">

                        <input id="KPP" type="text" class="form-control @error('KPP') is-invalid @enderror" name="KPP" value="{{ old('KPP') }}"
                               autocomplete="KPP" autofocus>

                        @error('KPP')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                    <label for="RS" class="col-md-2 col-form-label text-md-right">{{ __('messages.Payment_Account') }}</label>

                    <div class="col-md-3">

                        <input id="RS" type="text" class="form-control @error('RS') is-invalid @enderror" name="RS" value="{{ old('RS') }}"
                               autocomplete="RS" autofocus>

                        @error('RS')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Bank" class="col-md-2 col-form-label text-md-right">{{ __('messages.Bank') }}</label>

                    <div class="col-md-10">

                        <input id="Bank" type="text" class="form-control @error('Bank') is-invalid @enderror" name="Bank" value="{{ old('Bank') }}"
                               autocomplete="Bank" autofocus>

                        @error('Bank')
                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-md-2">
                        <label for="BIK" class="text-md-right">{{ __('messages.BIK') }}</label>

                        <input id="BIK" type="text" class="form-control @error('BIK') is-invalid @enderror" name="BIK" value="{{ old('BIK') }}"
                               autocomplete="BIK" autofocus>

                        @error('BIK')
                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="KS" class="text-md-right">{{ __('messages.Correspondent_account') }}</label>

                        <input id="KS" type="text" class="form-control @error('KS') is-invalid @enderror" name="KS" value="{{ old('KS') }}"
                               autocomplete="KS" autofocus>

                        @error('KS')
                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="OGRN" class="text-md-right">{{ __('messages.OGRN') }}</label>

                        <input id="OGRN" type="text" class="form-control @error('OGRN') is-invalid @enderror" name="OGRN" value="{{ old('OGRN') }}"
                               autocomplete="OGRN" autofocus>

                        @error('OGRN')
                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="OKPO" class="text-md-right">{{ __('messages.OKPO') }}</label>

                        <input id="OKPO" type="text" class="form-control @error('OKPO') is-invalid @enderror" name="OKPO" value="{{ old('OKPO') }}"
                               autocomplete="OKPO" autofocus>

                        @error('OKPO')
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
