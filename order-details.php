<?php
$_PAGE_NAME = "My Orders"
?>
<!DOCTYPE html>
<html lang="en">


<?php include("./templates/head.php"); ?> 

<body>
   
     <!-- HEADER SECTION START-->
     <?php include("./templates/header.php"); ?> 
    <!-- HEADER SECTION END-->

     <!-- Profile Side Menu START -->
     <?php include("./templates/breadcrumb.php"); ?>
    <!-- Profile Side Menu END -->

    <section class="orders_Wrapper">
        <div class="container">
            <div class="d-flex col-12 flex-row flex-wrap align-items-start gap-5 mb-15r">
                 <!-- Profile Side Menu START -->
                 <?php include("./templates/profile-side-menu.php"); ?>
                <!-- Profile Side Menu END -->
                <div class="w-auto4">
                    <div class="col-12 d-flex flex-row justify-content-between align-items-start flex-wrap" id="invoice-details">
                    </div>
                    <div id="order-products-list"></div>
                    <!-- 
                    <div class="d-flex flex-row align-items-center col-12 gap-3 mt-4">
                        <div class="d-flex flex-row align-items-center gap-3 col-7">
                            <div class="rounded-4 border-green2 cart_image2 overflow-hidden">
                                <img src="./assets/img/earing2.webp" alt="cart-image" width="" height="">
                            </div>
                            <div class="col">
                                <h3 class="font-14 m-med text-black mb-4 col-lg-8 col track-3">Geometric Gleam Diamond
                                    Stud Earrings
                                </h3>

                                <p class="text-grey2 font-12 m-sbd mb-3">JE06196-1RP900</p>

                            </div>
                        </div>
                        <div class="col text-end">
                            <h2 class="font-12 m-bd text-black mb-1 ">Quantity: 1</h2>
                            <h2 class="font-14 m-bd text-black  track-1">₹13,585</h2>
                        </div>

                    </div> -->
                    <div class="col-12 row gy-3 justify-content-between mt-4 pt-3">
                        <div class="col-lg col-12">
                            <div class="mb-40">
                                <h3 class="font-16 m-bd text-black mb-3">Shipping Address</h3>

                                <div class="col border-grey rounded-4 p-3"  id="shipping_address_details"></div>
                            </div>
                            <div>
                                <h3 class="font-16 m-bd text-black mb-3">Billing Address</h3>
                                <div class="col border-grey rounded-4 p-3" id="billing_address_details"></div>
                            </div>
                        </div>
                        <div class="col-lg col-12 pe-lg-0">
                            <h3 class="font-16 m-bd text-black mb-3">Order Summary</h3>
                            <div id="order_summary"></div>
                            <!-- <div class="d-flex col-12 justify-content-between align-items-center mb-3">
                                <p class="mb-0 font-14 m-med text-black">Subtotal</p>
                                <p class="mb-0 font-14 m-med text-black">₹13,585</p>

                            </div>
                            <div class="d-flex col-12 justify-content-between align-items-center mb-4">
                                <p class="mb-0 font-14 m-med text-black">Shipping (Standard)</p>
                                <p class="mb-0 font-12 m-sbd text-green">Free</p>

                            </div>
                            <div class="d-flex col-12 justify-content-between align-items-center mt-2 mb-3">
                                <p class="mb-0 font-16 m-bd text-black">Total Cost</p>
                                <p class="mb-0 font-16 m-bd text-black">₹13,585</p>
                            </div>
                            <div class="d-flex col-12 justify-content-between align-items-center mb-3">
                                <p class="mb-0 font-14 m-sbd text-black">Payment</p>
                                <p class="mb-0 font-14 m-med text-black">Cash on delivery</p>

                            </div>
                            <div class="d-flex col-12 justify-content-between align-items-center mb-3">
                                <p class="mb-0 font-14 m-sbd text-black">Payment Status</p>
                                <p class="mb-0 font-14 m-bd text-green">Paid</p>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

     <!-- FOOTER START -->
     <?php include("./templates/footer.php"); ?>
    <!-- FOOTER END -->

    <script>
        var orderDetails 
        function initOrderDetails() {

            const url = new URL(window.location.href);

            // Get the value of the 'order_id' parameter
            const order_id =  url.searchParams.get('order');

            
            APIFetcher.fetchData(`${API_BASE_URL}/user/order-details?id=${order_id}`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
            .then(response => {
                // Render HTML using the response data
                orderDetails = response
                console.log(response)
                document.getElementById('invoice-details').innerHTML =`<p class="mb-0 font-16 m-bd  col-6">
                                                                            <span class="font-16 text-black">Order Id :</span>
                                                                            <span class="text-grey">${response?.prefix + response?.data?.id}</span>
                                                                        </p>
                                                                        <p class="mb-0 font-16 m-bd  col-6">
                                                                            <span class="font-16 text-black">Order Date :</span>
                                                                            <span class="text-grey">${DateTime.formatDate(response?.data?.created_at)}</span>
                                                                        </p>
                                                                        <p class="mb-0 font-16 m-bd  col-6">
                                                                            <span class="font-16 text-black">Expected Delivery Date :</span>
                                                                            <span class="text-grey">${response?.data?.delievery_date ? response.data.delievery_date: 'N/A'}</span>
                                                                        </p>
                                                                        <p class="mb-0 font-16 m-bd  col-6">
                                                                            <span class="font-16 text-black">Order Status :</span>
                                                                            <span class="text-grey">${response.data.order_status}</span>
                                                                        </p>
                                                                        `;

            // response.data.order_status_tracking.forEach((status) => {
            //     document.getElementById('order_status').innerHTML += ` <li class="${status.flag ? 'active' : ''}">
            //         <span></span>
            //         <p>${status.status}</p>
            //     </li>`;
            // });
                        
            // if(response.data.order_status == 'Delivered'){
            //     document.getElementById('order-actions').innerHTML += ` <a href="#" id="return-order-btn" data-bs-toggle="modal" data-bs-target="#returnOrder" class="action-btn return-btn">Return Order</a> <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeOrder" id="exchange-order-btn" class="action-btn exchange-btn">Exchange Order</a>`
            // }else if(response.data.order_status != 'Delivered' && response.data.order_status != 'Return' &&  response.data.order_status != 'Replace' &&  response.data.order_status != 'Reject' &&  response.data.order_status != 'Cancelled' ){
            //     document.getElementById('order-actions').innerHTML += `<a href="#" id="cancel-order-btn" data-bs-toggle="modal" data-bs-target="#cancelOrder" class="action-btn cancel-btn">Cancel Order</a>`
            // }

                
                response.data.items.forEach((item) => {

                    item.assets = JSON.parse(item.assets);

                    

                    const { STOCK, TOTAL_PRICE, TOTAL_OFFER_PRICE, ...attributes } = item.assets.value;


                    console.log(item.assets, attributes)

                    let attributesEl = '';

                    for (const key in attributes) {
                        attributesEl += `<span class="text-grey2 font-12 m-sbd mb-3 outline-chip">${key}: ${attributes[key]}</span>`;
                    }


                    document.getElementById('order-products-list').innerHTML +=  `<div class="d-flex flex-row align-items-center col-12 gap-3 mt-4">
                                                                                    <div class="d-flex flex-row align-items-center gap-3 col-7">
                                                                                        <a href="${BASE_URL}product?product_id=${ item.product_detail.id}">
                                                                                            <div class="rounded-4 border-green2 cart_image2 overflow-hidden">
                                                                                                <img src="${response.base_url + item.product_detail.image}" alt="cart-image" width="" height="">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="col">
                                                                                            <h3 class="font-14 m-med text-black mb-4 col-lg-12 col track-3">${item.product_detail.productname}</h3>

                                                                                            <p class="text-black font-14 m-sbd mb-3">${item.product_detail.productcode}</p>
                                                                                            ${attributesEl}

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col text-end">
                                                                                        <h2 class="font-12 m-bd text-black mb-1 ">Quantity: ${item.qty}</h2>
                                                                                        <h2 class="font-14 m-bd text-black  track-1">₹${item.subtotal}</h2>
                                                                                    </div>

                                                                                </div>`;

                    

                });

                for (const key in response?.data?.shipping_address_details) {
                    // Check if the property value is null
                    if (response?.data?.shipping_address_details[key] === null) {
                        // Update the property value with a blank space
                        response.data.shipping_address_details[key] = '';
                    }else if (key == 'alternate_phone_no') {
                        response.data.shipping_address_details[key] = ', '+response.data.shipping_address_details[key];
                    }
                }

                document.getElementById('shipping_address_details').innerHTML = `<h3 class="font-16 m-bd text-black">${response?.data?.shipping_address_details?.type}</h3>
                    <address class="m-reg text-grey4 font-14" > ${response?.data?.shipping_address_details?.name} </address>
                    <address class="m-reg text-grey4 font-14" > ${response?.data?.shipping_address_details?.line_1}, ${response?.data?.shipping_address_details?.line_2} </address>
                    <address class="m-reg text-grey4 font-14" > ${response?.data?.shipping_address_details?.landmark} </address>
                    <address class="m-reg text-grey4 font-14" >${response?.data?.shipping_address_details?.city} Pincode - ${response?.data?.shipping_address_details?.pincode} </address>    
                    <address class="m-reg text-grey4 font-14" > ${response?.data?.shipping_address_details?.state} - ${response?.data?.shipping_address_details?.country}</address>   
                    <address class="m-reg text-grey4 font-14" >${response?.data?.shipping_address_details?.phone_no} ${response?.data?.shipping_address_details?.alternate_phone_no}</address>`;

                    for (const key in response?.data?.billing_address_details) {
                        // Check if the property value is null
                        if (response?.data?.billing_address_details[key] === null) {
                            // Update the property value with a blank space
                            response.data.billing_address_details[key] = '';
                        } else if (key == 'alternate_phone_no') {
                            response.data.billing_address_details[key] = ', '+response.data.billing_address_details[key];
                        }
                    }
                    
                

                document.getElementById('billing_address_details').innerHTML = `<h3 class="font-16 m-bd text-black">${response?.data?.billing_address_details?.type}</h3>
                <address class="m-reg text-grey4 font-14" > ${response?.data?.billing_address_details?.name} </address>
                <address class="m-reg text-grey4 font-14" > ${response?.data?.billing_address_details?.line_1}, ${response?.data?.billing_address_details?.line_2} </address>
                <address class="m-reg text-grey4 font-14" > ${response?.data?.billing_address_details?.landmark} </address>
                <address class="m-reg text-grey4 font-14" >${response?.data?.billing_address_details?.city} Pincode - ${response?.data?.billing_address_details?.pincode} </address>   
                <address class="m-reg text-grey4 font-14" > ${response?.data?.billing_address_details?.state} - ${response?.data?.billing_address_details?.country}</address>   
                <address class="m-reg text-grey4 font-14" >${response?.data?.billing_address_details?.phone_no} ${response?.data?.billing_address_details?.alternate_phone_no}</address>`;

                document.getElementById('order_summary').innerHTML = ` <h4>Order Summary</h4>
                <table class="table">
                    <tr>
                        <th>Subtotal</th>
                        <td>:</td>
                        <td>₹ ${+response?.data?.total_amount + +response?.data?.discount_amount}</td>
                    </tr>
                    <tr>
                        <th>You Saved</th>
                        <td>:</td>
                        <td><span class="text-red">- ₹ ${response?.data?.discount_amount}</span></td>
                    </tr>
                    <tr>
                        <th>Coupon Discount</th>
                        <td>:</td>
                        <td>₹ ${response?.data?.coupon_discount}</td>
                    </tr>
                    <tr>
                        <th>Delivery Charge (Standard)</th>
                        <td>:</td>
                        <td>₹ ${response?.data?.delivery_charge}</td>
                    </tr>
                    <tr>
                        <th>GST</th>
                        <td>:</td>
                        <td>${response?.data?.total_gst}</td>
                    </tr>
                    <tr>
                        <th>Payment Method</th>
                        <td>:</td>
                        <td>${(response?.data?.payment_mode).toUpperCase()}</td>
                    </tr>
                    <tr>
                        <th>Payment Status</th>
                        <td>:</td>
                        <td>${(response?.data?.payment_status).toUpperCase()}</td>
                    </tr>
                    <tr>
                        <th>Transaction Id</th>
                        <td>:</td>
                        <td>${response?.data?.transaction_id ? response?.data?.transaction_id : 'N/A'}</td>
                    </tr>
                    <tr>
                        <th>Total Amount</th>
                        <td>:</td>
                        <td colspan="2">₹ ${response?.data?.final_total}</td>
                    </tr>
                </table>`
                
            
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

initOrderDetails()
    </script>
</body>

</html>