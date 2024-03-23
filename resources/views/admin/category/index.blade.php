@extends('layouts.app')

@section('content')
<div class="container">
    <div class='card'>
        <div class='card-header'>
            <div class="row">
                <div class="col-md-6">
                    <h3> Quản lý Danh Mục</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('category.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            @if (Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bordered" id="phim">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Tên danh mục</th>
                        <th></tH>
                    </tr>
                </thead>
                <tbody>
                @php
    $category = $category->reverse(); // Sắp xếp mảng theo thứ tự ngược lại
@endphp
                    @foreach ($category as $category)
                    <tr>
                        <td>{{$category->id}} </td>
                        <td>{{$category->name}} </td>
                      
                        <td>
                            <form action="{{route('category.destroy', $category->id)}}" method="POST" id="deleteForm" onsubmit="return confirmDelete()">
                                <a href="{{route('category.edit', $category->id)}}" class="btn btn-info"> sửa </a>
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
<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa phim này?');
    }
</script>
@endsection