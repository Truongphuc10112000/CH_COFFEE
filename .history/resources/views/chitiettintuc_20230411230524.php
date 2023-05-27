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
            @foreach($db as $chitiet)
                <tr>
                    <td>{{$chitietkho ->MaChiTiet}}</td>
                    <td>{{$chitietkho ->MaDonHang}}</td>
                    <td>{{$chitietkho ->MaSanPham}}</td>
                    <td>{{$chitietkho ->SoLuong}}</td>
                    <td>{{$chitietkho ->GiaTien}}</td>
                    <td><a href="adminchitietkho/them" class="btn btn-info fa fa-pencil">Thêm</a></td>
                    <td><a href="/categories/edit/{id}" class="btn btn-info fa fa-pencil">Sửa</a></td>
                    <td><a href="admin.chitietkho/xoa/{{$chitietkho->MaCTK}}" class="btn btn-danger fa fa-trash">Xóa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection
