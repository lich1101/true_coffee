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

    </style>
</head>
<body>

@include('layout.navbar')

<div class="main-content">
    <div class="row">
        <div class="col-12 text-left" style="margin-left: 6%; margin-top:5%">
            <h1 class="product-title">Phindi Choco</h1>
        </div>
        <div class="col-4 text-center">
            <img src="{{asset('pictures/phindi.png')}}" alt="Phindi Choco" class="product-img">
        </div>
        <div class="col-6">
            <ul class="list-unstyled">
                <li><strong>Thể loại:</strong> Cà phê</li>
                <li><strong>Giá:</strong> 45,000 VND</li>
                <li class="product-desc">
                    <strong>Mô tả:</strong> PhinDi Choco - Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Choco ngọt tan mang đến hương vị mới lạ, không thể hấp dẫn hơn!
                </li>
                <li><strong>Size:</strong> S, M, L</li>
            </ul>
            <div class="text-right">
                <a href="{{ route('admin.products.index') }}" class="btn btn-brown back-button" style="background-color: #8B4513; color:white; width: 200px">Quay lại</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
