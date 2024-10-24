<!-- resources/views/games/index.blade.php -->
@extends('layouts.navbar')

@section('title', 'games')

<div class="container mt-5">
    <h1>Games</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($games->isEmpty())
        <div class="alert alert-warning">
            No Games Found.
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
</div>
