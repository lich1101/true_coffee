const products = document.querySelectorAll('.product button');
const cart = document.querySelector('.cart p:first-of-type');
let cartCount = 0;

products.forEach(button => {
    button.addEventListener('click', () => {
        cartCount++;
        cart.textContent = `Có ${cartCount} sản phẩm trong giỏ!`;
    });
});

document.getElementById('searchBox').addEventListener('input', function() {
    const searchQuery = this.value.toLowerCase();
    const products = document.querySelectorAll('.product');

    let hasResults = false; // Biến để kiểm tra xem có kết quả hay không

    products.forEach(function(product) {
        const productName = product.querySelector('.product-name').textContent.toLowerCase();
        if (productName.includes(searchQuery)) {
            product.style.display = 'block'; // Hiển thị sản phẩm phù hợp
            hasResults = true; // Đánh dấu là có kết quả
        } else {
            product.style.display = 'none'; // Ẩn sản phẩm không phù hợp
        }
    });

    // if (!hasResults && searchQuery) {
    //     alert('Không tìm thấy sản phẩm phù hợp'); // Hiển thị thông báo nếu không có kết quả
    // }
});
