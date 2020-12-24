@extends('layout.page')
@section('main_content')

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group text-center padding-top= 50px>
        <label for="email">Email</label>
        <x-inputs.text type="email" name="email" id="email" placeholder="email" :error="$errors->has('email')" required />
            @error('email')
            <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
    </div>
    <div class="form-group text-center">
        <label for="password">Password</label>
        <x-inputs.text type="password" name="password" placeholder="password" :error="$errors->has('password')" required />
            @error('password')
            <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
    </div>
    <div class="form-group text-center">
        <input type="submit" class="btn btn-success" value="Login">
    </div>
</form>
@endsection