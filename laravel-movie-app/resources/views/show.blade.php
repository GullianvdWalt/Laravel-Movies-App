@extends('layouts.app')

@section('content')

    <div class="movie-info border-b border-teal-400">   <!-- Movie-Info-Start -->
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                <div class="flex-none">
                        <img src="/images/parasite.jpg" alt="Parasite" class="w-64 lg:w-96">
                </div>
                <div class="md:ml-24">
                    <h2 class="text-4xl md:mt-0 font-semibold">
                        Parasite (2019)
                    </h2>
                    {{-- Details --}}
                    <div class="flex flex-wrap items-center text-gray-600 text-sm">
                        <span>Star</span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>release date</span>
                        <span class="mx-2">|</span>
                        <span>Action, Thriller, Comedy, Sci-Fi</span>
                    </div>

                        <p class="text-gray-600 mt-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error libero veritatis excepturi
                            impedit dicta voluptatem suscipit porro amet facilis.
                            Alias perspiciatis ab minus iure magnam autem provident facere nesciunt voluptatem consequatur,
                            unde assumenda earum deleniti fugit qui? Minima, vitae delectus.
                            Quaerat aliquid porro quibusdam, possimus qui dolorum maxime exercitationem quia!
                        </p>
                        <div class="mt-12">
                            <h4 class="text-teal-400">Featured Cast</h4>
                            <div class="flex mt-4">
                                <div>
                                    <div>Bong Joon-ho</div>
                                    <div class="text-sm text-gray-600">
                                        Screenplay, Director, Story
                                    </div>
                                </div>
                                <div class="ml-8">
                                    <div>Han Jin-won</div>
                                    <div class="text-sm text-gray-600">Screenplay</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12">
                            <button class="flex items-center bg-teal-400 text-white rounded font-semibold px-5 py-4 hover:bg-teal-600 transition ease-in-out duration-150">
                                <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                </div>
        </div>
    </div> <!-- Movie-Info-Ends -->

    <div class="movie-cast border-b border-teal-400"><!-- cast-start -->
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 pl-1 pr-3">

            <div class="mt-8">
                {{-- Image --}}
                <a href="#">
                    <img src="/images/actor1.jpg" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                {{-- Details --}}
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">
                        Character
                    </div>
                </div>
            </div>

            <div class="mt-8">
                {{-- Image --}}
                <a href="#">
                    <img src="/images/actor1.jpg" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                {{-- Details --}}
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-teal-600">Real Name</a>
                    <div class="text-sm text-gray-400">
                        Character
                    </div>
                </div>
            </div>

            <div class="mt-8">
                {{-- Image --}}
                <a href="#">
                    <img src="/images/actor1.jpg" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                {{-- Details --}}
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-700">Real Name</a>
                    <div class="text-sm text-gray-400">
                        Character
                    </div>
                </div>
            </div>

            <div class="mt-8">
                {{-- Image --}}
                <a href="#">
                    <img src="/images/actor1.jpg" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                {{-- Details --}}
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-700">Real Name</a>
                    <div class="text-sm text-gray-400">
                        Character
                    </div>
                </div>
            </div>

            <div class="mt-8">
                {{-- Image --}}
                <a href="#">
                    <img src="/images/actor1.jpg" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                {{-- Details --}}
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-700">Real Name</a>
                    <div class="text-sm text-gray-400">
                        Character
                    </div>
                </div>
            </div>

            <div class="mt-8">
                {{-- Image --}}
                <a href="#">
                    <img src="/images/actor1.jpg" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                {{-- Details --}}
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-700">Real Name</a>
                    <div class="text-sm text-gray-400">
                        Character
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> <!-- cast-ends -->

    <div class="movie-images"> <!-- images-start -->
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold px-4 py-16">Images</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="mt-8">
                    <a href="#">
                            <img src="/images/image1.jpg" alt="movie-image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/images/image1.jpg" alt="movie-image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/images/image1.jpg" alt="movie-image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/images/image1.jpg" alt="movie-image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/images/image1.jpg" alt="movie-image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/images/image1.jpg" alt="movie-image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>

        </div>
    </div> <!-- images-end -->
@endsection
