@extends('layouts.app')

@section('content')
<div class="container pt-4 mt-4">
  <div class="row text-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body px-3 py-3 mx-3 my-3">
                <img src="https://i.ibb.co.com/4g2mRzn5/JAMALPUR-RUNNER-COMMUNITY-LOGO-FINAL.png" width="50%" alt="">
                <h1>Register for Jamalpur 5KM Run</h1>
                <a href="{{ route('register.event') }}" class="btn btn-dark btn-block mt-2">Click here to Register</a>
            </div>
        </div>
    </div>


</div>
@endsection
