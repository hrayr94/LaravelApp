@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update') }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image">
            </div>
            <div class="form-group">
                <label for="likes">Likes</label>
                <input type="integer" name="likes" class="form-control" id="likes" placeholder="Likes">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>



    </div>
@endsection
