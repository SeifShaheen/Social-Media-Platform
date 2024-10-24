<!-- resources/views/games/show.blade.php -->
@extends('layouts.navbar')

@section('title', $game->name)

<div class="container mt-5">
    <h1>{{ $game->name }}</h1>
    <p>{{ $game->description }}</p>
    <a href="{{ route('games.index') }}" class="btn btn-secondary">Back to Games</a>
</div>
