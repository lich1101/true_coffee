<style type="text/css">
    th{
        text-align: center;
    }

    a{
        text-decoration: none;
    }
</style>
@extends('layout.master')
@section('content')
    <h3><b>Hóa đơn</b></h3>
    <div class="container-fluid mt-4 ">
{{--        <div class="d-flex justify-content-end mb-2">--}}
{{--            <button type="button" class="btn btn-success">--}}
{{--                <a href="{{ route('admin.products.create') }}" style="color: white; text-decoration: none">Thêm sản phẩm</a>--}}
{{--            </button>--}}
{{--        </div>--}}
        <table class="table">
            <thead class="" style="background-color: lightgrey">
            <tr>
                <th scope="col"><input type="checkbox"></th>
                <th scope="col">Mã hóa đơn</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bills as $bill)
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{$bill->id}}</td>
                    <td>{{$bill->created_at}}</td>
                    <td>{{$bill->status}}</td>
                    <td>
                        <a href="{{ route('admin.bills.show', $bill->id) }}" style="text-decoration: none">
                            <img src="{{ asset('pictures/ic_eye.png') }}" alt="">
                        </a>
                        <a href="{{ route('admin.bills.edit', $bill->id) }}" style="text-decoration: none">
                            <img src="{{ asset('pictures/clarity_note-edit-solid.png') }}" alt="">
                        </a>
                        <a type="button" data-toggle="modal" data-target="#modal" href="" style="text-decoration: none">
                            <img src="{{ asset('pictures/ic_baseline-delete-forever.png') }}" alt="">
                        </a>
                    </td>
                </tr>
            @endforeach
            <div id="modal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">XÁC NHẬN XÓA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Bạn có chắc chắn muốn xóa không</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">
                                <a href="{{ route('admin.products.index') }}" style="color: white; text-decoration: none">Có</a>
                            </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
            </tbody>
        </table>
    </div>
@endsection
