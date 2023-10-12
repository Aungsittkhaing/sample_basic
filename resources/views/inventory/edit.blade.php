@extends('pages.master')
@section('title')
    Edit Items
@endsection
@section('content')
    <h4>Edit Items</h4>
    <form action="{{ route('item.update', $item->id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Item Name</label>
            <input type="text" class="form-control" name="name" value="{{ $item->name }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Item Price</label>
            <input type="number" class="form-control" name="price" value="{{ $item->price }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock" value="{{ $item->stock }}">
        </div>
        <button class="btn btn-primary">Update Item</button>
    </form>
@endsection
