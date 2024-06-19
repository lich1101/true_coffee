<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'True Coffee' }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="logo">{{ 'True Coffee' }}</div>
        <input type="search" id="searchBox" placeholder="Tìm kiếm sản phẩm">
        <button class="login-btn">Đăng nhập</button>
    </header>
    <div class="content-wrapper">
        <nav>
            <ul class="category-list">
                @php
                    $categories = [
                        "Món nổi bật",
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
                        ["image" => "hazelnut_macchiato.jpg", "name" => "Hazelnut Macchiato"],
                        ["image" => "ristretto_bianco.jpg", "name" => "Ristretto Bianco"],
                        ["image" => "cafe_latte.jpg", "name" => "Café Latte"]
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
            <h2>{{ 'Giỏ hàng của tôi' }}</h2>
            <p>Chưa có sản phẩm nào!</p>
            <button class="checkout-btn">Xem giỏ hàng</button>
        </section>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
