<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Nation;
use App\Models\Phim;
class Index extends Controller
{
    public function home(){
        $category = Category::all();
        $genre = Genre::all();
        $nation=Nation::all();
        $category_phim= Category::with('movie')->get();
        return view('page.home',compact('category','genre','nation','category_phim'));
    }
    
    public function danhmuc(){
        $category = Category::all();
        $genre = Genre::all();
        $nation=Nation::all();
        $movie=Phim::where('category_id')->paginate(40);
        return view('page.home',compact('category','genre','nation','movie'));
    }
    public function theloai(){
        $category=Category::all();
        $genre = Genre::all();
        $movie=Phim::where('genre_id')->paginate(40);
        $nation=Nation::all();
        return view('page.theloai',compact('category','genre','nation','movie'));
    }
    public function quocgia(){
        $category=Category::all();
        $genre = Genre::all();
        $nation=Nation::all();
        $movie=Phim::where('nation_id')->paginate(40);
        return view('page.quocgia',compact('category','genre','nation','movie'));
    }
    public function phim(){
        return view('page.phim');
    }
    public function xemphim(){
        return view('page.xemphim');
    }
    public function tapphim(){
        return view('page.tapphim');
    }
}