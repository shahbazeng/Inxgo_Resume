{{-- resources/views/articles/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>

    <p>{{ $article->content }}</p>

    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('articles.destroy', $article->id) }}"
