@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="pb-4 text-center"> If you are a Current Students of Jahangirnagar University <a href="{{ route('register.ju') }}">please click here to register.</a> </h3>

    <div class="row justify-content-center">
        <div class="col-md-6 pb-4">
            <img src="{{ url('side.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registration for JU Alumni') }}</div>

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


                        <div class="row mb-3">
                            <label for="university" class="col-md-4 col-form-label text-md-end">{{ __('University') }}</label>

                            <div class="col-md-6">
                                <input id="university" type="text" class="form-control @error('university') is-invalid @enderror" name="university" value="{{ old('university') ?? 'Jahangirnagar University Alumni' }}" readonly required autocomplete="university">

                                @error('university')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
                            <label for="batch" class="col-md-4 col-form-label text-md-end">{{ __('Batch') }}</label>

                            <div class="col-md-6">
                                <select id="batch" type="text" class="form-select form-control @error('batch') is-invalid @enderror" name="batch" value="{{ old('batch') }}" required autocomplete="batch">
                                    <option value="">Please Select</option>
                                    @for ($x=1;$x<46;$x++)
                                    <option value="{{ $x }}">{{ $x }}</option>
                                    @endfor
                                </select>
                                @error('batch')
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

                            <h3 class="text-center">You may need to pay any amount of your choice to complete the registration process and get access pass.</h3>
                        <hr>

                        <input type="hidden" name="education_year" value="-">
                        <input type="hidden" name="hall" value="-">

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
