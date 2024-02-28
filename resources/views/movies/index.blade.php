<x-master>

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular Movies

            </h2>
            {{-- cover-movies-grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ">
                @foreach ($popolarMovies as $movie)
                    {{-- movie --}}
                    <x-movie-card :movie="$movie" :genres="$genres" />
                    {{-- end-movie --}}
                @endforeach
            </div>
            {{-- end-cover-movie-grid --}}
        </div>
    </div>




    {{-- NOW-PLAYING --}}
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies border-t py-3">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now Playing
            </h2>
            {{-- cover-movies-grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 ">
                @foreach ($nowPlaying as $movie)

                    <x-movie-card :movie="$movie"/>

                @endforeach
            </div>
            {{-- end-cover-movie-grid --}}
        </div>
    </div>




</x-master>
