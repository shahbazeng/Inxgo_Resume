<!-- resources/views/articles/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Article</h2>
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Article</button>
        </form>
    </div>
@endsection
