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
                @foreach ($cart_items as $cart_item)
                    <tr>
                        <td class="product">
                            <img src="{{ asset('storage/' . $cart_item->image) }}" alt="Cafe đen">
                            <span>{{ $cart_item->name }}</span>
                        </td>
                        <td>
                            <button class="option-button" data-product-id="{{ $cart_item->id }}">Tùy chọn ▶</button>
                            <!-- Modal cho sản phẩm hiện tại -->
                            <div class="modal" id="optionsModal-{{ $cart_item->id }}"
                                data-product-id="{{ $cart_item->id }}">
                                <div class="modal-content">
                                    <div class="option-group">
                                        <span>Đá:</span>
                                        <input type="radio" id="ice-it-{{ $cart_item->id }}"
                                            name="option1-{{ $cart_item->id }}" value="0"
                                            {{ $cart_item->option1 == 0 ? 'checked' : '' }}>
                                        <label for="ice-it-{{ $cart_item->id }}">ít</label>
                                        <input type="radio" id="ice-nhieu-{{ $cart_item->id }}"
                                            name="option1-{{ $cart_item->id }}" value="1"
                                            {{ $cart_item->option1 == 1 ? 'checked' : '' }}>
                                        <label for="ice-nhieu-{{ $cart_item->id }}">nhiều</label>
                                    </div>
                                    <div class="option-group">
                                        <span>Đường:</span>
                                        <input type="radio" id="sugar-it-{{ $cart_item->id }}"
                                            name="option2-{{ $cart_item->id }}" value="0"
                                            {{ $cart_item->option2 == 0 ? 'checked' : '' }}>
                                        <label for="sugar-it-{{ $cart_item->id }}">ít</label>
                                        <input type="radio" id="sugar-nhieu-{{ $cart_item->id }}"
                                            name="option2-{{ $cart_item->id }}" value="1"
                                            {{ $cart_item->option2 == 1 ? 'checked' : '' }}>
                                        <label for="sugar-nhieu-{{ $cart_item->id }}">nhiều</label>
                                    </div>
                                    <div class="option-group">
                                        <span>Size:</span>
                                        <input type="radio" id="size-m-{{ $cart_item->id }}"
                                            name="option3-{{ $cart_item->id }}" value="0"
                                            {{ $cart_item->option3 == 0 ? 'checked' : '' }}>
                                        <label for="size-m-{{ $cart_item->id }}">M</label>
                                        <input type="radio" id="size-l-{{ $cart_item->id }}"
                                            name="option3-{{ $cart_item->id }}" value="1"
                                            {{ $cart_item->option3 == 1 ? 'checked' : '' }}>
                                        <label for="size-l-{{ $cart_item->id }}">L</label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        {{-- <td><span class="price">{{ $cart_item->price }} vnđ</span></td> --}}
                        <td><span class="price" data-base-price="{{ $cart_item->price }}">{{ $cart_item->price }}
                                vnđ</span></td>

                        <td>
                            <div class="quantity-control">
                                <button class="decrease">-</button>
                                <input type="text" value="{{ $cart_item->quantity }}" readonly>
                                <button class="increase">+</button>
                            </div>
                        </td>
                        <td><input type="checkbox"></td>
                        <td><button class="delete-button">xóa</button></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="cart-footer">
            <label><input type="checkbox"> Chọn tất cả</label>
            <button class="delete-all-button">Xóa</button>
            <span>Tổng số tiền: <span class="total-price">0 vnđ</span></span>
            <button class="checkout-button">Thanh toán</button>
        </div>

    </div>
    <script src="{{ asset('js/cart_list.js') }}"></script>
</body>

</html>
