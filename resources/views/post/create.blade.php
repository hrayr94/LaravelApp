@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="title">Title</label>
                <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="content">Content</label>
                <textarea  class="form-control" name="content" id="content" placeholder="Content">{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="image">Image</label>
                <input value="{{ old('image') }}" type="text" name="image" class="form-control" id="image" placeholder="Image">
            </div>
            <div class="form-group">
                <label for="likes">Likes</label>
                <input type="integer" name="likes" class="form-control" id="likes" placeholder="Likes">
            </div>
            <div class="form-group">
                <label for="category" >Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="tags" >Tags</label>
                <select multiple class="form-select" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>



    </div>
@endsection
