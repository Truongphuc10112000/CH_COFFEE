@extends('layoutadmin')

@section('content')
@extends('layoutadmin')

@section('content')
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Mã Chi Tiết KHo</th>
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
            @foreach($db as $chitiethoadonnhap)
                <tr>
                    <td>{{$chitiethoadonnhap ->MaChiTiet}}</td>
                    <td>{{$chitiethoadonnhap ->MaDonHang}}</td>
                    <td>{{$chitiethoadonnhap ->MaSanPham}}</td>
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
