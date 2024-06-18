<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Coffee </title>
    <link rel="shortcut icon" href="{{ asset('storage/logo/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/cart_add.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    {{-- @dd($product) --}}
    @if (isset($errors) && $errors->any())
        <div id="error-popup" class="popup">
            <div class="popup-content">
                <span class="close-btn" onclick="closePopup()">&times;</span>
                <ul>
                    @foreach ($errors->messages() as $error)
                        <li>
                            {{ $error[0] }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="breadcrumb">
            <a href="#">True Coffee</a> > <a href="#">sản phẩm</a> > {{ $product->name }}
        </div>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Cafe đen">
                <div class="thumbnail-images"></div>
            </div>

            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="product-details">
                <h1>{{ $product->name }}</h1>
                <p class="price">{{ $product->price }} vnđ</p>
                <input type="hidden" name="price" value="{{ $product->price }}">
                <div class="options">
                    <label>Tùy chọn:</label>
                    <div class="option-group">
                        <span>Đá:</span>
                        <input type="radio" id="ice-it" name="option1" value="0">
                        <label for="ice-it">ít</label>
                        <input type="radio" id="ice-nhieu" name="option1" value="1">
                        <label for="ice-nhieu">nhiều</label>
                    </div>
                    <div class="option-group">
                        <span>Đường:</span>
                        <input type="radio" id="sugar-it" name="option2" value="0">
                        <label for="sugar-it">ít</label>
                        <input type="radio" id="sugar-nhieu" name="option2" value="1">
                        <label for="sugar-nhieu">nhiều</label>
                    </div>
                    <div class="option-group">
                        <span>Size:</span>
                        <input type="radio" id="size-m" name="option3" value="0">
                        <label for="size-m">M</label>
                        <input type="radio" id="size-l" name="option3" value="1">
                        <label for="size-l">L</label>
                    </div>

                </div>

                <div class="quantity">
                    <label>Số lượng:</label>
                    <div class="cust_quan">
                        <button type="button" id="decrease">-</button>
                        <input type="text" name="quantity" id="quantity" value="1">
                        <button type="button" id="increase">+</button>
                    </div>
                </div>
                <div class="notes">
                    <label>Ghi chú:</label>
                    <input type="text" name="notes">
                </div>
                <button class="add-to-cart" type="submit">Thêm vào giỏ hàng</button>
            </div>
        </div>
    </form>

    <div class="cart-icon">
        <p class="icon_cart_fa">
            <i class="fa-solid fa-cart-shopping"></i>
        </p>
        <div class="cart-count">1</div>
    </div>
    <script src="{{ asset('js/cart_add.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (isset($errors) && $errors->any())
                document.getElementById('error-popup').style.display = 'block';
            @endif
        });

        function closePopup() {
            document.getElementById('error-popup').style.display = 'none';
        }
    </script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            @if (session()->has('success'))
                {
                    toastr.success('{{ session()->get('success') }}')
                }
            @elseif (session()->has('error')) {
                    toastr.danger('{{ session()->get('error') }}')
                }
            @endif
        });
    </script>

</body>

</html>
