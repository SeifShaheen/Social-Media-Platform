<!-- resources/views/posts/index.blade.php -->
@extends('layouts.navbar')

@section('title', 'Posts')

<div class="container mt-5">
    <h1>Posts</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($posts->isEmpty())
        <div class="alert alert-warning">
            No posts found.
        </div>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
