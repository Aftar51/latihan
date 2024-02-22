@extends('admin.index')

@section

<div class="card p-4">
    @csrf
    @method('PUT')

    <form action="" method="post">

        {{-- METHOD POST = CREATE --}}
        {{-- METHOD DELETE = DELETE --}}
        {{-- METHOD PUT = UPDATE --}}
        {{-- METHOD PATCH = UPDATE --}}

        <label for="">Name Category</label>
        <input type="text" value="{{ $category->name }}" class="form-control">

        <button type="submit" class="btn btn-warning">Update</button>

    </form>

</div>

@endsection