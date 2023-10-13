@extends('pages.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <h4>Edit Category</h4>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">category Title</label>
            <input type="text" class="form-control" name="title" value="{{ $category->title }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea name="description" class="form-control">
                {{ $category->description }}
            </textarea>

        </div>

        <button class="btn btn-primary">Update Category</button>
    </form>
@endsection
