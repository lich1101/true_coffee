<style type="text/css">
    th{
        text-align: center;
    }

    a{
        text-decoration: none;
    }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@extends('layout.master')
@section('content')
    <h3><b>Sản phẩm</b></h3>
    <div class="container-fluid mt-4 ">
        <div class="d-flex justify-content-end mb-2">
            <button type="button" class="btn btn-success">
                <a href="{{ route('admin.products.create') }}" style="color: white; text-decoration: none">Thêm sản phẩm</a>
            </button>
        </div>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status')  }}
            </div>
        @endif
        <table class="table">
            <thead class="" style="background-color: lightgrey">
            <tr>
                <th scope="col"><input type="checkbox"></th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category}}</td>
                        <td>
                            <button style="border: none; background-color: #fff">
                                <a href="{{ route('admin.products.show', $product->id) }}" style="text-decoration: none">
                                    <img src="{{ asset('pictures/ic_eye.png') }}" alt="">
                                </a>
                            </button>
                            <button style="border: none; background-color: #fff">
                                <a href="{{ route('admin.products.edit', $product->id) }}" style="text-decoration: none">
                                    <img src="{{ asset('pictures/clarity_note-edit-solid.png') }}" alt="">
                                </a>
                            </button>
                            <!-- Button trigger modal -->
                            <button data-bs-toggle="modal" data-id="#A{{ $product->id }}" data-bs-target="#A{{ $product->id }}" style="border: none; background-color: #fff">
                                <a href="#" style="text-decoration: none">
                                    <img src="{{ asset('pictures/ic_baseline-delete-forever.png') }}" alt="">
                                </a>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="A{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">XÁC NHẬN XÓA</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn muốn xóa không?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Có</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
