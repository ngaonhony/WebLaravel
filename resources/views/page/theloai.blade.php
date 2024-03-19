@extends('welcome')
@section('content')

<div class="page-content page-container" id="page-content">
    <h1 class="movie-title">The Loai</h1>
    <div class="my-button container">
            @foreach($genre as $nation)
            
            <button class="btn btn-raised shadow my-button w-xs red"><div class="category-item" data-category="{{$nation->name}}">{{$nation->name}}</div></button>
            
            @endforeach
            </div>    
    <div class="movie-section">
        @foreach($genre_phim as $nation)
            <div class="movie-gallery" data-category="{{$nation->name}}">
                @foreach($nation->movie as $phim)
                    <div class="movie-thumbnail">
                        <img src="{{asset('/images/'.$phim->image)}}" alt="">
                    </div>
                    <div class="movie-body-left">
                        <h6>
                            <a href="{{route('movie',['id' => $phim->id])}}">{{$phim->name}}</a>
                        </h6>
                        <p class="text-gray">2018, USA, Action</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var categoryItems = document.getElementsByClassName('category-item');
        var movieGalleries = document.getElementsByClassName('movie-gallery');

        for (var i = 0; i < categoryItems.length; i++) {
            categoryItems[i].addEventListener('click', function() {
                var category = this.getAttribute('data-category');

                // Ẩn tất cả các phần tử gallery
                for (var j = 0; j < movieGalleries.length; j++) {
                    var galleryCategory = movieGalleries[j].getAttribute('data-category');
                    if (galleryCategory === category) {
                        movieGalleries[j].style.display = 'block';
                    } else {
                        movieGalleries[j].style.display = 'none';
                    }
                }
            });
        }
    });
</script>
<script>                            
                            $( document ).ready(function() {
    // Bounce button
    $("#animatebutton").click(function(){
        const element =  document.querySelector('.animatebutton');
        element.classList.add('animated', 'bounceOut');
        setTimeout(function() {
          element.classList.remove('bounceOut'); 
  },        1000); 
    });
     
    
}); 
 </script>
<script src="{{ asset('js/categories.js') }}"></script>
<style>
  .my-button {
    display: initial;
    height: 40px;
    }
    .category-item {
        height: 100%; /* Đảm bảo nút lấp đầy chiều cao của phần tử cha */
    }
.btn-raised {
    transition: box-shadow .4s cubic-bezier(.25, .8, .25, 1), transform .4s cubic-bezier(.25, .8, .25, 1);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26)
}

.btn-raised:not([disabled]):active,
.btn-raised:not([disabled]):focus,
.btn-raised:not([disabled]):hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .4);
    transform: translate3d(0, -1px, 0)
}

.shadow {
    overflow: hidden;
    position: relative;
    transform: translate3d(0, 0, 0)
}

.shadow:before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: auto;
    height: auto;
    pointer-events: none;
    background-image: radial-gradient(circle, #000 10%, transparent 10.01%);
    background-repeat: no-repeat;
    background-position: 50%;
    transform: scale(10, 10);
    opacity: 0;
    transition: transform .5s, opacity 1.5s
}

.shadow:active:before {
    transform: scale(0, 0);
    opacity: .1;
    transition: 0s
}
.my-button,
.my-2 {
    margin-bottom: .5rem!important
}

.w-xs {
    width: 100px
}

.red {
    background-color: #f44336;
    color: #fff
}
</style>
@endsection