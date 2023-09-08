document.addEventListener("DOMContentLoaded", function () {
    const cartItemsElement = document.getElementById('cartItems');

    // Initialize cart as an empty array
    let shoppingCart = [];

    // Event listener for "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('.product__button');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productName = button.getAttribute('data-product');
            const productPrice = parseFloat(button.getAttribute('data-price'));

            // Add the product to the shopping cart
            shoppingCart.push({ name: productName, price: productPrice });

            // Update the cart display in the navigation bar
            updateCart();
        });
    });

    // Function to update the cart display
    function updateCart() {
        cartItemsElement.innerHTML = '';

        if (shoppingCart.length === 0) {
            cartItemsElement.innerHTML = '<p>No items in cart.</p>';
        } else {
            let total = 0;
            shoppingCart.forEach(item => {
                cartItemsElement.innerHTML += `<li>${item.name} - $${item.price.toFixed(2)}</li>`;
                total += item.price;
            });
            cartItemsElement.innerHTML += `<li><strong>Total: $${total.toFixed(2)}</strong></li>`;
        }
    }
});
