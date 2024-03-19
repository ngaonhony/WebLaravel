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
        $phim= Category::with('movie')->get();
        return view('page.home',compact('phim'));
    }
    
    public function danhmuc(){
        $category = Category::all();
        $category_phim= Category::with('movie')->get();
        return view('page.danhmuc',compact('category','category_phim'));
    }
    public function theloai(){

        $genre = Genre::all();
        $genre_phim= Genre::with('movie')->get();  
        return view('page.theloai',compact('genre','genre_phim'));
    }

    public function quocgia(){
      
        $nation=Nation::all();
        $nation_phim= Nation::with('movie')->get();
        return view('page.quocgia',compact('nation','nation_phim'));
    }

    public function movie($id){
        $category=Category::all();
        $genre = Genre::all();
        $nation=Nation::all();
        $phim=Phim::with('category','genre','nation')->where('id',$id)->first();
        return view('page.movie',compact('category','genre','nation','phim'));
    }

    public function watch($id){
        $category=Category::all();
        $genre = Genre::all();
        $nation=Nation::all();
        $phim=Phim::with('category','genre','nation')->where('id',$id)->first();
        return view('page.watch',compact('category','genre','nation','phim'));
    }

    public function episode(){
        return view('page.episode');
    }
}