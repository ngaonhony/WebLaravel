@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3> Quản lý tap phim</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('episode.create')}}" class="btn btn-primary float-end"> Thêm tap mới</a>
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

                    <th> STT </th>
                    <th>Tên phim </th>
                    <th>TapPhim</th>
                    <th>EpsidoeName</th>
                    <th>Content</th>

                </tr>
            </thead>
            <tbody>
            @php
    $episode = $episode->reverse(); // Sắp xếp mảng theo thứ tự ngược lại
@endphp
                @foreach ($episode as $episode)
                <tr>
                    <td>{{$episode->id}}</td>
                    <td>{{$episode->phim->name}}</td>
                    <td>{{$episode->episode}}</td>
                    <td>{{$episode->episode_name}}</td>
                    <td>{{!!$episode->episode_name!!}}</td>
                    <td>
                    <form action="{{ route('episode.destroy', $episode->id) }}" method="POST" id="deleteForm" onsubmit="return confirmDelete()">
    <a href="{{ route('episode.edit', $episode->id) }}" class="btn btn-info">Sửa</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Xóa</button>
</form>

<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa tap này?');
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
<script>
    document.getElementById('deleteButton').addEventListener('click', function() {
        if (confirm('Bạn có chắc chắn muốn xóa tap này?')) {
            document.getElementById('deleteForm').submit();
        }
    });
</script>
@endsection