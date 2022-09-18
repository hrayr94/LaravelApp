@extends('layouts.main')
@section('content')
    <div>
        <div>
            <div>{{$post->id}}. {{ $post->title }}</div>
            <div>{{ $post->content }}</div>
        </div>
        <div>
            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary mb-3">Edit</a>
        </div>
            <a href="{{ route('post.index') }}" class="btn btn-primary mb-3">Back</a>
        </div>
        <div>
            <form action="{{ route('post.destroy', $post->id) }} " method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
