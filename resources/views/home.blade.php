@extends('pages.master')
@section('title')
    Home Page
@endsection
@section('content')
    <h4>This is home</h4>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe impedit possimus deleniti. Impedit fugiat, quas at
        harum aliquam architecto cum esse blanditiis aspernatur consequatur corporis asperiores necessitatibus nesciunt.
        Consectetur, dignissimos.
    </p>
    {{-- testing route parameter --}}
    <div class="alert alert-info">
        {{ route('item.show', [10, 'a' => 'aaa', 'b' => 'bbb', 'c' => 'ccc']) }}
        {{-- {{ route('multi', [5, 5, 'a' => 'aa']) }} --}}
    </div>
@endsection
