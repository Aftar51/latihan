@extends('admin.parent')

@section('content')

<div class="container d-flex justify-content-end">
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Create admin</a>
</div>

<div class="container text-center">
    <h5 class="fw-bold">USERS</h5>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <tr>
            <th>1</th>
            <th>Aftar</th>
            <th>a**********@gmail.com</th>
            <th>Male</th>
        </tr>
    </table>
</div>

@endsection