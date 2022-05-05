@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('admin.posts.create')}}">
        <button type="submit" class="btn btn-primary mb-2">Add new post</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                <th scope="col">Published at</th>
                <th scope="col">Created at</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->category ? $post->category->name : '' }}</td>
                <td>
                    @foreach($post->tags as $tag)
                        <div class="text-white badge badge-pill badge-primary">{{ $tag->name }}</div>
                    @endforeach
                </td>
                <td>{{ $post->published_at }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <form action="{{route('admin.posts.edit', $post)}}">
                        <button type="submit" class="btn btn-primary mb-2">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mb-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection