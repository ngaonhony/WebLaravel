@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> Sửa User </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('nguoidung.index')}}" class="btn btn-primary float-end"> Danh sách User </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('nguoidung.update', $nguoidung->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong> Mã User </strong>
                            <input type="text" name="id" value="{{$nguoidung->id}}" class="form-control"
                                placeholder="nhập id User">
                        </div>
                        <div class="form-group">
                            <strong> Tên đăng nhập </strong>
                            <input type="text" name="username" value="{{$nguoidung->username}}" class="form-control"
                                placeholder="nhập Username">
                        </div>
                        <div class="form-group">
                            <strong> Họ và Tên </strong>
                            <input type="text" name="name" value="{{$nguoidung->name}}" class="form-control"
                                placeholder="nhập họ và tên">
                        </div>
                        <div class="form-group">
                            <strong> Password</strong>
                            <input type="password" name="password" value="{{$nguoidung->password}}" class="form-control"
                                placeholder="nhập password">
                        </div>
                        <div class="form-group">
                            <strong> email </strong>
                            <input type="text" name="email" value="{{$nguoidung->email}}" class="form-control"
                                placeholder="nhập email">
                        </div>
                        <div class="form-group">
                            <strong> ngày sinh </strong>
                            <input type="date" name="birthday" value="{{$nguoidung->birthday}}" class="form-control"
                                placeholder="nhập birthday">
                        </div>
                        <div class="form-group">
                            <strong> giới tính </strong>
                            <input type="text" name="sex" value="{{$nguoidung->sex}}" class="form-control"
                                placeholder="nhập giới tính">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2"> cập nhật </button>
            </form>
        </div>
    </div>
</div>
@endsection