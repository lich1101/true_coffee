<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'True Coffee' }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('storage/logo/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/cart_add.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
        
        <div class="logo"><img src="{{ asset('storage/logo/logo.jpg') }}" alt="True Coffee Logo"></div>
        <input type="search" id="searchBox" placeholder="Tìm kiếm sản phẩm">
        <button class="login-btn">Đăng nhập</button>
    </header>
    <div class="content-wrapper">
        <nav>
            <ul class="category-list">
                @php
                    $categories = [
                        "Món nổi bật",
                        "Đồ uống nóng",
                        "Đồ uống lạnh",
                        "Trà pha",
                        "Đồ ăn kèm",
                    ];
                @endphp
                @foreach ($categories as $category)
                    <li>{{ $category }}</li>
                @endforeach
            </ul>
        </nav>
        <main>
            <h2>{{ 'Món nổi bật' }}</h2>
            <section class="featured" id="productList">
                @php
                    $products = [
                        ["image" => "public/pictures/Screenshot 2024-06-05 165646.png", "name" => "Hazelnut Macchiato"],
                        ["image" => "public/pictures/Screenshot 2024-06-05 170143.png", "name" => "Ristretto Bianco"],
                        ["image" => "public/pictures/Screenshot 2024-06-05 170554.png", "name" => "Café Latte"]
                    ];
                @endphp
                @foreach ($products as $product)
                    <div class="product">
                        <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                        <p class="product-name">{{ $product['name'] }}</p>
                        <button>+</button>
                    </div>
                @endforeach
            </section>
        </main>
        <section class="cart">
            <h2>Giỏ hàng của tôi <span id="clearCartBtn" class="clear-cart-btn">Xóa tất cả</span></h2>
            <p id="cartContent">Chưa có sản phẩm nào!</p>
            <p>Giá tiền:</p>
            <button class="checkout-btn">Thanh toán</button>
        </section>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
