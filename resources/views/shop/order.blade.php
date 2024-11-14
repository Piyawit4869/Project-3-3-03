@extends('layouts.shop')
@section('search.target', route('shop.order'))
@section('content')

    <div class="font-sans max-w-4xl max-md:max-w-xl mx-auto p-4">
        <h1 class="text-2xl font-extrabold text-gray-800">ตะกร้าสินค้า</h1>

        <!-- Cart section -->
        <div id="cartItems" class=>
            <!-- Cart items will be dynamically added here -->
        </div>

        <br>

        <!-- Order summary -->
        <div class="bg-white rounded-md px-4 py-6 shadow-md">
            <ul class="text-gray-800 space-y-4">
                <li class="flex justify-between text-sm">ราคารวม <span id="totalPrice">0 บาท</span></li>
                <li class="flex justify-between text-sm">ค่าส่ง <span>0 บาท</span></li>
                <li class="flex justify-between text-sm">ส่วนลด <span>5 บาท</span></li>
                <hr class="border-gray-300" />
                <li class="flex justify-between text-sm font-bold">รวมทั้งสิ้น <span id="finalPrice">0 บาท</span></li>
            </ul>

            <div class="mt-8">
                <button id="confirmOrder"
                    class="text-sm w-full px-4 py-2.5 font-semibold bg-gray-800 hover:bg-gray-900 text-white rounded-md">สั่งซื้อ</button>
                <a href="{{ route('shop.goods') }}">
                    <button
                        class="mt-2 text-sm w-full px-4 py-2.5 font-semibold bg-transparent hover:bg-gray-100 text-gray-800 border border-gray-300 rounded-md">
                        เพิ่มสินค้า
                    </button>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            const cartItemsDiv = document.getElementById("cartItems");
            const totalPriceSpan = document.getElementById("totalPrice");
            const finalPriceSpan = document.getElementById("finalPrice");

            let totalPrice = 0;

            function renderCart() {
                cartItemsDiv.innerHTML = "";
                cart.forEach((item, index) => {
                    const cartItemHTML = `
                        <div class="flex gap-4 bg-white rounded-lg shadow-md justify-between align-content-between">
                            <div class="flex gap-4 items-center">
                                <div class="w-400 h-40 shrink-0">
                                    <img src="${item.image}" class="w-full h-full object-contain rounded-full" />
                                </div>
                            </div>

                            <div class="flex gap-4 items-center">
                                <div class="flex flex-col justify-center">
                                    <h3 class="text-base font-bold text-gray-800">${item.name}</h3>
                                </div>
                            </div>

                            <div class="flex gap-4 items-center">
                                <div class="flex flex-col justify-center">
                                    <h3 class="text-base font-bold text-gray-800">${item.category}</h3>
                                </div>
                            </div>

                            <div class="flex gap-4 items-center">
                                <div class="flex flex-col justify-center">
                                    <h3 class="text-base font-bold text-gray-800">${item.price}</h3>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center items-end">
                                <button class="mt-2 mr-10 text-sm bg-red-500 text-white px-4 py-2 rounded-md remove-item-btn" data-index="${index}">
                                    ลบสินค้า
                                </button>
                            </div>
                        </div>
                        <br>
                    `;
                    cartItemsDiv.innerHTML += cartItemHTML;
                });

                totalPrice = cart.reduce((acc, item) => acc + parseFloat(item.price.replace(" บาท", "")), 0);
                totalPriceSpan.textContent = `${totalPrice} บาท`;
                finalPriceSpan.textContent = `${totalPrice + 0 - 5} บาท`;
            }

            renderCart();

            cartItemsDiv.addEventListener("click", function(e) {
                if (e.target.classList.contains("remove-item-btn")) {
                    const index = e.target.getAttribute("data-index");
                    cart.splice(index, 1);
                    localStorage.setItem("cart", JSON.stringify(cart));
                    renderCart();
                }
            });

            document.getElementById("confirmOrder").addEventListener("click", function() {
                alert("สั่งซื้อสำเร็จ!");
                localStorage.removeItem("cart");
            });
        });
    </script>

@endsection
