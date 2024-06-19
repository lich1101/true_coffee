<style>
    .container {
        width: 40%;
        margin-top: 50px;
    }
    .btn-custom {
        min-width: 100px;
    }
    .form-control-plaintext {
        display: flex;
        justify-content: space-between;
    }
    .quantity-control {
        display: flex;
        align-items: center;
    }
    .quantity-control button {
        width: 30px;
        height: 30px;
        padding: 0;
    }

    label
    {
        font-size: 20px
    }

    form{
        width: 100%;
        background-color: #fff;
        padding-left: 33%;
        padding-top: 30px;
        padding-bottom: 30px;

    }
</style>
@extends('layout.master')
@section('content')
    <div class="container">
        <h3 class="text-center"><strong>Sửa hóa đơn</strong></h3>
        <form id="form">
            <div class="form-group row">
                <div class="col-2">
                    <label for="invoice-id"><strong>Mã hóa đơn:</strong></label>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control-plaintext" id="invoice-id" readonly value="HD00250" style="font-weight: bold">
                </div>
            </div>
            <div class="form-group">
                <label for="date"><strong>Ngày tạo:</strong></label>
                <div style="width: 20%">
                    <input type="date" class="form-control" id="date" value="2024-06-05" width="20%">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label><strong>Sản phẩm</strong></label>
                </div>
                <div class="col-2">
                    <label><strong>Số lượng</strong></label>
                </div>
                <div class="col-3">
                    <label><strong>Giá</strong></label>
                </div>
            </div>
            <div class="form-group">
                <div class=" row">
                    <div class="col-2">
                        <input type="text" value="Phindi Choco" class="form-control" style="font-weight: bold">
                    </div>
                    <div class="quantity-control col-2">
                        <button type="button" class="btn btn-outline-secondary">-</button>
                        <input type="text" class="form-control" value="1" style="width: 50px; text-align: center;" readonly>
                        <button type="button" class="btn btn-outline-secondary">+</button>
                    </div>
                    <div class="col-2">50,000</div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <input type="text" value="Latte" class="form-control" style="font-weight: bold">
                    </div>
                    <div class="quantity-control col-2">
                        <button type="button" class="btn btn-outline-secondary">-</button>
                        <input type="text" class="form-control" value="1" style="width: 50px; text-align: center;" readonly>
                        <button type="button" class="btn btn-outline-secondary">+</button>
                    </div>
                    <div class="col-2">50,000</div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="total-amount"><strong>Tổng tiền</strong></label>
                </div>
                <div class="col-2"></div>
                <div class="col-2">
                    <input type="text" class="form-control-plaintext" id="total-amount" readonly value="100,000" style="font-weight: bold">
                </div>
            </div>
            <div class="d-flex row">
                <div class="col-2"></div>
                <div class="col-5">
                    <button type="submit" class="btn btn-primary btn-custom mr-2">Xác nhận</button>
                    <button type="button" class="btn btn-custom" style="background-color: #E77D00; color: white">
                        <a href="{{ route('admin.bills.index') }}" style="text-decoration: none; color: white">Quay lại</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Thông tin hóa đơn đã được cập nhật!');
            window.location.href = "{{ route('admin.bills.index') }}";
        });
    </script>
@endsection
