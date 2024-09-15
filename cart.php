<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <h1>Cart Contents</h1>

    <ul id="cart-items-list">
        <!-- Cart items will be added here dynamically using JavaScript -->
    </ul>

    <p>Total Amount: <span id="total-amount"></span></p>

    <form id="checkout-form" method="post" action="process_order.php">
        <h2>Fill this form to place an order</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
    
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}"><br><br>
    
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>
    
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>
    
        <input type="submit" class="btn btn-dark text-decoration-none" value="Place Order">
    </form>

    <script>
        // Retrieve the cart items string from localStorage
        const cartItemsString = localStorage.getItem('cartItems');

        // Function to calculate and display the total amount
        function calculateTotalAmount() {
            const totalAmountElement = document.getElementById('total-amount');
            const cartItemsArray = cartItemsString.split(';');
            const totalAmount = cartItemsArray.reduce((total, item) => {
                const [, , price] = item.split(':');
                return total + parseFloat(price);
            }, 0);
            totalAmountElement.textContent = 'Rs' + totalAmount.toFixed(2);
        }

        // Function to display cart items
        function displayCartItems() {
            const cartItemsList = document.getElementById('cart-items-list');
            const cartItemsArray = cartItemsString.split(';');

            cartItemsArray.forEach((item) => {
                const [id, name, price] = item.split(':');
                const listItem = document.createElement('li');
                listItem.textContent = `${name} - Rs ${parseFloat(price).toFixed(2)}`;
                cartItemsList.appendChild(listItem);
            });
        }

        // Call the functions to display cart items and total amount
        displayCartItems();
        calculateTotalAmount();
    </script>
</body>
</html>