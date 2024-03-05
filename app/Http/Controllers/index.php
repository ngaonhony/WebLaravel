<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;
class Index extends Controller
{
    public function home(){
        return view('page.home');
    }
    public function danhmuc(){
        return view('page.danhmuc');
    }
    public function theloai(){
        return view('page.theloai');
    }
    public function quocgia(){
        return view('page.quocgia');
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