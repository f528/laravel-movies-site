<x-master>


    <div class="movie-info border-b border-gray-800  ">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row ">

            <img src="" alt="the rings of power"
                class="object-cover h-100 w-96 ">
            <div class="ml-4 mt-8">
                <h2 class="text-4xl font-semibold">Will Smith}</h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span> <svg class="fill-current text-orange-500" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/2000/xlink" width="21px" height="20px">
                            <path d="M0,0.054V20h21V0.054H0z M15.422,18.129l-5.264-2.768l-5.265,2.768l1.006-5.863L1.64,8.114l5.887-0.855
                                 l2.632-5.334l2.633,5.334l5.885,0.855l-4.258,4.152L15.422,18.129z" />
                        </svg></span>
                    <span class="ml-1">Stuff</span>
                    <span class="mx-2">|</span>
                    <span>More Stuff</span>
                </div>
                <div class="text-gray-400 text-sm">
                    {{-- @foreach ($movie['genres'] as $genre)
                        {{ $genre['name'] }} @if (!$loop->last)
                            ,
                        @endif
                    @endforeach --}}

                </div>
                <p class="mt-8 text-gray-300  text-wrap">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo modi mollitia blanditiis commodi, porro soluta ab corporis dignissimos, incidunt dolore magni ea inventore corrupti totam voluptate, at quis nam.
                </p>






               {{-- --------------------------------------- --}}
                {{-- <div class="mt-12 ">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['crew'] as $crew)

                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>

                    @endforeach
                </div>
                <div x-data="{ isOpen: false }">
                    @if (count($movie['videos']['results'][0]))
                        <div class="mt-12">
                            <button @click = "isOpen = true"
                                href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                                class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-10 py-4 hover:bg-orange-600 trasition ease-in-out duration-150">
                                <svg id="Layer_1" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m45.203 30.664-23.05-11.771c-.465-.237-1.021-.216-1.465.057-.445.272-.717.757-.717 1.279v23.541c0 .522.271 1.007.717 1.279.24.146.511.221.783.221.233 0 .467-.055.682-.164l23.05-11.771c.502-.256.817-.772.817-1.336s-.315-1.079-.817-1.335zm-22.232 10.656v-18.64l18.252 9.32z" />
                                    <path
                                        d="m55.438 8.472h-46.877c-4.656 0-8.444 3.789-8.444 8.445v30.166c0 4.657 3.788 8.445 8.444 8.445h46.878c4.657 0 8.445-3.788 8.445-8.445v-30.166c0-4.657-3.788-8.445-8.446-8.445zm5.446 38.611c0 3.003-2.442 5.445-5.445 5.445h-46.878c-3.002 0-5.444-2.442-5.444-5.445v-30.166c0-3.002 2.442-5.445 5.444-5.445h46.878c3.003 0 5.445 2.443 5.445 5.445z" />
                                </svg>
                                <span class="ml-5">Play Trailer</span>


                            </button>
                        </div>
                    @endif

                    <div style="background-color: rgba(0,0,0,0.5)"
                        class="fixed top-0 left-0 w-full h-full flex item-center shadow-lg overflow-y-auto"
                        x-show.trasition.opacity="isOpen">
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="isOpen = false"
                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative"
                                        style="padding-top:56.25%">
                                        <iframe width="560" height="315"
                                            class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                            src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}"
                                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}






            </div>
        </div>

    </div>
</div>














{{-- Screenshot-movie --}}
{{-- <div class="movie-cast border-t border-gray-800" x-data="{ isOpen: false, image: '' }">
    <div class="container mx-auto px-16 py-16">
        <h2 class="text-4xl font-semibold">Images
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8 ">

            @foreach ($movie['images'] as $image)

                    <div class="mt-8">
                        <a @click.prevent="
                                  isOpen = true
                                 image='{{ 'https://image.tmdb.org/t/p/original/' . $image['file_path'] }}'
                                  "
                            href="">
                            <img src="{{ 'https://image.tmdb.org/t/p/w300' . $image['file_path'] }}"
                                alt="">
                        </a>
                    </div>

        @endforeach


    </div>
    <div style="background-color: rgba(0,0,0,0.5)"
        class="fixed top-0 left-0 w-full h-full flex item-center shadow-lg overflow-y-auto" <div
        class="container mx-auto lg:px-32 rounded-lg overflow-y-auto" x-show="isOpen">

        <div class="bg-gray-900 rounded">
            <div class="flex justify-end pr-4 pt-2">
                <button @click="isOpen = false" @keydown.escape.window="isOpen = false"
                    class="text-3xl leading-none hover:text-gray-300">&times;
                </button>
            </div>
            <div class="modal-body px-8 py-8">
                <img :src="image" alt="poster">
            </div> --}}
        </div>
    </div>
</div>
</div>
</x-master>

