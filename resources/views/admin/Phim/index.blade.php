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
                    <th>Trailer</th>

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
                    <td>{{$phim->genre->name}}</td>
                    <td>{{$phim->category->name}}</td>
                    <td>{{$phim->nation->name}}</td>
                    <td>{{$phim->year}}</td>
                    <td><img width="80%" src="{{asset('/images/'.$phim->image)}}"></td>
                    <td>{{$phim->description}}</td>
                    <td>{{$phim->duration}}</td>
                    <td><iframe width="300" height="300" src="{{$phim->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>
                    <form action="{{ route('phim.destroy', $phim->id) }}" method="POST" id="deleteForm" onsubmit="return confirmDelete()">
    <a href="{{ route('phim.edit', $phim->id) }}" class="btn btn-info">Sửa</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Xóa</button>
</form>

<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa phim này?');
    }
</script>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
<script>
    document.getElementById('deleteButton').addEventListener('click', function() {
        if (confirm('Bạn có chắc chắn muốn xóa phim này?')) {
            document.getElementById('deleteForm').submit();
        }
    });
</script>
@endsection