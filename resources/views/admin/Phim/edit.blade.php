@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> Sửa phim </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('phim.index')}}" class="btn btn-primary float-end"> Danh sách phim </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('phim.update', $phim->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong> Tên phim </strong>
                            <input type="text" name="name" value="{{$phim->name}}" class="form-control"
                                placeholder="nhập tên phim" required>
                        </div>
                        <div class="form-group">
                            <strong> Trạng thái </strong>
                            <input type="text" name="status" value="{{$phim->status}}" class="form-control"
                                placeholder="nhập trạng thái phim" required>
                        </div>
                        <div class="form-group">
                            <strong> Đạo diễn</strong>
                            <input type="text" name="director" value="{{$phim->director}}" class="form-control"
                                placeholder="nhập Đạo diễn" required>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <strong> Thể loại </strong>
                                <select name="genre_id" class="form-select">
                                @foreach ($genre as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <strong> Kiểu phim </strong>
                                <select name="category_id" class="form-select">
                                @foreach ($category as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <strong> Quốc gia </strong>
                                <select name="nation_id" class="form-select">
                                @foreach ($nation as $nation)
        <option value="{{ $nation->id }}">{{ $nation->name }}</option>
    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <strong> năm phát hành </strong>
                                <input type="text" name="year" value="{{$phim->year}}" class="form-control" placeholder="nhập năm phát hành" required>
                            </div>
                            <div class="form-group">
                                <strong>Hình ảnh</strong>
                                <input type="file" name="image" value="{{$phim->image}}" class="form-control" placeholder="chọn hình ảnh">
                            </div>
                            
                            <div class="form-group">
                                <strong>Thời lượng</strong>
                                <input type="text" name="duration" value="{{$phim->duration}}" class="form-control" placeholder="nhập thời lượng" required>
                            </div>
                            <div class="form-group">
                            <strong>Mô tả</strong>
                              <textarea name="description" class="form-control" placeholder="Ghi mô tả" rows="4" required>{{ $phim->description }}</textarea>
                            </div>
                            <div class="form-group">
                            <strong>Trailer</strong>
                              <textarea name="trailer" class="form-control" placeholder="Ghi link trailer" rows="4" required>{{ $phim->trailer }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2"> cập nhật </button>
            </form>
        </div>
    </div>
</div>
@endsection