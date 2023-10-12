@extends('pages.master')
@section('title')
    Create Items
@endsection
@section('content')
    <h4>Create Items</h4>
    <form action="{{ route('item.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Item Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Item Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock">
        </div>
        <button class="btn btn-primary">Save Item</button>
    </form>
@endsection
