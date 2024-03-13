@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> thêm thể loại </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('genre.index')}}" class="btn btn-primary float-end"> Danh sách thể loại </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('genre.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <strong> Tên thể loại </strong>
                            <input type="text" name="name" class="form-control" placeholder="nhập thể loại" required>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2"> lưu </button>
            </form>
        </div>
    </div>
</div>
@endsection