<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\ViewModels\ViewModel;
use App\ViewModels\MovieViewModel;
use Illuminate\Support\Facades\Http;
use App\ViewModels\Blog\PostsViewModel;
use App\ViewModels\Blog\MoviesViewModel;

class HomeController extends Controller
{
    public function index()
    {


        $popolarMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];



        $nowPlaying = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];



        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        // $genres = collect($genresArray)->mapWithKeys(function ($genre) {
        //     return [$genre['id'] => $genre['name']];
        // });

        // return view('movies.index', [
        //     'popolarMovies' => $popolarMovies,
        //     'genres' => $genres,
        //     'nowPlaying' => $nowPlaying,
        // ]);
        $viewModel = new MoviesViewModel(
            $popolarMovies,
            $nowPlaying,
            $genres
        );
        return view('movies.index', $viewModel);
    }
    // ----------------------------Show View------------------------------------

    public function show($id)
    {

        $showMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')
            ->json();

        $genresArray = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
          $viewModel = new MovieViewModel($showMovies);
        return view('movies.show',$viewModel
            );
    }
}
