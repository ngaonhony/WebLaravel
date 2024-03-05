@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> Sửa quốc gia </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('nation.index')}}" class="btn btn-primary float-end"> Danh sách quốc gia </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('nation.update', $nation->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <strong> Tên quốc gia </strong>
                            <input type="text" name="name" value="{{$nation->name}}" class="form-control"
                                placeholder="nhập tên quốc gia">
                        </div>
                       
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2"> cập nhật </button>
            </form>
        </div>
    </div>
</div>
@endsection