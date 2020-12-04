<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view(){
        $drama = Movie::where('genre_id', 1)->take(4)->get();
        $kids = Movie::where('genre_id', 2)->take(4)->get();
        $tvshow = Movie::where('genre_id', 3)->take(4)->get();

        return view('home', [
            'drama' => $drama,
            'kids' => $kids,
            'tvshow' => $tvshow,
        ]);
    }

    public function viewAll(){
        $movie = Movie::all();

        return view('view', [
            'movie' => $movie,
        ]);
    }

    public function viewDetail($id){
        $movie = Movie::find($id);
        $episode = Movie::find($id)->episode();
        $episode = $episode->paginate(3);

        return view('moviedetail', [
            'movie' => $movie,
            'episode' => $episode,
        ]);
    }

    public function viewCategory($id){
        $movie = Movie::where('genre_id', $id)->get();

        return view('viewcategory', [
            'movie' => $movie,
        ]);
    }
}
