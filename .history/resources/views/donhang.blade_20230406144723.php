@extends('layoutadmin')

@section('content')
@extends('layoutadmin')

@section('content')
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Mã Đơn Hàng</th>
                <th>Ngày Đặt</th>
                <th>Trạng Thái</th>
                <th>Mã Khách Hàng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($db as $donhang)
                <tr>
                    <td>{{$loaisp ->MaLoaiSanPham}}</td>
                    <td>{{$loaisp ->TenLoaiSanPham}}</td>
                    <td><a href="adminloaisp/them" class="btn btn-info fa fa-pencil">Thêm</a></td>
                    <td><a href="/categories/edit/{id}" class="btn btn-info fa fa-pencil">Sửa</a></td>
                    <td><a href="admin.loaisp/xoa/{{$loaisp->MaLSP}}" class="btn btn-danger fa fa-trash">Xóa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection
