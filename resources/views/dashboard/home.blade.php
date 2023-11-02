@extends('pages.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <h4>This is Dashboard</h4>
    <div class="alert alert-primary">
        {{ session('auth')->name }}
    </div>
@endsection
