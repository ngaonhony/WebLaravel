@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta charset="utf-8" />
      <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
      <meta name="theme-color" content="#234556">
      <meta http-equiv="Content-Language" content="vi" />
      <meta content="VN" name="geo.region" />
      <meta name="DC.language" scheme="utf-8" content="vi" />
      <meta name="language" content="Việt Nam">
      <link rel="stylesheet" href="{{asset('css/all.css')}}" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="shortcut icon" href="{{asset('images/logo-icon.jpg')}}" type="image/x-icon" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
      <meta name="revisit-after" content="1 days" />
      <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
      <title>Phim hay 2021 - Xem phim hay nhất</title>
      <meta name="description" content="Phim hay 2021 - Xem phim hay nhất, xem phim online miễn phí, phim hot , phim nhanh" />
      <link rel="canonical" href="">
      <link rel="next" href="" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:title" content="Phim hay 2020 - Xem phim hay nhất" />
      <meta property="og:description" content="Phim hay 2020 - Xem phim hay nhất, phim hay trung quốc, hàn quốc, việt nam, mỹ, hong kong , chiếu rạp" />
      <meta property="og:url" content="" />
      <meta property="og:site_name" content="Phim hay 2021- Xem phim hay nhất" />
      <meta property="og:image" content="" />
      <meta property="og:image:width" content="300" />
      <meta property="og:image:height" content="55" />
     
      <link rel='dns-prefetch' href='//s.w.org' />
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel='stylesheet' id='bootstrap-css' href="{{asset('css/bootstrap.min.css?ver=5.7.2')}}" media='all' />
      <link rel='stylesheet' id='style-css' href="{{asset('css/movie.css?ver=5.7.2')}}" media='all' />
      <link rel='stylesheet' id='wp-block-library-css' href="{{asset('css/style.min.css?ver=5.7.2')}}" media='all' />
      <script type='text/javascript' src="{{asset('js/jquery.min.js?ver=5.7.2')}}" id='halim-jquery-js'></script>
      <style type="text/css" id="wp-custom-css">
         .textwidget p a img {
         width: 100%;
         }
      </style>
   </head>
   <body class="post-template-default single single-post postid-38424 single-format-standard halimthemes halimmovies" data-masonry="">
      <div class="container">
         <div class="row fullwith-slider"></div>
      </div>
      <div class="container">
         <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
               <div class="panel-heading">
                  <div class="row">
                     <div class="col-xs-6">
                        <div class="yoast_breadcrumb hidden-xs"><span><span><a href="{{route('homepage')}}">Trang chủ</a> »<span><a href="{{route('danhmuc')}}">{{$phim->category->name}}</a> » <span class="breadcrumb_last" aria-current="">{{$phim->name}}</span></span></span></span></div>
                     </div>
                  </div>
               </div>
               <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                  <div class="ajax"></div>
               </div>
            </div>
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-12">
               <section id="content" class="test">
                  <div class="clearfix wrap-content">
                     <div class="halim-movie-wrapper">
                        <div class="movie_info col-xs-12">
                           <div class="movie-poster col-md-3">
                              <img class="movie-thumb" src="{{asset('/images/'.$phim->image)}}" alt="Không Thấy Ảnh">
                              <div class="bwa-content">
                                 <div class="loader"></div>
                                 <a href="{{route('watch',['id' => $phim->id, 'tap' => 1])}}" class="bwac-btn">
                                 <i class="fa fa-play"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="film-poster col-md-9">
                              <h1 class="movie-title title-1" style="display:block;line-height:35px;margin-bottom: -14px;color: #ffed4d;text-transform: uppercase;font-size: 18px;">{{$phim->name}}</h1>
                              <ul class="list-info-group">
                                 <li class="list-info-group-item"><span>Trạng Thái</span> : <span class="quality">{{$phim->status}}</span>
                                 <li class="list-info-group-item"><span>Thời lượng</span> : {{$phim->duration}}</li>
                                 <li class="list-info-group-item"><span>Thể loại</span> : <a href="" rel="category tag">{{$phim->genre->name}}</a>
                                 <li class="list-info-group-item"><span>Quốc gia</span> : <a href="" rel="tag">{{$phim->nation->name}}</a></li>  
                                 <li class="list-info-group-item"><span>Danh mục</span> : <a href="" rel="tag">{{$phim->category->name}}</a></li>
                                 <li class="list-info-group-item"><span>Năm</span> : <a href="" rel="tag">{{$phim->year}}</a></li>
                                 <li class="list-info-group-item"><span>Đạo diễn</span> : <a class="director" rel="nofollow" href="" title="Cate Shortland">{{$phim->director}}</a></li>
                              </ul>
                              <div class="movie-trailer hidden"></div>
                              <a href="#watch_trailer" class="btn btn-primary watch_trailer">Xem trailer</a>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div id="halim_trailer"></div>
                     <div class="clearfix"></div>
                     <div class="section-bar clearfix">
                        <h2 class="section-title"><span style="color:#ffed4d">Nội dung phim</span></h2>
                     </div>
                     <div class="entry-content htmlwrap clearfix">
                        <div class="video-item halim-entry-box">
                           <article id="post-38424" class="item-content">
                              Phim <a href="">{{$phim->name}}</a>
                              <p>{{$phim->description}}</p>   
                           </article>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="related-movies">
                  <div id="halim_related_movies-2xx" class="wrap-slider">
                  <div id="watch_trailer" class="section-bar clearfix" >
                        <h3 class="section-title"><span>Trailer</span></h3>
                        <iframe width="100%" height="500" src="{{$phim->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                     <div class="section-bar clearfix">
                        <h3 class="section-title"><span>CÓ THỂ BẠN MUỐN XEM</span></h3>
                     </div>
                     <div id="halim_related_movies-2" class="owl-carousel owl-theme related-film">
                     @foreach ($movies as $movie)
                        <article class="thumb grid-item post-38498">
                           <div class="halim-item">
                              <a class="halim-thumb" href="{{route('movie',['id' => $movie->id, 'tap' => 1])}}" title="{{$movie->name}}">
                                 <figure><img class="lazy img-responsive" src="{{asset('/images/'.$movie->image)}}" alt="{{$movie->name}}" title="{{$movie->name}}"></figure>
                                 <span class="status">HD</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>{{$movie->status}}</span> 
                                 <div class="icon_overlay"></div>
                                 <div class="halim-post-title-box">
                                    <div class="halim-post-title ">
                                       <p class="entry-title">{{$movie->name}}</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </article>
                        @endforeach
                     </div>
                     <script>
                        jQuery(document).ready(function($) {				
                        var owl = $('#halim_related_movies-2');
                        owl.owlCarousel({loop: true,margin: 4,autoplay: true,autoplayTimeout: 4000,autoplayHoverPause: true,nav: true,navText: ['<i class="hl-down-open rotate-left"></i>', '<i class="hl-down-open rotate-right"></i>'],responsiveClass: true,responsive: {0: {items:2},480: {items:3}, 600: {items:4},1000: {items: 4}}})});
                     </script>
                  </div>
               </section>
            </main>
            <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4"></aside>
         </div>
      </div>
     
      <script type='text/javascript' src="{{asset('js/bootstrap.min.js?ver=5.7.2')}}" id='bootstrap-js'></script>
      <script type='text/javascript' src="{{asset('js/owl.carousel.min.js?ver=5.7.2')}}" id='carousel-js'></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script type='text/javascript' src="{{asset('js/halimtheme-core.min.js?ver=1626273138')}}" id='halim-init-js'></script>
      <script type="text/javascript">
      $(document).ready(function() {
      $("#watch_trailer").click(function(e) {
      e.preventDefault();
      var aid = $(this).attr("href");
      $('html, body').animate({ scrollTop: $(aid).offset().top }, 'slow');
    });
  });
