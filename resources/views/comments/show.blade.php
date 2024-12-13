@extends('layouts.app')

@section('title','Comment Details')

@section('content')
    <ul>
        <li>Comment: {{ $comment->commenting}}</li>
        <li>Post id: {{$comment->post_id}}</li>
</ul>

    <form method="POST"
        action="{{ route('comments.destroy', ['id' => $comment->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('comments.index') }}">Back</a></p>

@endsection
