@extends('layouts.app')

@section('content')
<div class="container">
    <div class='card'>
        <div class='card-header'>
            <div class="row">
                <div class="col-md-6">
                    <h3> Quản lý User</h3>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-primary float-end">Thêm mới</a>
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
                        <th> Mã User</th>
                        <th>Tên đăng nhập </th>
                        <th>Họ và Tên </th>
                        <th>Mật Khẩu </th>
                        <th>Email </th>
                        <th> Ngày sinh</th>
                        <th> Giới tính </th>

                    </tr>
                </thead>
                <tbody>
                @php
    $nguoidung = $nguoidung->reverse(); // Sắp xếp mảng theo thứ tự ngược lại
@endphp
                    @foreach ($nguoidung as $User)
                    <tr>
                        <td>{{$User->id}} </td>
                        <td>{{$User->username}} </td>
                        <td>{{$User->name}} </td>
                        <td>{{$User->password}} </td>
                        <td>{{$User->email}} </td>
                        <td>{{$User->birthday}} </td>
                        <td>{{$User->sex}} </td>
                        <td>
                            <form action="{{route('nguoidung.destroy', $User->id)}}" method="POST" id="deleteForm" onsubmit="return confirmDelete()">
                                <a href="{{route('nguoidung.edit', $User->id)}}" class="btn btn-info"> sửa </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa </button>
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
@endsection