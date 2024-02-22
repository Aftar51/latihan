@extends('admin.parent')

@section('content')

<div class="card p-4">
    <h1>category Index</h1>

    <hr>

    <div class="d-flex justify-context-end">
        <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
        <a href="{{ route('category.show', $row->id) }}" class="btn btn-warning"> </a>
    </div>
</div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ sesion('success') }}
        </div>
    @endif

@endsection