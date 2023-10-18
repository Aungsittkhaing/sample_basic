@extends('pages.master')
@section('title')
    Create Items
@endsection
@section('content')
    <h4>Create Items</h4>
    {{-- @if ($errors->all())
        <ul class="text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif --}}
    <form action="{{ route('item.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Item Name</label>
            <input type="text" class="form-control @error('name')
                is-invalid
            @enderror"
                name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Item Price</label>
            <input type="number" class="form-control @error('price')
                is-invalid
            @enderror"
                name="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stock</label>
            <input type="number" class="form-control @error('stock')
                is-invalid
            @enderror"
                name="stock" value="{{ old('stock') }}">
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Save Item</button>
    </form>
@endsection
