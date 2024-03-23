@extends('welcome')
@section('content')
<h1>Kết quả tìm kiếm</h1>

    @foreach ($results as $phim)
    
    <main id="main-contents" class="col-xs-12 col-sm-12 col-md-12">
        <section id="content" class="test">
            <div class="clearfix wrap-content">
                <div class="halim-movie-wrapper">
                    <div class="movie_info col-xs-12">
                        <div class="movie-poster col-md-2">
                            <img class="movie-thumb" src="{{asset('/images/'.$phim->image)}}" alt="Không Thấy Ảnh">
                            <div class="bwa-content">
                                <div class="loader"></div>
                                <a href="{{route('movie',['id' => $phim->id])}}" class="bwac-btn">
                                <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="film-poster col-md-9">
                            <h1 class="movie-title title-1" style="display:block;line-height:35px;margin-bottom: -14px;text-transform: uppercase;font-size: 18px;">{{$phim->name}}</h1>
                            <ul class="list-info-group">
                                <li class="list-info-group-item"><span>Trạng Thái</span> : <span class="quality">{{$phim->status}}</span>
                                <li class="list-info-group-item"><span>Thời lượng</span> : {{$phim->duration}}</li>
                                <li class="list-info-group-item"><span>Thể loại</span> : <a href="" rel="category tag">{{$phim->genre->name}}</a>
                                <li class="list-info-group-item"><span>Quốc gia</span> : <a href="" rel="tag">{{$phim->nation->name}}</a></li>  
                                <li class="list-info-group-item"><span>Danh mục</span> : <a href="" rel="tag">{{$phim->category->name}}</a></li>
                                <li class="list-info-group-item"><span>Năm</span> : <a href="" rel="tag">{{$phim->year}}</a></li>
                                <li class="list-info-group-item"><span>Đạo diễn</span> : <a class="director" rel="nofollow" href="" title="Cate Shortland">{{$phim->director}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>        
        </section>            
    </main>
    @endforeach
<style>.movie-poster img {
     border: none;}
     .movie-title {
    bottom: -44px;
    width: 100%;
    padding: 10px 15px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin: 0;
    font-size: 22px;
    text-align: left;
    color: #000000;}
    a {
    color: #000000;
}
ul.list-info-group {
    border: none;
    padding: 12px 10px;
    background: none;
    text-shadow: none;
    box-shadow: none;
}
    </style>
@endsection