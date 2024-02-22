@extends('admin.parent')

@section('content')

<div class="card p-4">
    <h1>category Index</h1>

    <hr>

    <div class="d-flex justify-context-end">
        <a href="{{ route('buah.create') }}" class="btn btn-success">Create Category</a>
    </div>

    

</div>

@endsection