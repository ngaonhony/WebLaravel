@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> thêm tap phim </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('episode.index')}}" class="btn btn-primary float-end"> Danh sách tap phim </a>
                </div>
            </div>
        </div>
        <div class="card-body">
       
              
 <form action="{{ route('episode.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <select name="film_id" class="form-select" required>
                        <option value="">-- Chọn một loai phim --</option>
                        @foreach ($phim as $phim)
                            <option value="{{ $phim->id }}">{{ $phim->name }}</option>
                        @endforeach
                    </select> </div>
            <div class="form-group">
                <strong>Tên tap phim</strong>
                <input type="text" name="episode_name" class="form-control" placeholder="Nhập tên tap phim" required>
            </div>

            </div>
            <div class="col-md-6">
                
                <div class="form-group">
                    <strong>So tap</strong>
                    <input type="text" name="episode" class="form-control" placeholder="Nhập năm phát hành" required>
                </div>
                <div class="form-group">
                    <strong>Link phim</strong>
                    <input type="text" name="content" class="form-control" placeholder="Chọn hình ảnh" required>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-2">Lưu</button>
</form>

    </div>
</div>
@endsection