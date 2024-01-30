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
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['backdrop_path'] }}"
                                alt="film"class="hover:opacity-75 transaction ease-in-out duration-150">
                        </a>
                        <div class="mt-2">

                            {{-- discription-movie --}}
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title'] }}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span> <svg class="fill-current text-orange-500" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/2000/xlink"
                                        width="21px" height="20px">
                                        <path d="M0,0.054V20h21V0.054H0z M15.422,18.129l-5.264-2.768l-5.265,2.768l1.006-5.863L1.64,8.114l5.887-0.855
                                 l2.632-5.334l2.633,5.334l5.885,0.855l-4.258,4.152L15.422,18.129z" />
                                    </svg></span>
                                <span class="ml-1">{{ $movie['vote_average']*10 .'%'}}</span>
                                <span class="mx-2">|</span>
                                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('m d,y') }}</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                             @foreach ( $movie['genre_ids'] as $genre )
                                  {{ $genres->get($genre) }}    @if(!$loop->last),@endif

                             @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- end-movie --}}
                @endforeach



            </div>
            {{-- end-cover-movie-grid --}}
        </div>

    </div>

</x-master>
