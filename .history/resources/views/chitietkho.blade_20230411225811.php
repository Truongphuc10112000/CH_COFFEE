@extends('layoutadmin')

@section('content')
@extends('layoutadmin')

@section('content')
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Mã Chi Tiết Kho</th>
                <th>Mã Kho</th>
                <th>Mã Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Thêm</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($db as $chitietkho)
                <tr>
                    <td>{{$chitietkho ->MaChiTiet}}</td>
                    <td>{{$chitietkho ->MaDonHang}}</td>
                    <td>{{$chitietkho ->MaSanPham}}</td>
                    <td>{{$chitietkho ->SoLuong}}</td>
                    <td>{{$chitietkho ->GiaTien}}</td>
                    <td><a href="adminchitietkho/them" class="btn btn-info fa fa-pencil">Thêm</a></td>
                    <td><a href="/categories/edit/{id}" class="btn btn-info fa fa-pencil">Sửa</a></td>
                    <td><a href="admin.chitietkho/xoa/{{$chitietkho->MaCTDHN}}" class="btn btn-danger fa fa-trash">Xóa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection
