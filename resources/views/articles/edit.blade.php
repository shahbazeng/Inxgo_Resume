{{-- resources/views/articles/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Article</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $article->title }}" required>

        <label for="content">Content:</label>
        <textarea name="content" rows="5" required>{{ $article->content }}</textarea>

        <button type="submit" class="btn btn-primary">Update Article</button>
    </form>
@endsection
