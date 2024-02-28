<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
   public $movie;
   public function __construct($movie)
   {
     $this->movie = $movie;
   }

   public function movie()
   {
    return collect( $this->movie)->merge([
        'poster_path' => 'https://image.tmdb.org/t/p/w500' . $this->movie['backdrop_path'],
            'vote_average' =>  $this->movie['vote_average'] * 10 . '%',
            'release_date' => Carbon::parse($this->movie['release_date'])->format('m.d.y'),
            'genres' => collect( $this->movie['genres'] )->pluck('name')->flatten()->implode(', '),
            'crew' => collect( $this->movie['credits']['crew'])->take(2),
            'cast' => collect( $this->movie['credits']['cast'])->take(5),
            'images' => collect($this->movie['images']['backdrops'])->take(9),
    ])->only([
            'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'release_date', 'overview', 'genres',
            'cast','crew','images','videos', 'credits', 'original_title'
        ]);;
   }
}
