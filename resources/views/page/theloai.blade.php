@extends('welcome')
@section('content')
<div class="content">
    <h1 class="movie-title">Thể loại</h1>
    <div class="button-primary">
        @foreach($genre_phim as $genre)
        <button class="button-btn" data-category="{{$genre->name}}">{{$genre->name}}</button>
      @endforeach
</div>
    <div class="movie-section">
    @foreach($genre as $genre)
    <div class="movie-gallery">
 
        <div class="movie-gallery">
        @foreach($movie as $phim)
            <div class="movie-thumbnail">
                <img src="{{asset('/images/'.$phim->image)}}" alt="">
            </div>
            <div class="movie-body-left">
                <h6>
                    <a href="">{{$phim->name}}</a>
                </h6>
                <p class="text-gray">2018, USA, Action</p>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
<script src="{{ asset('js/categories.js') }}"></script>
@endsection