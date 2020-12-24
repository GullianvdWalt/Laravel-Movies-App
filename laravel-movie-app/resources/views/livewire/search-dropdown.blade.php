    <div class="relative mt-3 md:mt-0">
        <!-- Search Input -->
        <input type="text" name="search" id="search"
               class="bg-none rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline-teal text-sm border-2 border-teal-400 " placeholder="Search"
               wire:model.debounce.500ms="search" >
        <!-- Search Icon -->
        <div class="absolute top-0">
            <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
                <path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/>
            </svg>
        </div>


        <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>

        @if (strlen($search) >= 2)
            <!-- Dropdown -->
            <div class="absolute bg-gray-100 rounded w-64 mt-3 text-sm">
                 @if ($searchResults->count() > 0)
                    <ul>
                        @foreach ($searchResults as $result)
                            <li class="border-b border-teal-400">
                                <a href="{{ route('movies.show', $result['id']) }}" class="hover:bg-gray-400 hover:text-cool-gray-50 px-3 py-7 flex items-center">
                                    <!-- Check if the is a poster -->
                                    @if ($result['poster_path'])
                                        <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-16">
                                    @else
                                        <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                                    @endif
                                    <span class="ml-4">{{ $result['title'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="px-3 py-3">No Results for "{{ $search }}"</div>
                @endif
            </div>
        @endif
    </div>