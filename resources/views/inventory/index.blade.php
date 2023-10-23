@extends('pages.master')
@section('title')
    Item Lists
@endsection
@section('content')
    <h4>
        Item Lists
        @if (request()->has('keyword'))
            [Search result by '{{ request()->keyword }}']
        @endif
    </h4>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-between mb-3">
        <div class="col-md-3">
            <a href="{{ route('item.create') }}" class="btn btn-outline-info">Create</a>
        </div>
        <div class="col-md-4">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword"
                        @if (request()->has('keyword')) value='{{ request()->keyword }}' @endif>
                    @if (request()->has('keyword'))
                        <a href="{{ route('item.index') }}" class="btn btn-danger">Delete</a>
                    @endif
                    <button class="btn btn-outline-info">Search</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="alert alert-info">
        {{ route('item.index', ['page' => 2, 'keyword' => 'or']) }}
    </div> --}}
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>
                    Name
                    <a href="{{ route('item.index', ['name' => 'asc']) }}" class="btn btn-outline-info">Asc</a>
                    <a href="{{ route('item.index', ['name' => 'desc']) }}" class="btn btn-outline-info">Desc</a>
                    <a href="{{ route('item.index') }}" class="btn btn-outline-info">Clear</a>
                </td>
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
                        <form method="post" class="d-inline-block" action="{{ route('item.destroy', $item->id) }}">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Are you sure to delete?')">Delete</button>
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
    {{ $items->onEachSide(1)->links() }}
@endsection
