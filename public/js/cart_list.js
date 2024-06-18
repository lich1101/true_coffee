document.addEventListener('DOMContentLoaded', () => {
    const optionButtons = document.querySelectorAll('.option-button');

    optionButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài

            const productId = button.dataset.productId;
            const modalId = `optionsModal-${productId}`;
            const modal = document.querySelector(`#${modalId}`);

            // Nếu modal hiện tại đang mở, đóng nó và đặt lại biểu tượng
            if (modal.style.display === 'block') {
                modal.style.display = 'none';
                button.textContent = 'Tùy chọn ▶';
            } else {
                // Tắt tất cả các modal khác và đặt lại biểu tượng nút "Tùy chọn"
                document.querySelectorAll('.modal').forEach(m => m.style.display = 'none');
                optionButtons.forEach(btn => btn.textContent = 'Tùy chọn ▶');

                // Đặt vị trí của modal ngay dưới nút tùy chọn
                const rect = button.getBoundingClientRect();
                modal.style.top = `${rect.bottom + window.scrollY}px`;
                modal.style.left = `${rect.left + window.scrollX}px`;

                // Hiển thị modal và thay đổi biểu tượng nút
                modal.style.display = 'block';
                button.textContent = 'Tùy chọn ▼';

                // Thêm sự kiện click vào document để đóng modal khi click ngoài
                document.addEventListener('click', (event) => {
                    if (!modal.contains(event.target) && event.target !== button) {
                        modal.style.display = 'none';
                        button.textContent = 'Tùy chọn ▶';
                    }
                }, { once: true });
            }
        });
    });

    // Quantity control
    const quantityControls = document.querySelectorAll('.quantity-control');
    quantityControls.forEach(control => {
        const decreaseButton = control.querySelector('.decrease');
        const increaseButton = control.querySelector('.increase');
        const input = control.querySelector('input');

        decreaseButton.addEventListener('click', () => {
            let quantity = parseInt(input.value);
            if (quantity > 1) {
                input.value = quantity - 1;
                updateTotalPrice();
            }
        });

        increaseButton.addEventListener('click', () => {
            let quantity = parseInt(input.value);
            input.value = quantity + 1;
            updateTotalPrice();
        });
    });
// delete item



    // Delete item
    const deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const row = event.target.closest('tr');
            const cartItemId = button.dataset.cartItemId; // Lấy cart_item_id từ hàng (row)

            const confirmDelete = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');
            if (!confirmDelete) {
                return; // Không xóa nếu người dùng không xác nhận
            }
            // Gửi yêu cầu xóa bằng AJAX
            fetch(`/cart/${cartItemId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    row.remove();
                    updateTotalPrice();
                   
                } else {
                    alert('Xóa sản phẩm không thành công');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });

    // Select all items
    const selectAllCheckbox = document.querySelector('.cart-footer input[type="checkbox"]');
    selectAllCheckbox.addEventListener('change', (event) => {
        const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = event.target.checked;
        });
    });

    // Delete all selected items
    const deleteAllButton = document.querySelector('.delete-all-button');
    deleteAllButton.addEventListener('click', () => {
        const confirmDelete = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');
        if (!confirmDelete) {
            return; // Không xóa nếu người dùng không xác nhận
        }
        const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]:checked');
        checkboxes.forEach(checkbox => {
            const row = checkbox.closest('tr');
            const cartItemId = row.dataset.cartItemId; // Lấy cart_item_id từ hàng (row)
          
            // Gửi yêu cầu xóa bằng AJAX cho mỗi sản phẩm được chọn
            fetch(`/cart/${cartItemId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    row.remove();
                    updateTotalPrice();
                } else {
                    alert('Xóa sản phẩm không thành công');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });

    // Checkout button
    const checkoutButton = document.querySelector('.checkout-button');
    checkoutButton.addEventListener('click', () => {
        alert('Thanh toán thành công!');
    });

    // Handle size change
    document.querySelectorAll('.option-group input[name^="option3-"]').forEach(radio => {
        radio.addEventListener('change', (event) => {
            const productId = event.target.closest('.modal').dataset.productId;
            const priceElement = document.querySelector(`.option-button[data-product-id="${productId}"]`).closest('tr').querySelector('.price');
            const basePrice = parseInt(priceElement.dataset.basePrice);
            if (event.target.value == '1') { // Size L
                priceElement.textContent = `${(basePrice + 5000).toLocaleString()} vnđ`;
            } else { // Size M
                priceElement.textContent = `${basePrice.toLocaleString()} vnđ`;
            }
            updateTotalPrice();
        });
    });

    // Update total price
    function updateTotalPrice() {
        let totalPrices = 0;
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            const priceElement = row.querySelector('.price');
            let price = parseInt(priceElement.textContent.replace(' vnđ', '').replace(' ', ''));

            const quantityInput = row.querySelector('.quantity-control input');
            let quantity = parseInt(quantityInput.value);

            totalPrices += price * quantity;
        });
        const totalPriceElement = document.querySelector('.total-price');
        totalPriceElement.textContent = `${totalPrices.toLocaleString()} vnđ`;
    }

    // Initial total price calculation
    updateTotalPrice();
});
