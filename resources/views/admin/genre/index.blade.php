@extends('layouts.app')

@section('content')
<div class="container">
    <div class='card'>
        <div class='card-header'>
            <div class="row">
                <div class="col-md-6">
                    <h3> Quản lý thể loại</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('genre.create')}}" class="btn btn-primary float-end">Thêm mới</a>
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
                        <th> ID </th>
                        <th> Tên thể loại</th>
                    </tr>
                </thead>
                <tbody>
                @php
    $genre= $genre->reverse(); // Sắp xếp mảng theo thứ tự ngược lại
@endphp
                    @foreach ($genre as $genre)
                    <tr>
                        <td>{{$genre->id}} </td>
                        <td>{{$genre->name}} </td>
                      
                        <td>
                            <form action="{{route('genre.destroy', $genre->id)}}" method="POST">
                                <a href="{{route('genre.edit', $genre->id)}}" class="btn btn-info"> sửa </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa </button>

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