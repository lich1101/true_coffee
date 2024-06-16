<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('storage/logo/logo.jpg') }}" type="image/x-icon">
    <title>True Coffee</title>
    <link rel="stylesheet" href="{{ asset('css/cart_list.css') }}">
</head>

<body>
    <div class="cart-container">
        <div class="breadcrumb">
            <a href="#">True Coffee</a> > Giỏ hàng
        </div>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Tùy chọn</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Chọn</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product">
                        <img src="cafe-den.jpg" alt="Cafe đen">
                        <span>Cafe đen</span>
                    </td>
                    <td><button class="option-button">Tùy chọn &#x25BC</button></td>
                    <td><span class="price">35 000 vnđ</span></td>
                    <td>
                        <div class="quantity-control">
                            <button class="decrease">-</button>
                            <input type="text" value="1" readonly>
                            <button class="increase">+</button>
                        </div>
                    </td>
                    <td><input type="checkbox"></td>
                    <td><button class="delete-button">xóa</button></td>
                </tr>
                <tr>
                    <td class="product">
                        <img src="bac-xiu.jpg" alt="Bạc xỉu">
                        <span>Bạc xỉu</span>
                    </td>
                    <td><button class="option-button">Tùy chọn &#x25BC;</button></td>
                    <td><span class="price">30 000 vnđ</span></td>
                    <td>
                        <div class="quantity-control">
                            <button class="decrease">-</button>
                            <input type="text" value="1" readonly>
                            <button class="increase">+</button>
                        </div>
                    </td>
                    <td><input type="checkbox"></td>
                    <td><button class="delete-button">xóa</button></td>
                </tr>
                <tr>
                    <td class="product">
                        <img src="cafe-muoi.jpg" alt="Cafe muối">
                        <span>Cafe muối</span>
                    </td>
                    <td><button class="option-button">Tùy chọn &#x25BC;</button></td>
                    <td><span class="price">30 000 vnđ</span></td>
                    <td>
                        <div class="quantity-control">
                            <button class="decrease">-</button>
                            <input type="text" value="2" readonly>
                            <button class="increase">+</button>
                        </div>
                    </td>
                    <td><input type="checkbox"></td>
                    <td><button class="delete-button">xóa</button></td>
                </tr>
            </tbody>
        </table>
        <div class="cart-footer">
            <label><input type="checkbox"> Chọn tất cả</label>
            <button class="delete-all-button">Xóa</button>
            <span>Tổng số tiền: <span class="total-price">0 vnđ</span></span>
            <button class="checkout-button">Thanh toán</button>
        </div>
    </div>

    <div class="modal" id="optionsModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Tùy chọn</h2>
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
                <button class="option-button selected" data-price="0">M</button>
                <button class="option-button" data-price="5000">L</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/cart_list.js') }}"></script>
</body>

</html>
