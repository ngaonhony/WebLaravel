@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> Sửa thể loại </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('genre.index')}}" class="btn btn-primary float-end"> Danh sách thể loại </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('genre.update', $genre->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <strong> Tên thể loại </strong>
                            <input type="text" name="name" value="{{$genre->name}}" class="form-control"
                                placeholder="nhập tên thể loại" required>
                        </div>
                       
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2"> cập nhật </button>
            </form>
        </div>
    </div>
</div>
@endsection