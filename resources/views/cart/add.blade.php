<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Coffee </title>
    <link rel="shortcut icon" href="{{ asset('storage/logo/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/cart_add.css') }}">
</head>

<body>
    <div class="breadcrumb">
        <a href="#">True Coffee</a> > <a href="#">sản phẩm</a> > Cafe đen
    </div>
    <div class="product-container">
        <div class="product-image">
            <img src="https://via.placeholder.com/300x400" alt="Cafe đen">
            <div class="thumbnail-images">
                <img src="https://via.placeholder.com/50x50" alt="Thumbnail 1">
                <img src="https://via.placeholder.com/50x50" alt="Thumbnail 2">
                <img src="https://via.placeholder.com/50x50" alt="Thumbnail 3">
                <img src="https://via.placeholder.com/50x50" alt="Thumbnail 4">
                <img src="https://via.placeholder.com/50x50" alt="Thumbnail 5">
            </div>
        </div>
        <div class="product-details">
            <h1>Cafe đen</h1>
            <p class="price">35 000 vnđ</p>
            <div class="options">
                <label>Tùy chọn:</label>
                <div class="option-group">
                    <span>Đá:</span>
                    <button class="option-button">ít</button>
                    <button class="option-button">nhiều</button>
                </div>
                <div class="option-group">
                    <span>Đường:</span>
                    <button class="option-button">ít</button>
                    <button class="option-button">nhiều</button>
                </div>
                <div class="option-group">
                    <span>Size:</span>
                    <button class="option-button">M</button>
                    <button class="option-button">L</button>
                </div>
            </div>
            <div class="quantity">
                <label>Số lượng:</label>
                <button id="decrease">-</button>
                <input type="text" id="quantity" value="1">
                <button id="increase">+</button>
            </div>
            <div class="notes">
                <label>Ghi chú:</label>
                <input type="text">
            </div>
            <button class="add-to-cart">Thêm vào giỏ hàng</button>
        </div>
    </div>
    <script src="{{ asset('js/cart_add.js') }}"></script>
</body>

</html>
