@extends('pages.master')
@section('title')
    Password Change
@endsection
@section('content')
    <h4>Change Password</h4>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <hr>
    <form action="{{ route('auth.passwordChanging') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Current Password</label>
            <input type="password"
                class="form-control @error('current_password')
                is-invalid
            @enderror"
                name="current_password" value="{{ old('current_password') }}">
            @error('current_password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">New Password</label>
            <input type="password" class="form-control @error('password')
                is-invalid
            @enderror"
                name="password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input type="password"
                class="form-control @error('password_confirmation')
                is-invalid
            @enderror"
                name="password_confirmation">
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-warning">Change Now</button>
    </form>
@endsection
