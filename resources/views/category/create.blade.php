@extends('pages.master')
@section('title')
    Create Category
@endsection
@section('content')
    <h4>Create Category</h4>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Category Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Save Category</button>
    </form>
@endsection
