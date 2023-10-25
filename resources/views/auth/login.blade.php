@extends('pages.master')
@section('title')
    Login Page
@endsection
@section('content')
    <h4>Student Login</h4>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <hr>
    <form action="{{ route('auth.check') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control @error('email')
                is-invalid
            @enderror"
                name="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control @error('password')
                is-invalid
            @enderror"
                name="password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
@endsection
