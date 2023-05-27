@extends('layoutadmin')

@section('content')
@extends('layoutadmin')

@section('content')
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Mã Chi Tiết</th>
                <th>Nội Dung</th>
                <th>Ảnh Chi Tiết Tin Tức</th>
                <th>Mã Tin Tức</th>
                <th>Thêm</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($db as $chitiettintuc)
                <tr>
                    <td>{{$chitiettintuc ->MaChiTiet}}</td>
                    <td>{{$chitiettintuc ->NoiDung}}</td>
                    <td>{{$chitiettintuc ->AnhChiTietTinTuc}}</td>
                    <td>{{$chitiettintuc ->SoLuong}}</td>
                    <td>{{$chitiettintuc ->GiaTien}}</td>
                    <td><a href="adminchitiettintuc/them" class="btn btn-info fa fa-pencil">Thêm</a></td>
                    <td><a href="/categories/edit/{id}" class="btn btn-info fa fa-pencil">Sửa</a></td>
                    <td><a href="admin.chitiettintuc/xoa/{{$chitiettintuc->MaCTt}}" class="btn btn-danger fa fa-trash">Xóa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection
