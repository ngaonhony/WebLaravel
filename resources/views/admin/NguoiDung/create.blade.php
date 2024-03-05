@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> thêm User </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('nguoidung.index')}}" class="btn btn-primary float-end"> Danh sách User </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('nguoidung.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong> Mã User </strong>
                            <input type="text" name="id" class="form-control" placeholder="nhập id User">
                        </div>
                        <div class="form-group">
                            <strong> Tên đăng nhập </strong>
                            <input type="text" name="username" class="form-control" placeholder="nhập Username">
                        </div>
                        <div class="form-group">
                            <strong> Họ và Tên </strong>
                            <input type="text" name="name" class="form-control" placeholder="nhập họ và tên">
                        </div>
                        <div class="form-group">
                            <strong> Password</strong>
                            <input type="password" name="password" class="form-control" placeholder="nhập password">
                        </div>
                        <div class="form-group">
                            <strong> email </strong>
                            <input type="text" name="email" class="form-control" placeholder="nhập email">
                        </div>
                        <div class="form-group">
                            <strong> ngày sinh </strong>
                            <input type="date" name="birthday" class="form-control" placeholder="nhập birthday">
                        </div>
                        <div class="form-group">
                            <strong> giới tính </strong>
                            <input type="text" name="sex" class="form-control" placeholder="nhập giới tính">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2"> lưu </button>
            </form>
        </div>
    </div>
</div>
@endsection