@extends('layouts.main')
@section('content')
    <div>
        <h1>Posts</h1>
        <div>
            <a href="{{ route('post.create') }}" class="btn btn-primary mb-3">Add one</a>
        </div>
        @foreach($posts as $post)
            <div>
                <a href="{{ route('post.show', $post->id) }}"> {{ $post->title }}</a>
            </div>
        @endforeach
    </div>
@endsection
