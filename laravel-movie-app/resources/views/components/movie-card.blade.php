            <!-- Column -->
        <div class="my-1 px-1 lg:my-6">
            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg h-full">

                <a href="{{ route('movies.show', $movie['id']) }}">
                    <img alt="Placeholder" class="block h-auto w-72 hover:opacity-75 transition ease-in-out duration-150" src="{{ $movie['poster_path']  }}">
                </a>

            <div class="mt-2 p-4 flex flex-col text-center">
                    <a href="" class="text-lg mt-2 hover:text-gray-700">{{ $movie['title'] }}</a>
                    <div class="flex items-center justify-center text-gray-600 my-3">
                        <span id="rating" class="movie-details  text-gray-600">
                            <svg class="fill-current text-yellow-300 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        </span>
                        <span class="ml-1" class="movie-details" id="percentage">{{ $movie['vote_average'] }}</span>
                        <span class="mx-2" class="movie-details">|</span>
                        <span id="releaseDate" class="movie-details">{{ $movie['release_date'] }}</span>
                    </div>
                    <div class="text-gray-600 text-sm movie-details" id="genre">{{ $movie['genres'] }}</div>
                </div>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

    {{-- <div class="mt-8"> --}}
        {{-- Poster --}}
        {{-- <a href="{{ route('movies.show', $movie['id']) }}">
            <img src="{{ $movie['poster_path']  }}" alt="Poster" class="hover:opacity-75 transition ease-in-out duration-150">
        </a> --}}
        {{-- Details --}}
        {{-- <div class="mt-2">
            <a href="" class="text-lg mt-2 hover:text-gray-700">{{ $movie['title'] }}</a>
            <div class="flex items-center text-gray-600 mt-1">
                <span id="rating" class="movie-details  text-gray-600">
                    <svg class="fill-current text-yellow-300 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                </span>
                <span class="ml-1" class="movie-details" id="percentage">{{ $movie['vote_average'] }}</span>
                <span class="mx-2" class="movie-details">|</span>
                <span id="releaseDate" class="movie-details">{{ $movie['release_date'] }}</span>
            </div>
            <div class="text-gray-600 text-sm movie-details" id="genre">{{ $movie['genres'] }}</div>
        </div>
    </div> --}}

