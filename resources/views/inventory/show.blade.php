@extends('pages.master')
@section('title')
    Item Details
@endsection
@section('content')
    <h4>Item Details</h4>
    <table class="table">
        <tr>
            <td>Name</td>
            <td>{{ $item->name }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{ $item->price }}</td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>{{ $item->stock }}</td>
        </tr>
        <tr>
            <td>Created_At</td>
            <td>{{ $item->created_at }}</td>
        </tr>
        <tr>
            <td>Updated_At</td>
            <td>{{ $item->updated_at }}</td>
        </tr>
    </table>
@endsection
