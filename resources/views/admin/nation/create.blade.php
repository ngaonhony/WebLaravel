@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> thêm quốc gia </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('nation.index')}}" class="btn btn-primary float-end"> Danh sách quốc gia </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('nation.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <strong> Tên quốc gia </strong>
                            <input type="text" name="name" class="form-control" placeholder="nhập quốc gia" required>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2"> lưu </button>
            </form>
        </div>
    </div>
</div>
@endsection