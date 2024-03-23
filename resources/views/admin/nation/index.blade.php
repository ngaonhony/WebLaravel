@extends('layouts.app')

@section('content')
<div class="container">
    <div class='card'>
        <div class='card-header'>
            <div class="row">
                <div class="col-md-6">
                    <h3> Quản lý quốc gia</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('nation.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            @if (Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bordered" id="phim">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Tên quốc gia</th>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nation as $nation)
                    <tr>
                        <td>{{$nation->id}} </td>
                        <td>{{$nation->name}} </td>
                        <td>
                            <form action="{{route('nation.destroy', $nation->id)}}" method="POST" id="deleteForm" onsubmit="return confirmDelete()">
                                <a href="{{route('nation.edit', $nation->id)}}" class="btn btn-info"> sửa </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa phim này?');
    }
</script>
        </div>
    </div>
</div>
@endsection