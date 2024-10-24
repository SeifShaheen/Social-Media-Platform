<!-- resources/views/posts/show.blade.php -->
@extends('layouts.navbar')

@section('title', $post->title)

<div class="container mt-5">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
</div>
