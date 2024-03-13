@extends('welcome')
@section('content')<div class="main">
    <div class="header-home">
        <div class="owl-item">
            <div class="owl-item-left">
                <div class="slider">
                    <a href=""> <img src="./img/slider-3-570x364.jpg" alt=""></a>
                </div>
                <div class="slider-body">
                    <h2 class="slider-title">First Man (2018)</h2>
                    <p class="text-title">2018, USA, Biographuy, Drama, History</p>
                </div>
            </div>
            <div class="owl-item-right">
                <div class="slider">
                    <img src="./img/slider-4-570x364.jpg" alt="">
                </div>
                <div class="slider-body">
                    <h2 class="slider-title">Black Mirror</h2>
                    <p class="text-title">2018, USA, Biographuy, Drama, History</p>
                </div>
            </div>
        </div>
    </div>
   <div class="film">
    @foreach($category_phim as $category)
    <div class="content">
        <div class="movie-section">
        <h1 class="movie-title">{{$category->name}}</h1>
        @foreach($category->movie->take(8) as $phim)
            <div class="movie-gallery">
               
                <div class="movie-thumbnail">
                    <img src="{{asset('/images/'.$phim->image)}}" alt="">
                </div>
                <div class="movie-body-left">
                    <h6>
                        <a href="">{{$phim->name}}</a>
                    </h6>
                    <p class="text-gray">2018, USA, Action</p>
                </div>
            </div>
           @endforeach
        </div>
    </div>
    @endforeach
    </div>
    @endsection