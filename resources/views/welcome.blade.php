@extends('layouts.app')

@section('content')
<div class="container pt-4 mt-4">
  <div class="row text-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-bidy px-3 py-3 mx-3 my-3">
                <h1>Register</h1>
                <a href="{{ route('register.event') }}" class="btn btn-dark btn-block mt-2">Click here to Register</a>
            </div>
        </div>
    </div>


</div>
@endsection
