<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('messages.Passport') }}</div>

            <div class="card-body">
                <div class="form-group row">
                    <label for="Seria" class="col-md-2 col-form-label text-md-right">{{ __('messages.Passport_Series') }}</label>

                    <div class="col-md-2">
                        <input id="Seria" type="text" class="form-control @error('Seria') is-invalid @enderror" name="Seria" value="{{ $customer->Seria }}"
                               maxlength="4" autocomplete="Seria" autofocus>

                        @error('Seria')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                    <label for="Nomer" class="col-md-2 col-form-label text-md-right">{{ __('messages.Passport_Number') }}</label>

                    <div class="col-md-2">
                        <input id="Nomer" type="text" class="form-control @error('Nomer') is-invalid @enderror" name="Nomer" value="{{ $customer->Nomer }}"
                               maxlength="6" autocomplete="Nomer" autofocus>

                        @error('Nomer')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                    <label for="Data" class="col-md-2 col-form-label text-md-right">{{ __('messages.Passport_Data_Issued') }}</label>

                    <div class="col-md-2">
                        <input id="Data" type="text" class="form-control @error('Data') is-invalid @enderror" name="Data" value="{{ $customer->Data }}"
                               autocomplete="Data" autofocus>

                        @error('Data')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="KemVidan" class="col-md-2 col-form-label text-md-right">{{ __('messages.Passport_Issued') }}</label>

                    <div class="col-md-10">
                        <input id="KemVidan" type="text" class="form-control @error('KemVidan') is-invalid @enderror" name="KemVidan" value="{{ $customer->KemVidan }}"
                               autocomplete="KemVidan" autofocus>

                        @error('KemVidan')
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
