 <div class="flex  justify-end">
     <div class="relative" x-data="{ isOpen: true }" @click.away=false>
         <input
          wire:model.live.debounce.500ms="search"
         type="text"

             class="bg-gray-600 rounded-full w-75 px-4 py-1 ml-4 focus:outline-none focus:shadow-outline"
             placeholder="Search"
            x-ref="search"
              @keydown.escape.window="isOpen = false"
             @keydown.shift.tab="isOpen = false"
             @focus="isOpen = true"
             @keydown="isOpen = true"

             @keydown.shift.tab="isOpen = false"
             @keydown.window="if(event.keyCode ==191){
                event.preventDefault();
                 $refs="search.focus();
             }

            "
            >

     </div>
     <div wire:loading class="spinner top-0 right-0 mr-20 mt-8"></div>
     @if (strlen($search) > 2)
         <div class="absolute bg-gray-800 text-sm rounded w-52 mt-12  z-50
          x-show.transition.opacity="isOpen"
             @keydown.escape.window.="isOpen = false">
             @if ($searchResult->count() > 0)
                 <ul>
                     @foreach ($searchResult as $result)
                         <li class="border-b border-gray-700">
                             <a href="{{ route('movies.show', $result['id']) }}"
                                 class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150
                                 @if ($loop->last) @keydown.tab="isOpen = false" @endif
                                 ">
                                 @if ($result['poster_path'])
                                     <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}"
                                         alt="poster" class="w-8">
                                 @else
                                     <img src="https://via.placeholder.com/50x75 " alt="poster" class="w-8">
                                 @endif
                                 <span class="ml-4">{{ $result['title'] }}</span>
                             </a>
                         </li>
                     @endforeach
                 </ul>
             @else
                 <div class="px-3 py-3">No Result for "{{ $search }}"</div>
             @endif
         </div>
     @endif


 </div>


