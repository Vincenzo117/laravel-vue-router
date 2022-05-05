@extends('layouts.app')

@section('content')
<a href ="{{ route('admin.posts.index') }}" class="fixed-top p-3">Go back to the index</a> 

<div class="container">
        <h1 class="m-5 text-center">Add a new post</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Title</label> 
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title') ?: ''}}" placeholder="Title">
            </div>
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">-- None --</option>
                    @foreach ($categories as $category)
                        <option {{ old('category_id') && old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">Tags</div>
            <div class="d-flex">
                @foreach($tags as $tag)
                    <div class="form-group pr-3">
                        <input type="checkbox"  class="from-check-input" value="{{ $tag->id }}" name="tags[]">
                        <label for="tags-[{{ $tag->id }}]">{{ $tag->name }}</label>
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="content">Content</label> 
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" placeholder="Content">{{old('content') ?: ''}}</textarea>
            </div>
            @error('content')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="published_at">Publish date</label> 
                <input class="form-control @error('published_at') is-invalid @enderror" type="datetime-local" name="published_at" id="published_at" value="{{old('published_at') ?: ''}}">
            </div>
            @error('published_at')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <button class="ml-3 mt-4 btn btn-primary" type="submit">Create</button>
        </form>
    </div>

@endsection