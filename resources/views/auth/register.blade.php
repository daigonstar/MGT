@extends('layout.page')
@section('main_content')
<h1 class="display-4 text-center mb-4">Register</h1>

@foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach

<!--Form for the users username and password-->
<div class="row">
    <div class="col-12 col-lg-6 offset-lg-3">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group text-center">
                <label for="name">Enter Your Username</label>
                <x-inputs.text type="text" name="name" placeholder="Enter your Username" :error="$errors->has('name')" required />
                    @error('name')
                    <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
            </div>
            <div class="form-group text-center">
                <label for="email">Enter Email</label>
                <x-inputs.text type="email" name="email" placeholder="Enter your Email" :error="$errors->has('email')" required />
                    @error('email')
                    <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
            </div>
            <div class="form-group text-center">
                <label for="password">Choose Password</label>
                <x-inputs.text type="password" name="password" placeholder="Choose a Password" :error="$errors->has('password')" required />
                    @error('password')
                    <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
            </div>
            <div class="form-group text-center">
                <label for="password_confirmation">Confirm Password</label>
                <x-inputs.text type="password" name="password_confirmation" placeholder="Confirm Your Password" :error="$errors->has('password_confirmation')" required />
                    @error('password_confirmation')
                    <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
            </div>
            <div class="form-group text-center">
                <input type="submit" class="btn btn-success" value="Register">
            </div>
        </form>
    </div>
</div>
@endsection
