document.addEventListener('DOMContentLoaded', function () {
    const decreaseBtn = document.getElementById('decrease');
    const increaseBtn = document.getElementById('increase');
    const quantityInput = document.getElementById('quantity');

    decreaseBtn.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    increaseBtn.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
});
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