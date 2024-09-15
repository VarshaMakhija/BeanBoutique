<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    
    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
    <!-- MAIN MENU FOR SMALLER DEVICES -->
    <nav class="navbar navbar-expand-lg custom-navbar justify-content-center">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#home" class="text-decoration-none">Home</a>
            </li>
            <li class="nav-item">
                <a href="#about" class="text-decoration-none">About</a>
            </li>
            <li class="nav-item">
                <a href="#menu" class="text-decoration-none">Menu</a>
            </li>
            <li class="nav-item">
                <a href="#gallery" class="text-decoration-none">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="text-decoration-none">Contact</a>
            </li>
        </ul>
        <div class="search-box">
            <input type="text" placeholder="Search">
            <button type="button" class="search-button">Search</button>
        </div>

        <!-- Cart button container -->
        <div class="cart-button-container">
            <a href="#" class="cart-button" onclick="toggleCartList()"><i class="fas fa-shopping-cart"></i></a>
        </div>
        <!-- Cart list container -->
        <div class="cart-list-container">
            <!-- Cart list, initially hidden -->
            <ul id="cart-items" class="cart-items" style="display: none;"></ul>
        </div>
    </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="home" id="home">
        <div class="content">
            <h3>Welcome to coffee culture!</h3>
            <p>
                <strong>We are open from 11:00 AM to 12:00 AM.</strong>
            </p>
            <a href="#menu" class="btn btn-dark text-decoration-none">Order Now!</a>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="about" id="about">
        <h1 class="heading"> <span>About</span> Us</h1>
        <div class="row g-0">
            <div class="image">
                <img src="./Images/about-img.png" alt="" class="img-fluid">
            </div>
            <div class="content">
                <h3>your daily dose of Caffeine Delight</h3>
                <p>
                    <?php
                        $aboutText = "At Coffee Culture, we are passionate about coffee and believe
                        that every cup tells a story. We are a cozy coffee shop located
                        in the heart of the city, dedicated to providing an exceptional
                        coffee experience to our customers. Our love for coffee has led
                        us on a voyage of exploration and discovery, as we travel the
                        world in search of the finest coffee beans, carefully roasted
                        and brewed to perfection.";
                        echo $aboutText;
                    ?>
                </p>
                <p>
                    <?php
                        $aboutText2 = "We are a cozy coffee shop dedicated to serving high-quality, handcrafted beverages in a relaxed
                        environment. Welcome to Coffee Culture, where every cup tells a story. Our journey began with a
                        passion for crafting exceptional coffee experiences. We believe that coffee is more than just a drink; it's a
                        catalyst for meaningful connections and moments of delight.";
                        echo $aboutText2;
                    ?>
                </p>
                <a href="#" class="btn btn-dark text-decoration-none">Learn More</a>
            </div>
        </div>
    </section>

<!-- MENU SECTION -->
<section class="menu" id="menu">
    <h1 class="heading">Our <span>Menu</span></h1>
    <div class="box-container">
        <div class="container">
            <div class="row">
                <?php
                $products = [
                    ["product1", "Americano - Hot Espresso", 500, "./Images/cart-item-1.png"],
                    ["product2", "Colombian Supremo Cup", 550, "./Images/cart-item-2.png"],
                    ["product3", "Nitro Cold Brew w/ Straw", 450, "./Images/cart-item-3.png"],
                    ["product4", "Seasonal Single-Origin", 600, "./Images/cart-item-4.png"],
                    ["product5", "Indonesian Sumatra Mandheling", 500, "./Images/cart-item-5.png"],
                    ["product6", "Mint Mojito Iced Coffee", 450, "./Images/cart-item-6.png"],
                    
                ];

                foreach ($products as $product) {
                    echo '<div class="col-md-4">';
                    echo '<div class="box">';
                    echo '<img src="' . $product[3] . '" alt="" class="product-img" id="' . $product[0] . '">';
                    echo '<h3 class="product-title" data-product-id="' . $product[0] . '" data-product-name="' . $product[1] . '" data-product-price="' . $product[2] . '">' . $product[1] . '</h3>';
                    echo '<div class="price">Rs.' . $product[2] . '</div>';
                    echo '<a class="btn add-cart" onclick="addToCart(\'' . $product[0] . '\')">Add to Cart</a>';
                    echo '</div>';
                    echo '</div><br />';
                }
                ?>
            </div>
        </div>
    </div>
