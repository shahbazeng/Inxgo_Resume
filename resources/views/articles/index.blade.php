<!-- resources/views/articles/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Article List</h2>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Create New Article</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No articles found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
