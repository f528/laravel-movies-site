<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;


class ActorsViewModel extends ViewModel
{
    public $popolaractors;
    public $page;

    public function __construct($popolaractors,$page)
    {
        $this->popolaractors = $popolaractors;
        $this->page = $page;
        //
    }

    public function popolaractors()
    {

        //  return collect($this->$popolaractors)->map(function ($actor) {
        return collect($this->popolaractors)->map(function ($actor) {
            return collect($actor)->merge([
                'profile_path' => $actor['profile_path'] ?
                    'https://image.tmdb.org/t/p/w235_and_h235_face' . $actor['profile_path']
                    : 'https://ui-avatars.com/api/?size=2356name=' . $actor['name'],

                'known_for' => collect($actor['known_for'])->where('media_type', 'movie')->pluck('title')->union(
                    collect($actor['known_for'])->where('media_type', 'tv')->pluck('name')
                )->implode(', '),

            ])->only([
                'profile_path', 'id', 'name', 'known_for',
            ]);
        });
    }

    public function previous(){
        return $this->page > 1 ? $this->page - 1 :null;
    }
    public function next()
    {
        return $this->page < 500 ? $this->page + 1 : null;
    }
}
