<?php

namespace App\ViewModels\Blog;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{

    public $popolarMovies;
    public $nowPlaying;
    public $genres;
    public function __construct($popolarMovies, $nowPlaying, $genres)
    {
        $this->popolarMovies = $popolarMovies;
        $this->nowPlaying = $nowPlaying;
        $this->genres = $genres;
        //
    }

    public function popolarMovies()
    {
        return $this->formatMovies($this->popolarMovies);
    }

    public function nowPlaying()
    {
        return $this->formatMovies($this->nowPlaying);
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }



    private function formatMovies($movie)
    {


        //   @foreach ($movie['genre_ids'] as $genre)
        //             {{ $genres->get($genre) }} @if (!$loop->last)
        //                 ,
        //             @endif
        //         @endforeach
        return collect($movie)->map(function ($movie) {
            $genresFormated = collect($movie['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');
            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500' . $movie['backdrop_path'],
                'vote_average' =>  $movie['vote_average'] * 10 . '%',
                'release_date' => Carbon::parse($movie['release_date'])->format('m.d.y'),
                'genres' => $genresFormated,
            ])->only([
               'poster_path','id','genre_ids','title','vote_average','release_date','overview','genres',
            ]);
        });
    }
}
