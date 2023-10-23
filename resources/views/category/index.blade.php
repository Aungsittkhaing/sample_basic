@extends('pages.master')
@section('title')
    Category Lists
@endsection
@section('content')
    <h4>Category Lists</h4>

    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ Str::limit($category->description, 20, '...') }}</td>
                    <td>
                        <a href="{{ route('category.show', $category->id) }}"
                            class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-outline-info btn-sm">Edit</a>
                        <form method="post" class="d-inline-block" action="{{ route('category.destroy', $category->id) }}">
                            @method('delete')
                            @csrf
                            <button
                                class="btn btn-sm btn-outline-danger"onclick="return confirm('Are you sure to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <td colspan="4" class="text-center">
                    There is no record <br>
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-outline-primary">Create Category</a>
                </td>
            @endforelse ($items as $item)

        </tbody>
    </table>
@endsection
