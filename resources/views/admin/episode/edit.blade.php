@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3> Sửa tap phim </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('episode.index')}}" class="btn btn-primary float-end"> Danh sách tap phim </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('episode.update', $episode->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                                <strong> Film</strong>
                                <select name="film_id" class="form-select">
                                @foreach ($phim as $phim)
                                  <option value="{{ $phim->id }}">{{ $phim->name }}</option>
                                  @endforeach
                                </select>
                    </div>
                        <div class="form-group">
                            <strong> Tên tap phim </strong>
                            <input type="text" name="episode_name" value="{{$episode->episode_name}}" class="form-control"
                                placeholder="nhập tên tap phim" required>
                        </div>
                        <div class="form-group">
                            <strong> So tap </strong>
                            <input type="number" name="episode" value="{{$episode->episode}}" class="form-control"
                                placeholder="so tap phim" required>
                        </div>
                        <div class="form-group">
                            <strong>Content</strong>
                            <input type="text" name="content" value="{{$episode->content}}" class="form-control"
                                placeholder="nhap Link phim" required>
                        </div>
                </div>
                    <button type="submit" class="btn btn-success mt-2"> cập nhật </button>
            </form>
        </div>
    </div>
</div>
@endsection