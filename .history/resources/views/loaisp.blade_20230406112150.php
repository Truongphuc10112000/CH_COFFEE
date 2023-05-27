@extends('layoutadmin')

@section('content')
@extends('admin.layoutadmin')

@section('content')
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th>Thêm</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($db as $loaisp)
                <tr>
                    <td>{{$loaisp ->MaLoaiSanPham}}</td>
                    <td>{{$loaisp ->TenloaiSanPham}}</td>
                    <td><a href="adminloaisp/them" class="btn btn-info fa fa-pencil">Thêm</a></td>
                    <td><a href="/categories/edit/{id}" class="btn btn-info fa fa-pencil">Sửa</a></td>
                    <td><a href="admin.loaisp/xoa/{{$loaisp->MaLSP}}" class="btn btn-danger fa fa-trash">Xóa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection
