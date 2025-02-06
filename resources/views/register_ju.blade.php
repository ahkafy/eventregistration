@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="pb-4 text-center"> This form is for Students of Jahangirnagar University Only. For others <a href="{{ route('register.other') }}">please click here to register.</a> </h3>

    <div class="row justify-content-center">
        <div class="col-md-6 pb-4">
            <img src="{{ url('side.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registration for Students of Jahangirnagar University') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select id="gender" type="text" class="form-select form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="university" value="Jahangir Nagar University">
                        <input type="hidden" name="education_year" value="-">

                        <div class="row mb-3">
                            <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department">

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="registration_number" class="col-md-4 col-form-label text-md-end">{{ __('Registration Number') }}</label>

                            <div class="col-md-6">
                                <input id="registration_number" type="text" class="form-control @error('registration_number') is-invalid @enderror" name="registration_number" value="{{ old('registration_number') }}" required autocomplete="registration_number">

                                @error('registration_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="batch" class="col-md-4 col-form-label text-md-end">{{ __('Batch') }}</label>

                            <div class="col-md-6">
                                <input id="batch" type="text" class="form-control @error('batch') is-invalid @enderror" name="batch" value="{{ old('batch') }}" required autocomplete="batch">

                                @error('batch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="hall" class="col-md-4 col-form-label text-md-end">{{ __('Hall') }}</label>

                            <div class="col-md-6">
                                <input id="hall" type="text" class="form-control @error('hall') is-invalid @enderror" name="hall" value="{{ old('hall') }}" required autocomplete="hall">

                                @error('hall')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <hr>
                            <h3 class="text-center">You need to pay 100 taka to complete the registration process and get access pass.</h3>
                        <hr>
                        <div class="row mb-0">
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
