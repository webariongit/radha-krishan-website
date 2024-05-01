<div class="sticky top-5 w-450">
                    <div class="col">
                        <div
                            class="col-12 apply_coupon_card  rounded-3 d-flex align-items-center justify-content-between px-3 mb-20">
                            <p class="mb-0 d-flex align-items-center  gap-4">
                                <span class="">
                                    <img src="./assets/img/divide.svg" alt="divide-icon" width="20" height="20">
                                </span>
                                <span class="font-16 m-med text-green">Apply Coupon</span>
                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#applycoupon"
                                class="w-30 rounded-circle bg-white d-flex align-items-center justify-content-center border-0">
                                <i class="fa fa-angle-right text-green font-14"></i>
                            </button>
                        </div>
                        <div
                            class="col-12 pincode-card bg-white  rounded-3 d-flex align-items-center justify-content-between px-3 mb-20">
                            <p class="mb-0 d-flex align-items-center  gap-4">
                                <span class="">
                                    <img src="./assets/img/pinloc.svg" alt="location-icon" width="" height="">
                                </span>
                                <!-- <span class="font-14 m-med pincode-text">Delivering to 735204</span> -->
                                <label class="font-14 m-med pincode-text text-success" id="expt-delivery"> </label>
                            </p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#applypincode"
                                class="rounded-circle bg-white d-flex align-items-center justify-content-center border-0 text-green">
                                Change Pincode
                            </button>
                        </div>
                        <div class="d-flex col-12 justify-content-between align-items-center mb-3">
                            <p class="mb-0 font-14 m-med text-black">Subtotal</p>
                            <p class="mb-0 font-14 m-med text-black"><span id="total_price"></span></p>
                        </div>
                        <div class="d-flex col-12 justify-content-between align-items-center mb-3">
                            <p class="mb-0 font-14 m-med text-black">Cart Discount</p>
                            <p class="mb-0 font-12 m-reg text-green">- <span id="total_product_discount"></span></p>

                        </div>
                      
                        <div class="d-flex col-12 justify-content-between align-items-center mb-3">
                            <p class="mb-0 font-14 m-med text-black">Payble Amount</p>
                            <p class="mb-0 font-14 m-med text-black"><span id="total_offer_price"></span></p>

                        </div>
                        <div class="d-flex col-12 justify-content-between align-items-center mb-3">
                            <p class="mb-0 font-14 m-med text-black">Coupon Discount</p>
                            <p class="mb-0 font-12 m-reg text-green">-  <span id="coupon_saving"></span></p>

                        </div>
                        <div class="d-flex col-12 justify-content-between align-items-center mb-4">
                            <p class="mb-0 font-14 m-med text-black">Shipping</p>
                            <p class="mb-0 font-12 m-sbd text-red"><span  id="expected_delivery_charges"></span></p>
                        </div>
                        <div class="d-flex col-12 justify-content-between align-items-center mb-3">
                            <p class="mb-0 font-14 m-med text-black">GST </p>
                            <p class="mb-0 font-14 m-med text-black"><span id="applicable_gst"></span></p>
                        </div>
                        <div class="d-flex col-12 justify-content-between align-items-center mt-2">
                            <p class="mb-0 font-16 m-sbd text-black">Grand Total</p>
                            <p class="mb-0 font-16 m-sbd text-black"><span id="total_cart_amount"></span></p>
                        </div>
                        <!-- <button
                        onclick=""
                            class="addCartBtn col d-flex align-items-center justify-content-center gap-2 text-center border-0 mt-5 rounded-2"
                            style="width: 100%;">
                            <span class="font-18 text-white m-med ">Place Order</span>
                        </button> -->
                        <?php if ($_PAGE_NAME == "Checkout") { ?>
                        <div class="payment-method">
                            <h4>Payment Method</h4>
                            <ul>
                                <li><input type="radio" name="payment" value="cod" id="codPayment"><label for="codPayment"></label><span>Cash on Delivery</span></li>
                                <li><input type="radio" name="payment" value="online" id="onlinePayment"><label for="onlinePayment" ></label><span>Online</span></li>
                            </ul>
                        </div>
                        <div id="checkout-msg"></div>
                            <button onclick="proceedOrder()" class="addCartBtn col d-flex align-items-center justify-content-center gap-2 text-center border-0 mt-5 rounded-2"
                            style="width: 100%;"><span class="font-18 text-white m-med ">Proceed Order</span></button>
                        <?php } ?>
                        <?php if ($_PAGE_NAME == "Cart") { ?>
                        <a href="./checkout"
                            class="addCartBtn col d-flex align-items-center justify-content-center gap-2 text-center border-0 mt-5 rounded-2"
                            style="width: 100%;">
                            <span class="font-18 text-white m-med ">Place Order</span>
                        </a>
                        <?php } ?>
                    </div>
                </div>