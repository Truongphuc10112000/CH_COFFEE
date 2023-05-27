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
                    <td>{{$chitiethoadonnhap ->SoLuong}}</td>
                    <td>{{$chitiethoadonnhap ->GiaTien}}</td>
                    <td><a href="adminchitiethoadonnhap/them" class="btn btn-info fa fa-pencil">Thêm</a></td>
                    <td><a href="/categories/edit/{id}" class="btn btn-info fa fa-pencil">Sửa</a></td>
                    <td><a href="admin.chitiethoadonnhap/xoa/{{$chitiethoadonnhap->MaCTDHN}}" class="btn btn-danger fa fa-trash">Xóa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection
