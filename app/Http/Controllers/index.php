<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Nation;
use App\Models\Phim;
use App\Models\Episode;
class Index extends Controller
{
    public function home(){
        $movies = Phim::inRandomOrder()->get();
        $phim = Category::with(['movie' => function ($query) {$query->orderBy('id', 'DESC');}])->get();
        return view('page.home',compact('phim','movies'));
    }
    public function timkiem(Request $request)
    {
        $keyword = $request->input('key');

        $results = Phim::with('category','genre','nation')->where('name', 'like', '%' . $keyword . '%')->get();

        return view('page.timkiem', ['results' => $results]);
    }
    public function danhmuc(){
        $category = Category::all();
        $category_phim= Phim::orderBy('id','DESC')->get();
        return view('page.danhmuc',compact('category','category_phim'));
    }
    public function theloai(){

        $genre = Genre::all();
        $genre_phim= Phim::orderBy('id','DESC')->get();
        return view('page.theloai',compact('genre','genre_phim'));
    }

    public function quocgia(){
      
        $nation=Nation::all();
        $nation_phim= Phim::orderBy('id','DESC')->get();
        return view('page.quocgia',compact('nation','nation_phim'));
    }

    public function movie($id){
   
        $movies = Phim::inRandomOrder()->get();
        $phim=Phim::with('category','genre','nation')->where('id',$id)->first();
        return view('page.movie',compact('phim','movies'));
    }

    public function watch($id,$tap){
        $movies = Phim::inRandomOrder()->get();
        $phim=Phim::with('category','genre','nation')->where('id',$id)->first();
        $episode=Episode::with('phim')->where('film_id',$id)->where('episode',$tap)->first();
        $tapphim=Episode::where('film_id',$id)->get();
        return view('page.watch',compact('phim','tapphim','movies','episode'));
    }
}