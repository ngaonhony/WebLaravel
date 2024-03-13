@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> Sửa danh mục </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('category.index')}}" class="btn btn-primary float-end"> Danh sách danh mục </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('category.update', $category->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <strong> Tên danh mục </strong>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control"
                                placeholder="nhập tên danh mục" required>
                        </div>
                       
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2"> cập nhật </button>
            </form>
        </div>
    </div>
</div>
@endsection