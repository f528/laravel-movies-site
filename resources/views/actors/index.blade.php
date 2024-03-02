<x-master>
{{-- Image-Actors-section --}}
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold text-orange-500">Popular Actors</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ">
            @foreach ( $popolaractors as $actor )

                    {{-- movie --}}
                    <div class="mt-8">
                        <a href="#">
                            <img src=" {{ $actor['profile_path'] }}"
                                alt="film"class="hover:opacity-75 transaction ease-in-out duration-150">
                        </a>
                        <div class="mt-2">

                            {{-- discription-movie --}}
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $actor['name'] }}.</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span> {{ $actor['known_for'] }}</span>

                            </div>
                            <div class="text-gray-400 text-sm">

                            </div>
                        </div>
                    </div>

        @endforeach



        {{-- end-movie --}}


        {{-- movie --}}

    </div>


</div>







    <div class=" container  mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular Actors
            </h2>


            </div>

        </div>

    </div>
    </div>
    {{-- NOW-PLAYING --}}
    <div class="container mx-auto px-4 pt-16">

    </div>


</x-master>
