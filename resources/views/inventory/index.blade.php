@extends('pages.master')
@section('title')
    Item Lists
@endsection
@section('content')
    <h4>Item Lists</h4>

    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a href="{{ route('item.show', $item->id) }}" class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="{{ route('item.edit', $item->id) }}" class="btn btn-outline-info btn-sm">Edit</a>
                        <form method="post" class="d-inline-block" action="{{ route('item.destory', $item->id) }}">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <td colspan="5" class="text-center">
                    There is no record <br>
                    <a href="{{ route('item.create') }}" class="btn btn-sm btn-outline-primary">Create Items</a>
                </td>
            @endforelse ($items as $item)

        </tbody>
    </table>
@endsection
