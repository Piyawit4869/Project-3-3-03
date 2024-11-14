@extends('layouts.page')
@section('search.target', route('page.menu'))
@section('main')

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>เมนู</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>เมนูเครื่องดื่ม</h2>
                        <p>ร้านชานมมีความสุข ซิโนพาร์ค</p>
                    </div>
                </div>
            </div>

            <div class="row inner-menu-box">
                {{-- <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">ลาเต้</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                            role="tab" aria-controls="v-pills-messages" aria-selected="false">ชา</< /a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">ชาผลไม้</a>
                    </div>
                </div> --}}

                <div class="col-9">
                    <div class="tab-content" id="product-container">
                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                {{-- <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/menu-01.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h2 style="color: white;">ชานมมีความสุข</h2>
                                            <p>เมนูชานมไข่มุก ซิกเนเจอร์ ของแบรนด์มีความสุข</p>
                                            <h5> ราคา 60 ฿</h5>
                                            <center>
                                                <button class="button-cart">
                                                    <a href="#" onclick = "addToCart('${product.id}')"><b
                                                            style="color: white">สั่งสินค้า</b></a>
                                                </button>
                                            </center>
                                        </div>

                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/อัญชันลาเต้.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Drinks 1</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $7.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาลูกพีช.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Drinks 2</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $9.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาสตรอเบอร์รี่.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Drinks 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $10.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid lunch">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/โกโก้ลาเต้.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Lunch 2</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $18.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid lunch">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/กุหลาบลาเต้.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Lunch 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $20.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid dinner">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาเขียวมัทฉะชิอาวาเสะ.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Dinner 1</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $25.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid dinner">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาไทย.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Dinner 2</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $22.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid dinner">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาผลไม้รวม.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Dinner 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $24.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid dinner">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาอัญชันน้ำผึ้งมะนาว.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Dinner 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $24.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid lunch">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/นมสดโคฟูกุ.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Lunch 1</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $15.79</h5>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                        </div>
                        {{-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/อัญชันลาเต้.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Drinks 1</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $7.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/โกโก้ลาเต้.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Drinks 2</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $9.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/กุหลาบลาเต้.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Drinks 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $10.79</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 special-grid lunch">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาเขียวมัทฉะชิอาวาเสะ.jpg" class="img-fluid"
                                            alt="Image">
                                        <div class="why-text">
                                            <h4>Special Lunch 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $20.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid lunch">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาไทย.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Lunch 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $20.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid lunch">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/menu-01.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Lunch 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $20.79</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 special-grid dinner">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาลูกพีช.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Dinner 1</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $25.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid dinner">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาสตรอเบอร์รี่.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Dinner 2</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $22.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid dinner">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาผลไม้รวม.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Dinner 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $24.79</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid dinner">
                                    <div class="gallery-single fix">
                                        <img src="images/menu/ชาอัญชันน้ำผึ้งมะนาว.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <h4>Special Dinner 3</h4>
                                            <p>Sed id magna vitae eros sagittis euismod.</p>
                                            <h5> $24.79</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Menu -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <p class="lead" style="font-size: 18px;">
                        “We prioritize eco-conscious practices by using imported, foil-sealed PET bottles.”
                    </p>
                    <span class="lead">มีความสุข</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    {{-- <!-- Popup Shopping Cart Container -->
    <div id="cartPopup" class="cart-container">
        <div class="cart-header">
            <h2><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h2>
            <button type="button" id="closeCart" class="close-btn">&times;</button>
        </div>
        <div class="cart-body">
            <!-- Example Product 1 -->
            <div class="cart-item">
                <img src="http://placehold.it/100x70" alt="Product Image" class="item-image">
                <div class="item-details">
                    <h5>Product 1</h5>
                </div>
                <div class="item-quantity">
                    <div class="quantity-controls">
                        <button type="button" onclick="decreaseQuantity()">-</button>
                        <input type="text" id="quantity" value="1" readonly>
                        <button style="margin-right: 20px;" type="button" onclick="increaseQuantity()">+</button>
                    </div>
                    <span style="margin-right: 20px;" class="price">$25.00</span>
                </div>
                <button type="button" id="closeCart" class="close-btn">&times;</button>
            </div>
            <hr>
            <!-- Example Product 2 -->
            <div class="cart-item">
                <img src="http://placehold.it/100x70" alt="Product Image" class="item-image">
                <div class="item-details">
                    <h5>Product 2</h5>
                </div>
                <div class="item-quantity">
                    <div class="quantity-controls">
                        <button type="button" onclick="decreaseQuantity()">-</button>
                        <input type="text" id="quantity" value="1" readonly>
                        <button style="margin-right: 20px;" type="button" onclick="increaseQuantity()">+</button>
                    </div>
                    <span style="margin-right: 20px;" class="price">$30.00</span>
                </div>
                <button type="button" id="closeCart" class="close-btn">&times;</button>
            </div>
            <hr>
        </div>
        <div class="cart-footer">
            <div class="total">
                <h4>Total: <strong>$55.00</strong></h4>
            </div>
            <button type="button" class="btn btn-success btn-block">Checkout</button>
            <button type="button" class="btn btn-warning btn-block">Clear Cart</button>
        </div>
    </div>
    <!-- Overlay -->
    <div id="cartOverlay" class="cart-overlay"></div> --}}

    <!-- Cart Modal Section -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Your Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="cartItemsContainer">
                        <!-- Cart items will be inserted here dynamically -->
                    </div>
                    <p id="totalPrice"></p>
                    <p id="totalItems"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-danger" onclick="clearCart()">
                        Clear Cart
                    </button>
                    <button type="button" class="btn btn-primary" onclick="checkout()">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- JavaScript Popup -->
    <script>
        document.getElementById("openCart").onclick = function() {
            document.getElementById("cartPopup").style.right = "0"; // Slide in
            document.getElementById("cartOverlay").style.display = "block";
        }

        document.getElementById("closeCart").onclick = function() {
            document.getElementById("cartPopup").style.right = "-650px"; // Slide out
            document.getElementById("cartOverlay").style.display = "none";
        }

        document.getElementById("cartOverlay").onclick = function() {
            document.getElementById("cartPopup").style.right = "-650px"; // Slide out
            this.style.display = "none";
        }
    </script>


    <script>
        function increaseQuantity() {
            let quantityInput = document.getElementById("quantity");
            let currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
        }

        function decreaseQuantity() {
            let quantityInput = document.getElementById("quantity");
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        }
    </script>
    <!-- End JavaScript Popup --> --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch("./products.json")
                .then((response) => response.json())
                .then((products) => {
                    const container = document.getElementById("product-container");
                    products.forEach((product) => {
                        const categories = product.category.join(" ");
                        const productHTML = `
                            <div class="col-lg-4 col-md-6 special-grid ${categories}">
                                <div class="gallery-single fix">
                                    <img src="${product.image}" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h2 style="color: white;">${product.name}</h2>
                                        <p>${product.description}</p>
                                        <h5> ราคา: ${product.price} ฿</h5>
                                        <center>
                                            <button class="button-cart">
                                            <a href="#" onclick = "addToCart('${product.id}')"><b style="color: white">สั่งสินค้า</b></a>
                                            </button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            `;
                        container.innerHTML += productHTML;
                    });
                })
                .catch((error) =>
                    console.error("Error loading the products:", error)
                );
        });

        // let cart = []  // let คือการประกาศค่าตัวแปร ที่ใช้มันแค่ตัวเดียว เรียกว่า Box Scope แต่การใช้ let cart = [] เมื่อ refresn web ข้อมูลจะหาย
        // Cart functionality
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        // Update cart  display
        function updateCart() {
            const cartCount = document.getElementById("cart-count");
            cartCount.innerText = cart.length; // Update cart count
        }

        // Add product to cart with limit condition
        function addToCart(productId) {
            if (cart.length >= 5) {
                Swal.fire({
                    icon: "error",
                    title: "cart Full",
                    text: "You can only add up to 5 item in the cart",
                    showConfirmButton: true,
                });
                return;
            }

            fetch("./products.json")
                .then((response) => response.json())
                .then((products) => {
                    const product = products.find((p) => p.id === productId);
                    if (product) {
                        cart.push(product);
                        localStorage.setItem("cart", JSON.stringify(cart));
                        updateCart();
                        Swal.fire({
                            icon: "success",
                            title: "Add to Cart",
                            text: `${product.name} has been added  to your cart.`,
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                })

                .catch((error) =>
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Error adding product to cart.",
                    })
                );
        }

        function showCartModal() {
            if (cart.length === 0) {
                Swal.fire({
                    icon: "info",
                    title: "Your cart is empty",
                    showConfirmButton: true,
                });
                return;
            }

            let totalPrice = 0;

            let cartItemsHTML = cart
                .map((product, index) => {
                    totalPrice += product.price;
                    return `
                        <div class="cart-item row mb-3">
                            <div class="col-md-3">
                            <img src="${product.image}" class="img-fluid" alt="${product.name}">
                            </div>
                            <div class="col-md-9">
                            <h5>${product.name}</h5>
                            <p><strong>Price :</strong> ${product.price} ฿</p>
                            <p><strong>Description: </strong> ${product.description}</p>
                            <button class="btn btn-danger btn-sm" onclick="removeFromCart(${index})">Remove</button>
                            </div>
                        </div>
                        <hr>
                    `;
                })
                .join("");

            // Inject the cart item HTML and total price into the modal
            document.getElementById("cartItemsContainer").innerHTML = cartItemsHTML;
            document.getElementById(
                "totalPrice"
            ).innerText = `Total Price: ${totalPrice.toFixed(2)} ฿`;
            document.getElementById(
                "totalItems"
            ).innerText = `Total Item: ${cart.length}`;

            // Show the custom modal
            $("#cartModal").modal("show");
        }

        // Update cart on page load
        document.addEventListener("DOMContentLoaded", () => {
            updateCart();
            document
                .getElementById("cart-btn")
                .addEventListener("click", showCartModal);
        });

        function removeFromCart(index) {
            const removedProduct = cart[index];
            cart.splice(index, 1); // Remove product from cart
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCart();
            Swal.fire({
                icon: "success",
                title: "Remove from cart",
                text: `${removedProduct.name} has been removed from your cart.`,
                showConfirmButton: false,
                timer: 1500,
            });
            showCartModal(); // Re-show cart model with updated cart
        }

        function clearCart() {
            cart = [];
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCart();
            Swal.fire({
                icon: "success",
                title: "Cleared Cart",
                text: "All item have been removed from your cart.",
                showConfirmButton: false,
                timer: 1500,
            });
            $("#cartModal").modal("hide");
        }

        document.addEventListener("DOMContentLoaded", function() {
            const loggedInUser = localStorage.getItem("loggedInUser");
            if (loggedInUser) {
                const usersJson = JSON.parse(localStorage.getItem("users")) || [];
                const user = usersJson.find((u) => u.email === loggedInUser);
                if (user) {
                    const loginLink = document.getElementById("login-link");
                    const coinBalance = user.coins || 0; // If no coins, set to 0
                    const pointBalance = user.points || 0; // If no coins, set to 0
                    // Change login button to display name and coins
                    loginLink.innerHTML =
                        `
          <a href="#" data-toggle="modal" data-target="#userProfileModal">Welcome back, ${user.name}, Coin:${coinBalance}</a>`;

                    // Populate the profile modal with user information
                    document.getElementById("profile-name").innerText = user.name;
                    document.getElementById("profile-email").innerText = user.email;
                    document.getElementById("profile-coins").innerText = coinBalance;
                    // Display current coins
                    document.getElementById("profile-points").innerText =
                        pointBalance; // Display current point
                }
            }
        });

        // Checkout function
        function checkout() {
            const loggedInUser = localStorage.getItem("loggedInUser");

            if (!loggedInUser) {
                Swal.fire({
                    icon: "error",
                    title: "Not Logged In",
                    text: "Please log in to complete your purchase.",
                });
                return;
            }

            const usersJson = JSON.parse(localStorage.getItem("users")) || [];
            const user = usersJson.find((u) => u.email === loggedInUser);
            const totalPrice = cart.reduce((sum, item) => sum + item.price, 0);

            if (user) {
                if (user.coins >= totalPrice) {
                    // Deduct total price from user's coins
                    user.coins -= totalPrice;

                    // Calculate points earned (1 point per 100 units of total price)
                    const pointsEarned = Math.floor(totalPrice / 100);
                    user.points = (user.points || 0) + pointsEarned;

                    localStorage.setItem("users", JSON.stringify(usersJson));

                    Swal.fire({
                        icon: "success",
                        title: "Purchase Successful",
                        text: `Your purchase was successful. You spent ${totalPrice.toFixed(2)} ฿ and earned ${pointsEarned} points.`,
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        // Clear cart
                        cart = [];
                        localStorage.setItem("cart", JSON.stringify(cart));
                        updateCart();

                        // Update user's coin balance and points in the modal and login link
                        document.getElementById("profile-coins").innerText = user.coins;

                        // Close the cart modal after successful purchase
                        $("#cartModal").modal("hide");
                    });
                } else {
                    // If not enough coins, show error and open the profile modal
                    Swal.fire({
                        icon: "error",
                        title: "Insufficient Coins",
                        text: `You need more coins to complete this purchase. Please top up your balance.`,
                    }).then(() => {
                        // Open the user profile modal for topping up coins
                        $("#userProfileModal").modal("show");
                    });
                }
            }
        }

        function handleLogout() {
            localStorage.removeItem("loggedInUser");
            Swal.fire({
                icon: "success",
                title: "Logged Out",
                text: "You have been logged out.",
                showConfirmButton: false,
                timer: 1500,
            }).then(() => {
                window.location.reload(); // Reload the page to show the login button again
            });
        }

        function topUpCoins() {
            const topUpAmount = parseInt(
                document.getElementById("top-up-amount").value);
            const loggedInUser = localStorage.getItem("loggedInUser");

            if (topUpAmount < 1 || topUpAmount > 1000) {
                Swal.fire({
                    icon: "error",
                    title: "Invalid Amount",
                    text: "Please enter a valid amount between 1 and 1000.",
                });
                return;
            }
            const usersJson = JSON.parse(localStorage.getItem("users")) || [];
            const user = usersJson.find((u) => u.email === loggedInUser);
            if (user) {
                // Add the top-up amount to the user's existing coins
                user.coins = (user.coins || 0) + topUpAmount;
                // Update localStorage
                localStorage.setItem("users", JSON.stringify(usersJson));
                // Update the coin display in the modal and header
                document.getElementById("profile-coins").innerText = user.coins;
                const loginLink = document.getElementById("login-link");
                loginLink.innerHTML =
                    `
        <a href="#" data-toggle="modal" data-target="#userProfileModal">Welcome back, ${user.name}, Coin: ${user.coins}</a>`;

                Swal.fire({
                    icon: "success",
                    title: "Top Up Successful",
                    text: `You have successfully topped up ${topUpAmount} coins.`,
                });
            }
        }
    </script>

@endsection
