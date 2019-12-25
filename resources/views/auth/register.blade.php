@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <input name="fullname" type="hidden" value="null">
                        <input name="state" type="hidden" value="null">
                        <input name="username" type="hidden" value="null">
                        <input name="clientid" type="hidden" value="null">
                        <input name="documenturl" type="hidden" value="null">
                        <input name="termsandcondition" type="hidden" value="null">
                        <input name="clientidmoov" type="hidden" value="null">
                        <input name="merchantnumber" type="hidden" value="null">

                        <div class="form-group row">
                            <label for="companyname" class="col-md-4 col-form-label text-md-right">{{ __('Businness/App name') }}</label>

                            <div class="col-md-6">
                                <input id="companyname" type="text" class="form-control @error('companyname') is-invalid @enderror" name="companyname" value="{{ old('companyname') }}" required autocomplete="companyname" autofocus>

                                @error('companyname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mtnphonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

                            <div class="col-md-6">
                                <input id="mtnphonenumber" type="text" class="form-control @error('mtnphonenumber') is-invalid @enderror" name="mtnphonenumber" value="{{ old('mtnphonenumber') }}" required autocomplete="mtnphonenumber" autofocus>

                                @error('mtnphonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
