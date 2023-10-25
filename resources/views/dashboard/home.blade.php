@extends('pages.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <h4>This is Dashboard</h4>
    <div class="alert alert-primary">
        {{ session('auth')->name }}
    </div>
    <form action="{{ route('auth.logout') }}" method="post">
        @csrf
        <button class="btn btn-warning">LogOut</button>
    </form>
@endsection
