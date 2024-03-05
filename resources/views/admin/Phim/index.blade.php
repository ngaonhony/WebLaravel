@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3> Quản lý phim</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('phim.create')}}" class="btn btn-primary float-end"> Thêm mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th> Mã phim </th>
                    <th>Tên phim </th>
                    <th>Trạng thái</th>
                    <th>Đạo diễn </th>
                    <th>Thể loại </th>
                    <th>Kiểu phim </th>
                    <th>Quốc gia</th>
                    <th>Năm </th>
                    <th>Hình ảnh </th>
                    <th>mô tả</th>
                    <th>thời gian</th>

                </tr>
            </thead>
            <tbody>
            @php
    $phim = $phim->reverse(); // Sắp xếp mảng theo thứ tự ngược lại
@endphp
                @foreach ($phim as $phim)
                <tr>
                    <td>{{$phim->id}}</td>
                    <td>{{$phim->name}}</td>
                    <td>{{$phim->status}}</td>
                    <td>{{$phim->director}}</td>
                    <td>{{$phim->category_id}}</td>
                    <td>{{$phim->type_movie}}</td>
                    <td>{{$phim->nation_id}}</td>
                    <td>{{$phim->year}}</td>
                    <td>{{$phim->image}}</td>
                    <td>{{$phim->description}}</td>
                    <td>{{$phim->duration}}</td>
                    <td>
                        <form action="{{route('phim.destroy', $phim->id)}}" method="POST">
                            <a href="{{route('phim.edit' , $phim->id)}}" class="btn btn-info"> Sửa</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Xóa </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection