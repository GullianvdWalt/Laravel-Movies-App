@extends('layouts.app')

@section('content')

{{-- Trending Movies --}}
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-gray-800 text-lg font-semibold">Trending Movies</h2>
        {{-- Popular/Trending Movies Main Container --}}
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            {{-- Popular/Trending Movie Single container --}}
                {{-- Dynamic Content From TMDB API --}}
            @foreach ($popularMovies as $movie)
                <x-movie-card :movie="$movie"/>
            @endforeach
        </div>
    </div>
</div>

{{-- Now Playing --}}
<div class="container mx-auto px-4 pt-16 mt-4">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-gray-800 text-lg font-semibold">Now Playing</h2>
        {{-- Now Playing Movies Main Container --}}
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            {{-- Now Playing Movie Single container --}}
                {{-- Dynamic Content From TMDB API --}}
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie"/>
                @endforeach
        </div>
    </div>
</div>

@endsection
