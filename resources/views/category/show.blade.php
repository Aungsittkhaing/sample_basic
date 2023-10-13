@extends('pages.master')
@section('title')
    Category Details
@endsection
@section('content')
    <h4>Category Details</h4>
    <table class="table">
        <tr>
            <td>Name</td>
            <td>{{ $category->name }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{ $category->description }}</td>
        </tr>
        <tr>
            <td>Updated_At</td>
            <td>{{ $category->updated_at }}</td>
        </tr>
    </table>
@endsection
