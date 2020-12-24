@extends('layout.page')
@section('main_content')
<div class="jumbotron">
    <h3 class="display-3, text-center">You have been sent a confirmation email.</h3>
    <p class="display-4 text-center">Please confirm your email to log in</p> 
</div>    
<div class="row">
    <div class="col-12 col-lg-6 offset-lg-3">
        <form method="POST" action="/email/verification-notification">
            @csrf
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Send Email</button>
            </div>
@endsection