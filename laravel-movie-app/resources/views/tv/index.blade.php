@extends('layouts.app')

@section('title', 'TV Shows')

@section('content')


<div class="container mx-auto px-4 pt-16">
    <div class="popular-tv">
        <h2 class="uppercase tracking-wider text-gray-800 text-lg font-semibold">Popular Shows</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($popularTv as $tvshow)
                <x-tv-card :tvshow="$tvshow"/>
            @endforeach
        </div>
    </div>
</div>

<div class="container mx-auto px-4 pt-16 my-4">
    <div class="popular-tv">
        <h2 class="uppercase tracking-wider text-gray-800 text-lg font-semibold">Top Rated Shows</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($topRatedTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow"/>
                @endforeach
        </div>
    </div>
</div>

@endsection
