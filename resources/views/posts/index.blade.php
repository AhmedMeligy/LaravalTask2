@extends('layout.main')
@section('title','List posts')

@section('content')
<table class="table">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Publisher</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row"><a href="{{ route('posts.show', ['post'=>$post['id']], false) }}">{{ $post['title'] }}</a></th>
            <td>{{ $post['slug'] }}</td>
            <td>{{ $post->user->name }}</td>
            <td>
                <a href="{{ route('posts.edit', ['post'=>$post['id']], false) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('posts.destroy', ['post'=>$post['id']], false) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
</table>
            <div class="d-flex">
                {!! $posts->links() !!}
            </div>


@endsection