<style>
    label{
        font-weight: bold;
    }

    input{
        width: 80%;
    }
</style>
@extends('layout.master')
@section('content')
    <h2>Thêm sản phẩm</h2>
    <form id="form" style="width: 60%; margin-left: 20%; margin-top: 5%" method="post" action="{{ route('admin.products.update', $product->id) }}">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="product-image" class="col-sm-2 col-form-label form-label">Ảnh sản phẩm:</label>
            <div class="col-sm-10">
                <button style="display:block;width:120px; height:30px;border:none;background-color: #BEAFAF" onclick="document.getElementById('getFile').click()">Chọn ảnh</button>
                <input type="file" id="getFile" name="image" class="form-control-file" style="display: none">
            </div>
        </div>
        <div class="form-group row">
            <label for="product-category" class="col-sm-2 col-form-label form-label">Thể loại:</label>
            <div class="col-sm-10">
                <select name="category" class="form-control" id="product-category">
                    <option>Cà phê</option>
                    <option>Trà</option>
                    <option>Nước ép</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="product-name" class="col-sm-2 col-form-label form-label">Tên sản phẩm:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="product-name" name="name" value="{{ $product->name }}">
{{--                <small class="form-text text-danger">Vui lòng kiểm tra lại thông tin</small>--}}
            </div>
        </div>
        <div class="form-group row">
            <label for="product-price" class="col-sm-2 col-form-label form-label">Giá sản phẩm:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="product-price" name="price" value="{{ $product->price }}">
{{--                <small class="form-text text-danger">Vui lòng kiểm tra lại thông tin</small>--}}
            </div>
        </div>
        <div class="form-group row">
            <label for="product-description" class="col-sm-2 col-form-label form-label">Mô tả:</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="product-description" name="description" rows="3">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div>
    </form>
    <script>
        {{--document.getElementById('form').addEventListener('submit', function(event) {--}}
        {{--    event.preventDefault();--}}
        {{--    alert('Sản phẩm được cập nhật thành công!');--}}
        {{--    window.location.href = "{{ route('admin.products.index') }}";--}}
        {{--});--}}
    </script>
@endsection
