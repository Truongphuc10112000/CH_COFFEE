@extends('layoutadmin')

@section('content')
@extends('layoutadmin')

@section('content')
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Mã Chi Tiết</th>
                <th>Mã Đơn Hàng</th>
                <th>Mã Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Giá Tiền</th>
                <th>Thêm</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($db as $chitietdonhang)
                <tr>
                    <td>{{$chitiethoadonnhap ->MaChiTiet}}</td>
                    <td>{{$chitiethoadonnhap ->MaDonHang}}</td>
                    <td>{{$chitiethoadonnhap ->MaSanPham}}</td>
                    <td>{{$chitietdonhang ->SoLuong}}</td>
                    <td>{{$chitietdonhang ->GiaTien}}</td>
                    <td><a href="adminchitietdonhang/them" class="btn btn-info fa fa-pencil">Thêm</a></td>
                    <td><a href="/categories/edit/{id}" class="btn btn-info fa fa-pencil">Sửa</a></td>
                    <td><a href="admin.chitietdonhang/xoa/{{$chitietdonhang->MaCTDH}}" class="btn btn-danger fa fa-trash">Xóa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection
