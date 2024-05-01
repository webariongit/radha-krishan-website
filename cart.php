<?php
$_PAGE_NAME = "Cart"
?>

<!DOCTYPE html>
<html lang="en">


<?php include("./templates/head.php"); ?> 

<body>
    <!-- HEADER SECTION START-->
     <?php include("./templates/header.php"); ?> 
      <!-- HEADER SECTION END-->

       <!-- Breadcrumb START -->
    <?php include("./templates/breadcrumb.php"); ?>
    <!-- Breadcrumb END -->

    <section class="cart_listing_Wrapper">
        <div class="container mb-15r">
        <div id="empty-cart">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="order-complete-content">
                        <i class="fa-solid fa-cart-shopping big-icon"></i>
                        <h4>Your Cart is empty.</h4>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="full-cart" class="d-none">
        <div class="text-header d-flex flex-row justify-content-between align-items-center">
            <p id="total-count-cart"></p> 
        </div>
        <div class="col-12 d-flex flex-row align-items-start gap-5 justify-content-between flex-wrap ">
            <div class="col" id="cart-products"></div>
            <?php include("./templates/cart-summery.php"); ?>
        </div>
        </div>
        
        </div>

    </section>

    <div class="modal fade" id="applycoupon" tabindex="-1" aria-labelledby="applycouponLabel" aria-hidden="true">
    <div class="modal-dialog   modal-dialog-centered applycoupon_width">
            <div class="modal-content px-md-4 px-2 rounded-5 pb-4">
                <div class="modal-header border-0 pb-0">
                    <h3 class="font-26 text-black text-center m-bd flex-1">Apply Coupon</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-20 mx-auto position-relative" style="width: 100%;">

                        <input type="text" name="" placeholder="Enter Coupon Code"
                            class="px-2 py-2 w-100 rounded pincode-input" id="">
                        <button type="button"
                            class="border-0 appy_btn_inside d-flex justify-content-center rounded-2  pincode-input position-absolute align-items-center">
                            <span class="text-lightgreen1 ">
                                Apply
                            </span>
                        </button>
                    </div>
                    <p class="text-grey font-14 m-sbd my-2">
                        Coupons
                    </p>
                    <div class="bg-gray2 p-3 rounded-3 overflow-hidden h-335 h-250">
                        <div class="overflow-auto gap-3 flex-column d-flex h-100">
                            <div class="d-flex flex-row align-items-center p-10 rounded-2 bg-white gap-3">
                                <div class="wh-70">
                                    <img src="./assets/img/box.webp" class="w-100 h-100" alt="">
                                </div>
                                <div class="flex-1">
                                    <div class="w-100 d-flex flex-row justify-content-between align-items-center ">
                                        <div class="d-flex flex-column ">
                                            <h3 class="text-grey font-14 mb-1 m-bd">PERFECT3</h3>
                                            <p class="font-14 m-reg mb-0">Flat 3% Off on Loose Solitaires</p>
                                        </div>
                                        <button type="button"
                                            class="border-0 appy_btn_inside d-flex justify-content-center rounded-2  pincode-input align-items-center">
                                            <span class="text-lightgreen1 ">
                                                Apply
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center p-10 rounded-2 bg-white gap-3">
                                <div class="wh-70">
                                    <img src="./assets/img/box.webp" class="w-100 h-100" alt="">
                                </div>
                                <div class="flex-1">
                                    <div class="w-100 d-flex flex-row justify-content-between align-items-center ">
                                        <div class="d-flex flex-column ">
                                            <h3 class="text-grey font-14 mb-1 m-bd">PERFECT3</h3>
                                            <p class="font-14 m-reg mb-0">Flat 3% Off on Loose Solitaires</p>
                                        </div>
                                        <button type="button"
                                            class="border-0 appy_btn_inside d-flex justify-content-center rounded-2  pincode-input align-items-center">
                                            <span class="text-lightgreen1 ">
                                                Apply
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-row align-items-center p-10 rounded-2 bg-white gap-3">
                                <div class="wh-70">
                                    <img src="./assets/img/box.webp" class="w-100 h-100" alt="">
                                </div>
                                <div class="flex-1">
                                    <div class="w-100 d-flex flex-row justify-content-between align-items-center ">
                                        <div class="d-flex flex-column ">
                                            <h3 class="text-grey font-14 mb-1 m-bd">PERFECT3</h3>
                                            <p class="font-14 m-reg mb-0">Flat 3% Off on Loose Solitaires</p>
                                        </div>
                                        <button type="button"
                                            class="border-0 appy_btn_inside d-flex justify-content-center rounded-2  pincode-input align-items-center">
                                            <span class="text-lightgreen1 ">
                                                Apply
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       
    </div>
    <div class="modal fade" id="applypincode" tabindex="-1" aria-labelledby="applypincodeLabel" aria-hidden="true">
    <div class="modal-dialog pincode_width modal-dialog-centered">
            <div class="modal-content rounded-5 pb-4">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="pinlocation mx-auto">
                        <img src="./assets/img/puloc.svg" alt="pinloaction">
                    </div>
                    <div class="mt-3">
                        <h1 class="m-bd text-center font-18 w-100 w-md-50 mx-auto text-black">
                            Enter your Pincode to browse better
                        </h1>
                        <p class="mt-20 font-14 text-center m-med">
                            Get fastest delivery dates possible
                        </p>
                        <div class="mt-20 mx-auto position-relative" style="width: 80%;">
                            <div class="loction-icon position-absolute ">
                                <img src="./assets/img/location.svg" alt="">
                            </div>
                            <form id="pincode-checker-form">
                            <input type="text" name="" placeholder="Enter Valid Pincode"
                                class="px-5 py-2 w-100 rounded pincode-input" id="pincode">
                            <button type="submit"
                            id="delivery-search-btn"
                                class="border-0 loctionIcon d-flex justify-content-center rounded-circle   position-absolute align-items-center">
                                <span>
                                    <i class="fa fa-arrow-right text-green"></i>
                                </span>
                            </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FOOTER START -->
     <?php include("./templates/footer.php"); ?>
    <!-- FOOTER END -->
    <script>

    pincodeModal = document.getElementById('applypincode');
    pincodeModalInstance = new bootstrap.Modal(pincodeModal);

        emitter.subscribe('cart-updated', (data) => {
                        let cart = localStorage.getItem(TOKEN_PREFIX+'cart');

                        cart = JSON.parse(cart);
                        console.log(cart)
                        document.querySelector('#cart-products').innerHTML  = '';
                        document.getElementById('total-count-cart').innerHTML = `Total Items (${data})`;

                        

                        if (cart) {

                            document.querySelector('#full-cart').classList.remove('d-none');
                            document.querySelector('#empty-cart').classList.add('d-none');

                            cart.map(c => {
                            c.assets = JSON.parse(c.assets);
                            
                            c.image_thumb =   c.product_details.image_thumb;
                            c.image_all_tag = c.product_details.image_all_tag;
                            c.productname =   c.product_details.productname;
                            c.productcode =   c.product_details.productcode;
                            c.total_offer_price = c.assets.value.TOTAL_OFFER_PRICE;
                            c.total_price = c.assets.value.TOTAL_PRICE;

                            delete c.assets.value.TOTAL_OFFER_PRICE;
                            delete c.assets.value.TOTAL_PRICE;

                            c['properties'] = '';



                            for (const key in c.assets.value) {
                                if (c.assets.value.hasOwnProperty(key)) {
                                    if(key != 'STOCK'){
                                        c['properties'] += `<li>${key}: ${c.assets.value[key]}</li>`;
                                    }
                                    
                                }
                            }

                            

                        })
                        console.log("Cart",cart)
                        
                        
                        ComponentGenerator.populateComponent({ component: 'cart-product-card', data: cart})
                        .then(card => {
                            // console.log(card);
                            document.querySelector('#cart-products').innerHTML = card;
                        })
                        }  else {
                            document.querySelector('#empty-cart').classList.remove('d-none');
                            document.querySelector('#full-cart').classList.add('d-none');
                        }
                        


        })

        function getCartDetails() {
                    APIFetcher.fetchData(`${API_BASE_URL}/user/cart`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
                    .then(response => {
                        // Render HTML using the response data

                        console.log(response)
                        refreshCartView(response);

                        initPincodeChecker()
                        
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
        }

        function refreshCartView(response) {
            if (response.status ==200){
                    document.querySelector('#full-cart').classList.remove('d-none');
                    document.querySelector('#empty-cart').classList.add('d-none');

                    response.data.map(w => {
                        w.product_details.image_thumb = response.base_url + w.product_details.image_thumb;
                    })

                    if (response.cart_count) { 
                    document.getElementById('pincode').value =  response.order_summary.pincode ?  response.order_summary.pincode : '';
                    document.getElementById('expt-delivery').innerHTML = response.order_summary.expected_delivery_on ? `Expected delivery by ${response.order_summary.expected_delivery_on}` : '';
                    document.getElementById('total_price').innerHTML = response.order_summary.total_price;
                    document.getElementById('total_product_discount').innerHTML = response.order_summary.total_product_discount;
                    document.getElementById('total_offer_price').innerHTML = response.order_summary.total_offer_price;
                    document.getElementById('applicable_gst').innerHTML = response.order_summary.applicable_gst;
                    document.getElementById('coupon_saving').innerHTML = response.order_summary.coupon_saving ? response.order_summary.coupon_saving : 0;
                    document.getElementById('expected_delivery_charges').innerHTML = response.order_summary.expected_delivery_charges;
                    document.getElementById('total_cart_amount').innerHTML = response.order_summary.total_cart_amount;

                    console.log((response.order_summary.coupon === null), response.order_summary.coupon)
                    // if (response.order_summary.coupon === null){
                    //     document.getElementById('remove-coupon-btn').classList.add('d-none');
                    //     document.getElementById('add-coupon-btn').classList.remove('d-none');
                    // } else {
                    //     document.getElementById('remove-coupon-btn').classList.remove('d-none');
                    //     document.getElementById('add-coupon-btn').classList.add('d-none');
                    // }
                    
                    localStorage.setItem(TOKEN_PREFIX+'cart', JSON.stringify(response.data) );
                    }
                    else {

                    localStorage.removeItem(TOKEN_PREFIX+'cart');
                    }
                    emitter.publish('cart-updated', response.cart_count);
                } else {
                

                    document.querySelector('#empty-cart').classList.remove('d-none');
                    document.querySelector('#full-cart').classList.add('d-none');

                    localStorage.removeItem(TOKEN_PREFIX+'cart');
                    emitter.publish('cart-updated', 0);
                }
        }

        function removeFromCart(id) {

            console.log('removeFromCart ', id)
               
               APIFetcher.fetchData(`${API_BASE_URL}/user/cart/${id}`, 'DELETE', {}, localStorage.getItem(TOKEN_PREFIX+'token'))
               .then(response => {
                   // Render HTML using the response data
           
                   console.log(response)
           
                //    Toast.success(response.message);
                   refreshCartView(response);
                   
               })
               .catch(error => {
                   console.error('Error:', error);
               });
        }
    
        function updateProductQty(action, cart_id) {

            let currentQty = document.querySelector('#product-cart-quantity-'+cart_id).value;
            let quantity = +currentQty + action;
            document.querySelector('#product-cart-quantity-'+cart_id).value = quantity;

            if (quantity) {
                APIFetcher.fetchData(`${API_BASE_URL}/user/cart-update`, 'POST', {cart_id, quantity}, localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data
            
                    console.log(response)
            
                    //    Toast.success(response.message);
                    refreshCartView(response);
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            } else {
                document.querySelector('#decreaseProductQty-'+cart_id).setAttribute('disable', true);
                removeFromCart(cart_id);
            }

        }

        function moveToWishlist(cart_id) {

            let moveWishlistBtn = document.querySelector('#move-wishlist-btn-'+cart_id);
            moveWishlistBtn.setAttribute('disabled', true)
            moveWishlistBtn.innerHTML = `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

            APIFetcher.fetchData(`${API_BASE_URL}/user/move-to-wishlist`, 'POST', {cart_id}, localStorage.getItem(TOKEN_PREFIX+'token'))
            .then(response => {
                // Render HTML using the response data

                moveWishlistBtn.innerHTML = 'Move To Wishlist';
                moveWishlistBtn.removeAttribute("disabled");

                console.log(response)
                // Toast.success(response.message);
            
                refreshCartView(response)

                getWishlist()
                
                
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function initPincodeChecker() {

            let myPincode = localStorage.getItem(TOKEN_PREFIX+'pincode');

            let pincode =  document.getElementById('pincode');

            pincode.value = myPincode ? myPincode : '';
            let deliveryBtn = document.getElementById('delivery-search-btn');

            document.getElementById('pincode-checker-form').addEventListener('submit',(e) => {
                e.preventDefault();
            
                console.log('initPincodeChecker()', pincode.value)

                localStorage.setItem(TOKEN_PREFIX+'pincode', pincode.value);

                // cart_flag = isCartPageOpen ? 1 : 0;
                cart_flag = typeof isCartPageOpen !== 'undefined' ? (isCartPageOpen ? 1 : 0) : 0;

                deliveryBtn.setAttribute('disabled', true)
                deliveryBtn.innerHTML =  `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

                APIFetcher.fetchData(`${API_BASE_URL}/check-pincode`, 'POST', {delivery_postcode: pincode.value, pickup_postcode: PICKUP_POSTCODE, cart_flag}, localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data
                    pincodeModalInstance.hide();
                    deliveryBtn.innerHTML = 'Check';
                    deliveryBtn.removeAttribute("disabled");

                    console.log(response)
                    document.getElementById('expt-delivery').innerHTML = response.message;
                    document.getElementById('expected_delivery_charges'.innerHTML = response.estimated_delivery_charge)
                    if(typeof isCartPageOpen !== 'undefined')
                        getCartDetails()
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            })
        }

        getCartDetails();
        
    </script>
</body>

</html>