@extends('admin.index')

@section

<div class="card p-4">

    <form action="" method="post">

        <label for="">Name Category</label>
        <input type="text" value="{{ $category->name }}" class="form-control">

    </form>

</div>

@endsection