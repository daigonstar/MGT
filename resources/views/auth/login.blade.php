@extends('layout.page')
@section('main_content')

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group text-center">
        <label for="email">Email</label>
        <input type="text" class="form-control name="email" id="email" placeholder="email" required>
    </div>
    <div class="form-group text-center">
        <label for="password">Password</label>
        <input type="password" class="form-control name="password" placeholder="password" required>
    </div>
</form>
@endsection