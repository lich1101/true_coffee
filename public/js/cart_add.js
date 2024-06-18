
document.addEventListener('DOMContentLoaded', () => {
    const optionButtons = document.querySelectorAll('.option-button');

    optionButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Loại bỏ class 'selected' khỏi tất cả các nút trong cùng nhóm
            const group = button.parentElement;
            const groupButtons = group.querySelectorAll('.option-button');

            groupButtons.forEach(btn => {
                btn.classList.remove('selected');
            });

            // Thêm class 'selected' vào nút được chọn
            button.classList.add('selected');
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const decreaseButton = document.getElementById('decrease');
    const increaseButton = document.getElementById('increase');
    const quantityInput = document.getElementById('quantity');
    const addToCartButton = document.querySelector('.add-to-cart');
    // const cartCount = document.querySelector('.cart-count');

    decreaseButton.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    increaseButton.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });

    addToCartButton.addEventListener('click', function() {
        let currentCount = parseInt(cartCount.textContent);
        cartCount.textContent = currentCount + parseInt(quantityInput.value);
    });

    // Optional: Add click event to cart icon to go to cart page
    const cartIcon = document.querySelector('.cart-icon');
    cartIcon.addEventListener('click', function() {
        window.location.href = '/cart';
    });
});