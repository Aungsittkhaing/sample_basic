@extends('pages.master')
@section('title')
    Verify Page
@endsection
@section('content')
    <h4>Verify Code</h4>
    <hr>
    <form action="{{ route('auth.verifying') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Verify your Account</label>
            <input type="text" class="form-control @error('verify_code')
                is-invalid
            @enderror"
                name="verify_code">
            @error('verify_code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-warning">Account Verify</button>
    </form>
@endsection
