<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrueCoffee Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            margin: 0;
        }
        .navbar {
            width: 100%;
            background-color: #fff;
            border-bottom: 1px solid #e9ecef;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        /*.sidebar {*/
        /*    height: 100vh;*/
        /*    position: fixed;*/
        /*    top: 56px; !* height of the navbar *!*/
        /*    width: 235px;*/
        /*    padding-top: 20px;*/
        /*    overflow-y: auto;*/
        /*}*/
        /*.sidebar a {*/
        /*    text-decoration: none;*/
        /*    font-size: 18px;*/
        /*    color: #000;*/
        /*    display: block;*/
        /*    padding: 15px 20px;*/
        /*}*/
        .sidebar a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .main-content {
            background-color: #f8f9fa;
            padding: 20px;
            padding-top: 76px; /* height of the navbar + extra padding */
            flex: 1;
        }
        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        li{
            font-size: 20px;
        }
        .product-container {
            /*max-width: 800px;*/
            margin: auto;
            padding: 20px;
        }
        .product-title {
            font-size: 3rem;
            font-weight: bold;
            color: #8B4513; /* Adjust color to match the design */
        }
        .product-img {
            max-width: 100%;
            height: auto;
        }
        .product-desc {
            margin-top: 20px;
        }
        .back-button {
            margin-top: 20px;
        }
        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }
        .row{
            margin: 10px;
            font-size: 23px;
        }
    </style>
</head>
<body>

@include('layout.navbar')

<div class="main-content">
    <div class="container invoice-container" style="margin-top: 7%">
{{--        <div class="text-center">--}}
{{--            <h1 class="invoice-title">Chi tiết hóa đơn</h1>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-2"><strong>Mã hóa đơn:</strong></div>
            <div class="col-6 text-left">HD002250</div>
        </div>
        <div class="row">
            <div class="col-2"><strong>Ngày tạo:</strong></div>
            <div class="col-6 text-left">05/06/2024</div>
        </div>
        <div class="row">
            <div class="col-2"><strong>Khách hàng:</strong></div>
            <div class="col-6 text-left">Nguyễn Văn A</div>
        </div>
        <div class="row">
            <div class="col-2"><strong>Sản phẩm:</strong></div>
            <div class="col-2 text-left">Phindi Choco</div>
            <div class="col-1 text-left">1</div>
            <div class="col-1 text-left">50000</div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-2 text-left">Phindi Choco</div>
            <div class="col-1 text-left">1</div>
            <div class="col-1 text-left">50000</div>
        </div>
        <div class="row">
            <div class="col-2"><strong>Tổng tiền:</strong></div>
            <div class="col-2 text-left"></div>
            <div class="col-1 text-left"></div>
            <div class="col-2 text-left">100,000 VND</div>
        </div>
        <div class="row">
            <div class="col-2"><strong>Trạng thái:</strong></div>
            <div class="col-6 text-left">Đã thanh toán</div>
        </div>
        <div class="row">
            <div class="col-2"><strong></strong></div>
            <div class="col-2 text-left"></div>
            <div class="col-1 text-left"></div>
            <div class="col-2 text-left">
                <a href="{{ route('admin.bills.index') }}" class="btn back-button" style="background-color: saddlebrown;color: white; width: 200px">Quay lại</a>
            </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>