</script>
      <style>#overlay_mb{position:fixed;display:none;width:100%;height:100%;top:0;left:0;right:0;bottom:0;background-color:rgba(0, 0, 0, 0.7);z-index:99999;cursor:pointer}#overlay_mb .overlay_mb_content{position:relative;height:100%}.overlay_mb_block{display:inline-block;position:relative}#overlay_mb .overlay_mb_content .overlay_mb_wrapper{width:600px;height:auto;position:relative;left:50%;top:50%;transform:translate(-50%, -50%);text-align:center}#overlay_mb .overlay_mb_content .cls_ov{color:#fff;text-align:center;cursor:pointer;position:absolute;top:5px;right:5px;z-index:999999;font-size:14px;padding:4px 10px;border:1px solid #aeaeae;background-color:rgba(0, 0, 0, 0.7)}#overlay_mb img{position:relative;z-index:999}@media only screen and (max-width: 768px){#overlay_mb .overlay_mb_content .overlay_mb_wrapper{width:400px;top:3%;transform:translate(-50%, 3%)}}@media only screen and (max-width: 400px){#overlay_mb .overlay_mb_content .overlay_mb_wrapper{width:310px;top:3%;transform:translate(-50%, 3%)}}</style>
    
      <style>
         #overlay_pc {
         position: fixed;
         display: none;
         width: 100%;
         height: 100%;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: rgba(0, 0, 0, 0.7);
         z-index: 99999;
         cursor: pointer;
         }
         #overlay_pc .overlay_pc_content {
         position: relative;
         height: 100%;
         }
         .overlay_pc_block {
         display: inline-block;
         position: relative;
         }
         #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
         width: 600px;
         height: auto;
         position: relative;
         left: 50%;
         top: 50%;
         transform: translate(-50%, -50%);
         text-align: center;
         }
         #overlay_pc .overlay_pc_content .cls_ov {
         color: #fff;
         text-align: center;
         cursor: pointer;
         position: absolute;
         top: 5px;
         right: 5px;
         z-index: 999999;
         font-size: 14px;
         padding: 4px 10px;
         border: 1px solid #aeaeae;
         background-color: rgba(0, 0, 0, 0.7);
         }
         #overlay_pc img {
         position: relative;
         z-index: 999;
         }
         @media only screen and (max-width: 768px) {
         #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
         width: 400px;
         top: 3%;
         transform: translate(-50%, 3%);
         }
         }
         @media only screen and (max-width: 400px) {
         #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
         width: 310px;
         top: 3%;
         transform: translate(-50%, 3%);
         }
         }
      </style>
     
      <style>
         .float-ck { position: fixed; bottom: 0px; z-index: 9}
         * html .float-ck /* IE6 position fixed Bottom */{position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
         #hide_float_left a {background: #0098D2;padding: 5px 15px 5px 15px;color: #FFF;font-weight: 700;float: left;}
         #hide_float_left_m a {background: #0098D2;padding: 5px 15px 5px 15px;color: #FFF;font-weight: 700;}
         span.bannermobi2 img {height: 70px;width: 300px;}
         #hide_float_right a { background: #01AEF0; padding: 5px 5px 1px 5px; color: #FFF;float: left;}
      </style>
   </body>
</html>
@endsection