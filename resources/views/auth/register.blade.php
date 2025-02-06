@extends('layouts.app')

@section('content')
<div class="container pt-4 mt-4">
  <div class="row text-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-bidy px-3 py-3 mx-3 my-3">
                <h1>For Current Students of Jahangir Nagar University.</h1>
                <a href="{{ route('register.ju') }}" class="btn btn-dark btn-block mt-2">Click here to Register</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-bidy px-3 py-3 mx-3 my-3">
                <h1>For others.</h1>
                <br>
                <br>
                <a href="{{ route('register.other') }}" class="btn btn-dark btn-block mt-2">Click here to Register</a>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