</section>
>

    <!-- GALLERY SECTION -->
    <section class="gallery" id="gallery">
        <h1 class="heading">The <span>Gallery</span></h1>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <?php
                        $galleryImages = [
                            "./Images/gallery1.jpg",
                            "./Images/gallery2.jpg",
                            "./Images/gallery3.jpg",
                            "./Images/gallery4.jpg",
                            "./Images/gallery5.jpg",
                            "./Images/gallery6.jpg",
                        ];

                        foreach ($galleryImages as $image) {
                            echo '<div class="col-md-4">';
                            echo '<div class="box">';
                            echo '<div class="image">';
                            echo '<img src="' . $image . '" alt="">';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div><br />
            </div>
        </div>
    </section>

    <!-- CONTACT US SECTION -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>Contact</span> Us</h1>
        
        <address >
            <p>Visit us at: Coffee street,123,Bandra(E)</p>
            <p>Email: coffeeculture@gmail.com</p>
            <p>Phone: 5879346780</p>
        </address>
        
    </section>

    <!-- FOOTER SECTION -->
    <section class="footer">
        <div class="footer-container">

            <div class="credit">
                <hr /><br />
                <h2>Coffee Culture © <?php echo date("Y"); ?> | All Rights Reserved.</h2>
                <h2>Designed by <span>Varsha Makhija</span> | ♾</h2>
            </div>
        </div>
    </section>
    <!-- JS File Link -->
    <script src="assets/js/responses.js"></script>
    <script src="assets/js/convo.js"></script>
    

    <script>
                // Function to perform the search
                function searchMenu() {
            const searchInput = document.querySelector('.search-box input');
            const searchValue = searchInput.value.toLowerCase();

            const menuItems = document.querySelectorAll('.box');

            menuItems.forEach((menuItem) => {
                const menuItemTitle = menuItem.querySelector('.product-title').textContent.toLowerCase();

                if (menuItemTitle.includes(searchValue)) {
                    menuItem.style.display = 'block';
                } else {
                    menuItem.style.display = 'none';
                }
            });
        }

        // Function to reset and display all menu items
        function resetMenu() {
            const menuItems = document.querySelectorAll('.box');
            menuItems.forEach((menuItem) => {
                menuItem.style.display = 'block';
            });
        }

        // Add an event listener to the search button
        const searchButton = document.querySelector('.search-button');
        searchButton.addEventListener('click', searchMenu);

        // Add an event listener to the search input for real-time search
        const searchInput = document.querySelector('.search-box input');
        searchInput.addEventListener('input', searchMenu);

        // Add an event listener to reset when the search input is cleared
        searchInput.addEventListener('change', () => {
            if (searchInput.value === '') {
                resetMenu();
            }
        });

        // Create an empty array to store cart items
        let cartItems = [];

        // Function to add items to the cart
        function addToCart(productId) {
            const productTitle = document.querySelector(`[data-product-id="${productId}"]`).getAttribute('data-product-name');
            const productPrice = parseFloat(document.querySelector(`[data-product-id="${productId}"]`).getAttribute('data-product-price'));

            // Create a cart item object
            const cartItem = {
                id: productId,
                name: productTitle,
                price: productPrice
            };

            // Add the item to the cart
            cartItems.push(cartItem);

            // Update the cart list
            updateCartList();
        }

        // Function to update the cart list
        function updateCartList() {
            const cartList = document.getElementById('cart-items');

            // Clear the existing list
            cartList.innerHTML = '';

            // Loop through the cart items and add them as list items
            cartItems.forEach((item) => {
                const cartListItem = document.createElement('li');
                cartListItem.textContent = `${item.name} - Rs ${item.price.toFixed(2)}`;
                cartList.appendChild(cartListItem);
            });
        }

        // Function to toggle the visibility of the cart list
        function toggleCartList() {
            const cartList = document.getElementById('cart-items');
            const displayStyle = window.getComputedStyle(cartList).display;

            // Toggle the visibility based on the current state
            if (displayStyle === 'none') {
                cartList.style.display = 'block'; // Show the cart list
            } else {
                cartList.style.display = 'none'; // Hide the cart list
            }
        }

        // Function to update the cart list
        function updateCartList() {
            const cartList = document.getElementById('cart-items');

            // Clear the existing list
            cartList.innerHTML = '';

            // Loop through the cart items and add them as list items
            cartItems.forEach((item) => {
                const cartListItem = document.createElement('li');
                cartListItem.textContent = `${item.name} - Rs ${item.price.toFixed(2)}`;

                // Create a remove button for each item
                const removeButton = document.createElement('button');
                removeButton.textContent = 'Remove';
                removeButton.classList.add('btn', 'btn-dark', 'text-decoration-none');

                // Add a click event listener to remove the item
                removeButton.addEventListener('click', () => {
                    removeItemFromCart(item.id);
                });

                // Append the remove button to the list item
                cartListItem.appendChild(removeButton);

                // Append the list item to the cart list
                cartList.appendChild(cartListItem);
            });
        }

        // Function to remove an item from the cart
        function removeItemFromCart(productId) {
            // Find the index of the item to remove
            const indexToRemove = cartItems.findIndex((item) => item.id === productId);

            if (indexToRemove !== -1) {
                // Remove the item from the cartItems array
                cartItems.splice(indexToRemove, 1);

                // Update the cart list
                updateCartList();
            }
        }


        // Function to toggle the visibility of the cart list and "Confirm Order" button
        function toggleCartList() {
            const cartList = document.getElementById('cart-items');

            if (cartList.style.display === 'none') {
                cartList.style.display = 'block'; // Show the cart list
                createConfirmOrderButton(); // Create and add the "Confirm Order" button
            } else {
                cartList.style.display = 'none'; // Hide the cart list
                removeConfirmOrderButton(); // Remove the "Confirm Order" button
            }

            // Update the cart list
            updateCartList();
        }

        // Function to create and add the "Confirm Order" button
        function createConfirmOrderButton() {
            const cartListContainer = document.querySelector('.cart-list-container');
            const confirmOrderButton = document.createElement('button');
            confirmOrderButton.textContent = 'Confirm Order';
            confirmOrderButton.id = 'confirmOrderButton';
            confirmOrderButton.classList.add('btn', 'btn-dark', 'text-decoration-none');
            cartListContainer.appendChild(confirmOrderButton);
            confirmOrderButton.addEventListener('click', confirmOrder);
        }
// Function to handle the "Confirm Order" button click
function confirmOrder() {
        // Convert the cart items to a string with a delimiter
        const cartItemsString = cartItems.map(item => `${item.id}:${item.name}:${item.price}`).join(';');

        // Store the cart items in localStorage
        localStorage.setItem('cartItems', cartItemsString);

        // Redirect to the new page 
        window.location.href = 'cart.php'; 
    }

        // Function to remove the "Confirm Order" button
        function removeConfirmOrderButton() {
            const confirmOrderButton = document.getElementById('confirmOrderButton');
            if (confirmOrderButton) {
                confirmOrderButton.remove();
            }
        }
    </script>
</body>
</html>