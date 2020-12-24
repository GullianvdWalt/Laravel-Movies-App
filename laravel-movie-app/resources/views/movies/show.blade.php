@extends('layouts.app')

@section('content')

    <div class="movie-info border-b border-teal-400">   <!-- Movie-Info-Start -->
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                <div class="flex-none">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']  }}" alt="Poster" class="w-64 lg:w-96">
                </div>
                <div class="md:ml-24">
                    <h2 class="text-4xl md:mt-0 font-semibold">
                        {{ $movie['title'] }}
                    </h2>
                    {{-- Details --}}
                    <div class="flex flex-wrap items-center text-gray-600 text-sm">
                        <span id="rating" class="movie-details  text-gray-600">
                            <svg class="fill-current text-yellow-300 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        </span>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
                        <span class="mx-2">|</span>
                        <span>{{\Carbon\Carbon::parse( $movie['release_date'])->format('d M, Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach ($movie['genres'] as $genre)
                                {{ $genre['name']}}@if(!$loop->last),@endif
                            @endforeach
                        </span>
                    </div>
                        <p class="text-gray-600 mt-8">
                            {{ $movie['overview'] }}
                        </p>
                        <div class="mt-12">
                            <h4 class="text-teal-400">Featured Cast</h4>
                            <div class="flex mt-4 text-gray-600">
                                @foreach ($movie['credits']['cast'] as $cast)
                                    @if($loop->index < 3)
                                        <div class="mr-8">
                                            <div>{{ $cast['name'] }}</div>
                                         </div>
                                    @endif
                                @endforeach
                            </div>
                        <div class="mt-12">
                            <h4 class="text-teal-400">Crew</h4>
                            <div class="flex mt-4 text-gray-600">
                                @foreach ($movie['credits']['crew'] as $crew)
                                    @if($loop->index < 4)
                                        <div class="mr-8">
                                            <div>{{ $crew['name'] }}</div>
                                            <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                         </div><br>
                                        <div class="mr-8">

                                         </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        {{-- Check if there is a video --}}
                        @if (count($movie['videos']['results']) > 0)
                            <div class="mt-12">
                                <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="inline-flex items-center bg-teal-400 text-white rounded font-semibold px-5 py-4 hover:bg-teal-600 transition ease-in-out duration-150">
                                    <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                    <span class="ml-2">Play Trailer</span>
                                </a>
                            </div>
                        @endif
                </div>
        </div>
    </div>
    <!-- Movie-Info-Ends -->

    <!-- cast-start -->
    <div class="movie-cast border-b border-teal-400">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 pl-1 pr-3">
             <!-- Dynamic Content from IMDB APi -->
            @foreach ($movie['credits']['cast'] as $cast)
                @if($loop->index < 6)
                <div class="mt-8">
                    {{-- Image --}}
                    <a href="#">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']  }}" alt="actor-photo" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    {{-- Details --}}
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                        <div class="text-sm text-gray-400">
                            {{ $cast['character'] }}
                        </div>
                    </div>
                </div>
                @endif
             @endforeach
        </div>
        </div>
    </div>
    <!-- cast-ends -->

    <!-- images-start -->
    <div class="movie-images">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold px-4 py-16">Images</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="mt-8">
                            <a href="#">
                               <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path']  }}" alt="movie-image" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>
    </div>
    <!-- images-end -->
@endsection
