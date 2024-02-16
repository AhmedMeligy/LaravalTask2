@extends('layout.main')
@section('title', 'Edit User')

@section('content')
<div class="container mt-5">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
@endsection
