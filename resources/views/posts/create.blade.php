@extends('layout.main')
@section('title','create post')


@section('content')
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Post Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Post Title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Post Body</label>
            <input type="text" name="body" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Post Description" value="{{ old('body') }}">
        </div>

        <div class="col-sm-3">
        <label class="">Choose User</label>
        <select class="form-select" id="specificSizeSelect" name="user_id">
            @foreach ($users as $user)
            <option value="{{ $user['id'] }}">{{$user['name']}}</option>
            @endforeach
        </select>
    </div>

        <button type="submit" class="btn btn-primary mt-4">Create</button>
</form>
@endsection