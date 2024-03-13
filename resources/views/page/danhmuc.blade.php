@extends('welcome')
@section('content')

    <div class="movie-section">
    @foreach($category as $category)
    <div class="movie-gallery">
 
        <div class="movie-gallery">
        @foreach($movies as $phim)
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
{{ $movies->links() }}
<script src="{{ asset('js/categories.js') }}"></script>
@endsection