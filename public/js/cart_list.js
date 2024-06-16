document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('optionsModal');
    const closeBtn = document.querySelector('.close');
    const optionButtons = document.querySelectorAll('.option-button');
    const quantityControls = document.querySelectorAll('.quantity-control');
    const deleteButtons = document.querySelectorAll('.delete-button');
    const selectAllCheckbox = document.querySelector('.cart-footer input[type="checkbox"]');
    const deleteAllButton = document.querySelector('.delete-all-button');
    const checkoutButton = document.querySelector('.checkout-button');
    const totalPriceElement = document.querySelector('.total-price');

    // Open modal on option button click
    optionButtons.forEach(button => {
        button.addEventListener('click', () => {
            modal.style.display = 'block';
        });
    });

    // Close modal when close button is clicked
    closeBtn.onclick = () => {
        modal.style.display = 'none';
    };

    // Close modal when clicking outside of the modal
    window.onclick = (event) => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };

    // Quantity control
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

    // Delete item
    deleteButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const row = event.target.closest('tr');
            row.remove();
            updateTotalPrice();
        });
    });

    // Select all items
    selectAllCheckbox.addEventListener('change', (event) => {
        const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = event.target.checked;
        });
    });

    // Delete all selected items
    deleteAllButton.addEventListener('click', () => {
        const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]:checked');
        checkboxes.forEach(checkbox => {
            const row = checkbox.closest('tr');
            row.remove();
        });
        updateTotalPrice();
    });

    // Checkout button
    checkoutButton.addEventListener('click', () => {
        alert('Thanh toán thành công!');
    });

    // Update total price
    function updateTotalPrice() {
        let totalPrice = 0;
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            const priceElement = row.querySelector('.price');
            const price = parseInt(priceElement.textContent.replace(' vnđ', '').replace(' ', ''));
            const quantity = parseInt(row.querySelector('.quantity-control input').value);
            totalPrice += price * quantity;
        });
        totalPriceElement.textContent = `${totalPrice.toLocaleString()} vnđ`;
    }

    // Initial total price calculation
    updateTotalPrice();
});