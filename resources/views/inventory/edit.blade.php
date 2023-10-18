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
            <input type="text"
                class="form-control
            @error('name')
                is-invalid
            @enderror"
                name="name" value="{{ old('name', $item->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Item Price</label>
            <input type="number" class="form-control @error('price')
                is-invalid
            @enderror"
                name="price" value="{{ old('price', $item->price) }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stock</label>
            <input type="number" class="form-control @error('stock')
                is-invalid
            @enderror"
                name="stock" value="{{ old('stock', $item->stock) }}">
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Update Item</button>
    </form>
@endsection
