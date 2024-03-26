@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> thêm phim </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('phim.index')}}" class="btn btn-primary float-end"> Danh sách phim </a>
                </div>
            </div>
        </div>
        <div class="card-body">
 <form action="{{ route('phim.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Tên phim</strong>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên phim" required>
            </div>
            <div class="form-group">
                <strong>Trạng thái</strong>
                <input type="text" name="status" class="form-control" placeholder="Nhập trạng thái phim" required>
            </div>
            <div class="form-group">
                <strong>Đạo diễn</strong>
                <input type="text" name="director" class="form-control" placeholder="Nhập đạo diễn" required>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Thể loại</strong>
                    <select name="genre_id" class="form-select" required>
                        <option value="">-- Chọn một thể loại --</option>
                        @foreach ($genre as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Kiểu phim</strong>
                    <select name="category_id" class="form-select" required>
                        <option value="">-- Chọn một danh mục --</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Quốc gia</strong>
                    <select name="nation_id" class="form-select" required>
                        <option value="">-- Chọn một quốc gia --</option>
                        @foreach ($nation as $nation)
                            <option value="{{ $nation->id }}">{{ $nation->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Năm phát hành</strong>
                    <input type="text" name="year" class="form-control" placeholder="Nhập năm phát hành" required>
                </div>
                <div class="form-group">
                    <strong>Hình ảnh</strong>
                    <input type="file" name="image" class="form-control" placeholder="Chọn hình ảnh" required>
                </div>
                <div class="form-group">
                    <strong>Thời lượng</strong>
                    <input type="text" name="duration" class="form-control" placeholder="Nhập thời lượng" required>
                </div>
                <div class="form-group">
                    <strong>Mô tả</strong>
                    <textarea name="description" class="form-control" placeholder="Ghi mô tả" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <strong>Trailer</strong>
                    <textarea name="trailer" class="form-control" placeholder="Ghi link trailer" rows="4" required></textarea>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-2">Lưu</button>
</form>

    </div>
</div>
@endsection