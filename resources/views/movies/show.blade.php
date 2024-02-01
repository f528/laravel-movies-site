<x-master>


    <div class="movie-info border-b border-gray-800  ">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row ">

            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $showMovies['backdrop_path'] }}" alt="the rings of power"
                class="w-96 ">
            <div class="ml-4 mt-8">
                <h2 class="text-4xl font-semibold"> {{ $showMovies['original_title'] }}</h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span> <svg class="fill-current text-orange-500" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/2000/xlink" width="21px" height="20px">
                            <path d="M0,0.054V20h21V0.054H0z M15.422,18.129l-5.264-2.768l-5.265,2.768l1.006-5.863L1.64,8.114l5.887-0.855
                                 l2.632-5.334l2.633,5.334l5.885,0.855l-4.258,4.152L15.422,18.129z" />
                        </svg></span>
                    <span class="ml-1">{{ $showMovies['vote_average'] * 10 . '%' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($showMovies['release_date'])->format('m.d.y') }}</span>
                </div>
                <div class="text-gray-400 text-sm">
                    @foreach ($showMovies['genres'] as $genre)
                        {{ $genre['name'] }} @if (!$loop->last)
                            ,
                        @endif
                    @endforeach
                </div>
                <p class="mt-8 text-gray-300  text-wrap">{{ $showMovies['overview'] }}</p>
                <div class="mt-12 ">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach ($showMovies['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    @if (count($showMovies['videos']['results'][0]))
                        <div class="mt-12">
                            <button>
                                <a href="https://www.youtube.com/watch?v={{ $showMovies['videos']['results'][0]['key'] }}"
                                    class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-10 py-4 hover:bg-orange-600 trasition ease-in-out duration-150">
                                    <svg id="Layer_1" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m45.203 30.664-23.05-11.771c-.465-.237-1.021-.216-1.465.057-.445.272-.717.757-.717 1.279v23.541c0 .522.271 1.007.717 1.279.24.146.511.221.783.221.233 0 .467-.055.682-.164l23.05-11.771c.502-.256.817-.772.817-1.336s-.315-1.079-.817-1.335zm-22.232 10.656v-18.64l18.252 9.32z" />
                                        <path
                                            d="m55.438 8.472h-46.877c-4.656 0-8.444 3.789-8.444 8.445v30.166c0 4.657 3.788 8.445 8.444 8.445h46.878c4.657 0 8.445-3.788 8.445-8.445v-30.166c0-4.657-3.788-8.445-8.446-8.445zm5.446 38.611c0 3.003-2.442 5.445-5.445 5.445h-46.878c-3.002 0-5.444-2.442-5.444-5.445v-30.166c0-3.002 2.442-5.445 5.444-5.445h46.878c3.003 0 5.445 2.443 5.445 5.445z" />
                                    </svg>
                                    <span class="ml-5">Play Trailer</span>
                                </a>
                            </button>
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>


    {{-- Image-Actors-section --}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ">
                @foreach ($showMovies['credits']['cast'] as $poster)
                    @if ($loop->index < 5)
                        {{-- movie --}}
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300' . $poster['profile_path'] }}"
                                    alt="film"class="hover:opacity-75 transaction ease-in-out duration-150">
                            </a>
                            <div class="mt-2">

                                {{-- discription-movie --}}
                                <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $poster['name'] }}</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span> </span>

                                </div>
                                <div class="text-gray-400 text-sm">
                                    {{ $poster['character'] }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                {{-- end-movie --}}


                {{-- movie --}}

            </div>

        </div>












        {{-- Screenshot-movie --}}
        <div class="movie-cast border-t border-gray-800">
            <div class="container mx-auto px-16 py-16">
                <h2 class="text-4xl font-semibold">Images
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8 ">

                    @foreach ($showMovies['images']['backdrops'] as $image )
                        @if ($loop->index < 9)
                         <div class="mt-8">
                        <a href="">
                            <img src="{{ 'https://image.tmdb.org/t/p/w300' . $image['file_path'] }}" alt="">
                        </a>
                    </div>

                        @endif
                    @endforeach


                </div>
            </div>
</x-master>
