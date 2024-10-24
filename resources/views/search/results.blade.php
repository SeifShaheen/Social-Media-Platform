<!-- resources/views/search/results.blade.php -->
@extends('layouts.navbar')

@section('title', 'Search Results')

<div class="container mt-5">
    <h1>Search Results</h1>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (isset($message))
        <div class="alert alert-warning">
            {{ $message }}
        </div>
    @else
        <h2>User: {{ $user->name }}</h2>
        <h3>Posts</h3>
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
        <h3>Games</h3>
        @if ($games->isEmpty())
            <div class="alert alert-warning">
                No games found.
            </div>
        @else
            <ul>
                @foreach ($games as $game)
                    <li>
                        <a href="{{ route('games.show', $game->id) }}">{{ $game->name }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    @endif
</div>
