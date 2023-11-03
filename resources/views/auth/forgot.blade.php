@extends('pages.master')
@section('title')
    Forgot Password
@endsection
@section('content')
    <h4>Forgot Password</h4>
    <hr>
    <form action="{{ route('auth.checkEmail') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Enter your Email</label>
            <input type="email" class="form-control @error('email')
                is-invalid
            @enderror"
                name="email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-warning">Reset</button>
    </form>
@endsection
