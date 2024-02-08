<div>
    <div class="mt-8">
        <a href="{{ route('movies.show',$movie['id']) }}">
            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['backdrop_path'] }}"
                alt="film"class="scale-100 hover:scale-110 hover:opacity-75 transaction ease-in-out duration-150">
        </a>
        <div class="mt-2">
            {{-- discription-movie --}}
            <a href="{{ route('movies.show',$movie['id']) }}" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title'] }}</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
                <span> <svg class="fill-current text-orange-500" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/2000/xlink" width="21px" height="20px">
                        <path d="M0,0.054V20h21V0.054H0z M15.422,18.129l-5.264-2.768l-5.265,2.768l1.006-5.863L1.64,8.114l5.887-0.855
                                 l2.632-5.334l2.633,5.334l5.885,0.855l-4.258,4.152L15.422,18.129z" />
                    </svg></span>
                <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('m.d.y') }}</span>
            </div>
            <div class="text-gray-400 text-sm">
                @foreach ($movie['genre_ids'] as $genre)
                    {{ $genres->get($genre) }} @if (!$loop->last)
                        ,
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>



