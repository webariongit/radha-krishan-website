<?php
$_PAGE_NAME = "Floret Cutout Gold Band"
?>

<!DOCTYPE html>
<html lang="en">

<?php include("./templates/head.php"); ?> 

<body>
    <!-- HEADER SECTION START-->
    <?php include("./templates/header.php"); ?> 

    <div class="offcanvas offcanvas-start bg-lightgreen2" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <div class="col-6">
                    <img src="./assets/img/logo1.webp" alt="logo-offcanvas">
                </div>
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav flex-grow-1" id="offcanvasNavItems">
                <!-- Navigation items will be dynamically added here -->
            </ul>
        </div>
    </div>

    <!-- HEADER SECTION END-->

     <!-- Breadcrumb START -->
     <?php include("./templates/breadcrumb.php"); ?>
    <!-- Breadcrumb END -->

    <section class="detail_wrapper">
        <div class="container">
            <div class="d-flex flex-row gap-5 flex-wrap  align-items-start col-12 pb-5 ">
                 <!-- Product Images START -->
                <?php include("./templates/product-images.php"); ?>
                <!-- Product Images END -->
                
                <div class="col-lg-7 col-12 col-md-6">
                    <div class="col">
                        <h3 class="product_detail_title mb-2 m-blk text-black" id="productTitle"></h3>
                        <p class="product_text mb-3">
                            <span class="m-reg text-grey4">SKU</span>&nbsp;
                            <span class="m-bd text-green" id="productCode"></span>
                        </p>
                        <!-- <p class="text-green filterBy_text mb-3 m-sbd">Buy 2 and get extra 5% off. Use code: RADHASPL5</p> -->
                        <span class="text-grey4 product_text m-reg mb-3 ellipsis" id="productShortDescription"></span>
                        <div class="row gap-lg-0 gap-3">
                            <div class="col">
                                <!-- <div class="col d-flex flex-column">
                                    <label for="select_size" class="product_text m-sbd text-black mb-11">Select
                                        Size</label>
                                    <select name="" class="detail_select border-grey m-bd text-black rounded-2" id="">
                                        <option value="instock">12 ( IN - 12 ) - in stock!</option>
                                    </select>
                                </div> -->
                                <div class="col d-flex flex-column">
                                    <label for="select_size"
                                        class="product_text m-sbd text-black mb-11">Customization</label>
                                        <div id="customization_btns" >

                                        </div>
                                   
                                </div>
                            </div>
                            <div class="col">
                                <div class="col d-flex flex-column position-relative">
                                    <label for="select_size" class="product_text m-sbd text-black mb-11">Check Delivery Details</label>
                                    <form id="pincode-checker-form">
                                    
                                        <input id="pincode" type="text" class="detail_select border-green m-bd text-black rounded-2">
                                        <button type="submit" class="checkDeliveryBtn  align-items-center justify-content-center gap-2 text-center border-green rounded-2 text-white" id="delivery-search-btn">Check</button>
                                       
                                    </form>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-start mt-20">
                                    <div
                                        class="box_1 d-flex justify-content-center align-items-center rounded-circle bg-lightgreen">
                                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_417_3774)">
                                                <path
                                                    d="M3.33333 3.75C3.86377 3.75 4.37247 3.55246 4.74755 3.20083C5.12262 2.84919 5.33333 2.37228 5.33333 1.875C5.33333 1.37772 5.12262 0.900805 4.74755 0.549175C4.37247 0.197544 3.86377 0 3.33333 0C2.8029 0 2.29419 0.197544 1.91912 0.549175C1.54405 0.900805 1.33333 1.37772 1.33333 1.875C1.33333 2.37228 1.54405 2.84919 1.91912 3.20083C2.29419 3.55246 2.8029 3.75 3.33333 3.75ZM4 11.9805V9.44141L4.69167 10.4141C5.0625 10.9375 5.6875 11.25 6.35417 11.25H9.33333H14.6667C15.4042 11.25 16 10.6914 16 10V5C16 4.30859 15.4042 3.75 14.6667 3.75H9.33333C8.59583 3.75 8 4.30859 8 5V8.75H6.7125L4.9375 6.25C4.38333 5.46875 3.44583 5 2.44167 5C1.09167 5 0 6.02344 0 7.28906V10.7305C0 11.3945 0.279167 12.0312 0.779167 12.5L4.0875 15.6016L4.68333 18.957C4.80417 19.6367 5.49167 20.0977 6.21667 19.9844C6.94167 19.8711 7.43333 19.2266 7.3125 18.5469L6.67917 14.9961C6.6125 14.6094 6.41667 14.2539 6.12083 13.9766L3.99583 11.9844L4 11.9805ZM0 13.5352V18.75C0 19.4414 0.595833 20 1.33333 20C2.07083 20 2.66667 19.4414 2.66667 18.75V16.0352L0 13.5352Z"
                                                    fill="#214D23" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_417_3774">
                                                    <rect width="16" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h2 class="m-bd text-green font-14 mb-1" id="expt-delivery"></h2>
                                        <!-- <p class="font-12 text-grey mb-0">Order in next 21 Hrs 6 Mins <a href=""
                                                class="text-blue">T&C</a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-2">
                            <p class="mb-0">
                                <span class="font-24 text-black m-bd" id="total_product_price_with_gst"></span>
                                <!-- <span class="font-24 text-grey2 m-reg"><del>₹ 4,000</del></span> -->
                                <!-- <span class="text-orange m-reg  font-16">(15% OFF)</span> -->
                            </p>
                        </div>
                        <div
                            class="d-flex gap-lg-5 gap-3 justify-content-center justify-content-lg-start align-items-center mt-4 flex-wrap flex-md-nowrap">
                            <div
                                class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3 col-lg-3 col-sm-5 col-7">
                                <button class="hw-50 rounded-circle border-0 bg-lightgreen" id="decreaseProductQty">
                                    <i class="fa fa-minus text-green font-16"></i>
                                </button>
                                <input type="text" value="1" name="product_count"  id="product-cart-quantity"
                                    class="productCountSelect rounded-2 text-center">
                                <button class="hw-50 rounded-circle text-center border-0 bg-lightgreen" id="increaseProductQty">
                                    <i class="fa fa-plus text-green font-16"></i>
                                </button>
                            </div>
                        </div>
                        <div
                            class="d-flex gap-lg-5 gap-3 justify-content-center justify-content-lg-start align-items-center mt-4 flex-wrap flex-md-nowrap">
                           
                            <button
                                id="add-cart-btn"
                                class="addCartBtn d-flex align-items-center justify-content-center gap-2 text-center border-green rounded-2">
                                <span>
                                    <i class="fa fa-bag-shopping text-white font-24"></i>
                                </span>
                                <span class="font-18 text-white m-med ">Add to Cart</span>
                            </button>
                            <button
                                id="remove-cart-btn"
                                class="addCartBtn d-flex align-items-center justify-content-center gap-2 text-center border-green rounded-2 d-none">
                                <span>
                                    <i class="fa fa-bag-shopping text-white font-24"></i>
                                </span>
                                <span class="font-18 text-white m-med ">Add to Cart</span>
                            </button>

                            <button
                                id="add-wishlist-btn"
                                class="addCartBtn d-flex align-items-center justify-content-center gap-2 text-center border-green rounded-2 d-none">
                                <span>
                                    <i class="fa fa-heart text-white font-24"></i>
                                </span>
                                <span class="font-18 text-white m-med ">Add to Wishlist</span>
                            </button>

                            <button
                            id="remove-wishlist-btn"
                                class="addCartBtn d-flex align-items-center justify-content-center gap-2 text-center border-green rounded-2 d-none">
                                <span>
                                    <i class="fa fa-heart text-white font-24"></i>
                                </span>
                                <span class="font-18 text-white m-med ">Remove from Wishlist</span>
                            </button>                            
                        </div>
                        <div class="accordion mt-5 pt-2" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Description
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h3 class="mb-0 font-16 m-bd text-black">Product Details</h3>
                                        <p class="text-grey font-14 m-med mt-3 mb-4">
                                            <span id="productDescription"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Price Breakup
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body overflow-auto">
                                        <table class="col  custom_width_table" id="priceBreakupTable">
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Shipping
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse  collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="accordian_list px-3">
                                            <li class="font-14 text-grey mb-2" style="font-weight: 300;">Free express
                                                shipping</li>
                                            <li class="font-14 text-grey mb-2" style="font-weight: 300;">30 days return
                                                policy</li>
                                            <li class="font-14 text-grey mb-2" style="font-weight: 300;">The price you
                                                see
                                                is based on our average product weight. Your actual product weight may
                                                vary. Details of deviations
                                                will be communicated within 48 hours of your order. Excess/refunds, if
                                                any, shall be adjusted within 48 hours post
                                                del ivery.</li>
                                            <li class="font-14 text-grey" style="font-weight: 300;">Brand owned and
                                                marketed by: Indiejewel Fashions Private Limited 3rd floor, Magnum
                                                Vista, Raghuvanahalli, Bangalore,
                                                Karnataka - 560062</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="customizeBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="customizeBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-wid">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="customizeBackdropLabel">Choose Options</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" >
                    <div id="modalBody"></div>
                    <div class="d-flex col-12 my-2 justify-content-center">
                        <button
                            class="col-6 rounded-3 border-0 my-3 h-56  bg-lightgreen text-center text-green py-2 mx-auto font-16 m-bd">
                            Confirm Customization
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <section class=" similar-product-wrapper">
        <div class="similar-product">
            <div class="container mt-5 pt-5 mb-xl-0 mb-5 pb-md-5 pb-xl-0 pb-0">
                <h3 class="section_heading m-bd text-center mb-41  text-green">Similar Product</h3>
                <div class="swiper featuredCardSwiper">
                    <div class="swiper-wrapper pb-90">
                        <div class="swiper-slide">
                            <div class="product-card overflow-hidden rounded-4 bg-white ">
                                <div class="product_image position-relative">
                                    <div class="swiper productImageSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets/img/earingProduct.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/earingProduct.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/earingProduct.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next small_swiper_btn"></div>
                                        <div class="swiper-button-prev small_swiper_btn"></div>
                                    </div>
                                    <button
                                        class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                        <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                    </button>
                                    <div class="bg-orange rounded-2 px-2 py-1 position-absolute z-2  top-15 start-15">
                                        <span class="text-white m-sbd product_label_text">Best
                                            Seller</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column p-14">
                                    <h2 class="product_title m-sbd text-black text-start">Silver Earring
                                    </h2>
                                    <p class="product_text m-reg text-start text-grey ">It is a long
                                        established fact
                                        that a reader will be distracted by the readable content of a
                                        page when looking
                                        at its layout. </p>
                                    <p class="product_discount_text mb-0">
                                        <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount
                                            on making
                                            charges</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card overflow-hidden rounded-4 bg-white ">
                                <div class="product_image position-relative">
                                    <div class="swiper productImageSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets/img/kangan.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/kangan.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/kangan.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next small_swiper_btn"></div>
                                        <div class="swiper-button-prev small_swiper_btn"></div>
                                    </div>
                                    <button
                                        class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                        <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                    </button>
                                    <div class="bg-green rounded-2 px-2 py-1 position-absolute z-2  top-15 start-15">
                                        <span class="text-white m-sbd product_label_text">New</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column p-14">
                                    <h2 class="product_title m-sbd text-black text-start">Silver Earring
                                    </h2>
                                    <p class="product_text m-reg text-start text-grey ">It is a long
                                        established fact
                                        that a reader will be distracted by the readable content of a
                                        page when looking
                                        at its layout. </p>
                                    <p class="product_discount_text mb-0">
                                        <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount
                                            on making
                                            charges</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card overflow-hidden rounded-4 bg-white ">
                                <div class="product_image position-relative">
                                    <div class="swiper productImageSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets/img/earing2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/earing2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/earing2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next small_swiper_btn"></div>
                                        <div class="swiper-button-prev small_swiper_btn"></div>
                                    </div>
                                    <button
                                        class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                        <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                    </button>
                                </div>
                                <div class="d-flex flex-column p-14">
                                    <h2 class="product_title m-sbd text-black text-start">Silver Earring
                                    </h2>
                                    <p class="product_text m-reg text-start text-grey ">It is a long
                                        established fact
                                        that a reader will be distracted by the readable content of a
                                        page when looking
                                        at its layout. </p>
                                    <p class="product_discount_text  mb-0">
                                        <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount
                                            on making
                                            charges</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card overflow-hidden rounded-4 bg-white ">
                                <div class="product_image position-relative">
                                    <div class="swiper productImageSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets/img/star.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/star.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/star.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next small_swiper_btn"></div>
                                        <div class="swiper-button-prev small_swiper_btn"></div>
                                    </div>
                                    <button
                                        class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                        <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                    </button>
                                </div>
                                <div class="d-flex flex-column p-14">
                                    <h2 class="product_title m-sbd text-black text-start">Silver Earring
                                    </h2>
                                    <p class="product_text m-reg text-start text-grey ">It is a long
                                        established fact
                                        that a reader will be distracted by the readable content of a
                                        page when looking
                                        at its layout. </p>
                                    <p class="product_discount_text mb-0">
                                        <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount
                                            on making
                                            charges</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card overflow-hidden rounded-4 bg-white ">
                                <div class="product_image position-relative">
                                    <div class="swiper productImageSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets/img/mangalsutra2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/mangalsutra2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/mangalsutra2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next small_swiper_btn"></div>
                                        <div class="swiper-button-prev small_swiper_btn"></div>
                                    </div>
                                    <button
                                        class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                        <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                    </button>
                                </div>
                                <div class="d-flex flex-column p-14">
                                    <h2 class="product_title m-sbd text-black text-start">Silver Earring
                                    </h2>
                                    <p class="product_text m-reg text-start text-grey ">It is a long
                                        established fact
                                        that a reader will be distracted by the readable content of a
                                        page when looking
                                        at its layout. </p>
                                    <p class="product_discount_text mb-0">
                                        <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount
                                            on making
                                            charges</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card overflow-hidden rounded-4 bg-white ">
                                <div class="product_image position-relative">
                                    <div class="swiper productImageSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets/img/mangalsutra2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/mangalsutra2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/mangalsutra2.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next small_swiper_btn"></div>
                                        <div class="swiper-button-prev small_swiper_btn"></div>
                                    </div>
                                    <button
                                        class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                        <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                    </button>
                                </div>
                                <div class="d-flex flex-column p-14">
                                    <h2 class="product_title m-sbd text-black text-start">Silver Earring
                                    </h2>
                                    <p class="product_text m-reg text-start text-grey ">It is a long
                                        established fact
                                        that a reader will be distracted by the readable content of a
                                        page when looking
                                        at its layout. </p>
                                    <p class="product_discount_text mb-0">
                                        <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount
                                            on making
                                            charges</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card overflow-hidden rounded-4 bg-white ">
                                <div class="product_image position-relative">
                                    <div class="swiper productImageSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets/img/star.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/star.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/star.webp" alt="product-image" width=""
                                                    height="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next small_swiper_btn"></div>
                                        <div class="swiper-button-prev small_swiper_btn"></div>
                                    </div>
                                    <button
                                        class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                        <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                    </button>
                                </div>
                                <div class="d-flex flex-column p-14">
                                    <h2 class="product_title m-sbd text-black text-start">Silver Earring
                                    </h2>
                                    <p class="product_text m-reg text-start text-grey ">It is a long
                                        established fact
                                        that a reader will be distracted by the readable content of a
                                        page when looking
                                        at its layout. </p>
                                    <p class="product_discount_text mb-0">
                                        <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount
                                            on making
                                            charges</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>

    </section> -->

     <!-- Featured Product SECTION START-->
     <?php  include("./templates/featured-products.php"); ?> 
    <!-- Featured Product SECTION END-->
    
      <!-- FOOTER START -->
      <?php include("./templates/footer.php"); ?>
        <!-- FOOTER END -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                500: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1100: {
                    slidesPerView: 4,
                },
            },
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,

            thumbs: {
                swiper: swiper,
            },
        });
        var swiper = new Swiper(".featuredCardSwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1100: {
                    slidesPerView: 4,
                },
            },
        });

        const url = new URL(window.location.href);
        // Get the value of the 'order_id' parameter
        const product_id =  url.searchParams.get('product_id');
        let variation_id =  url.searchParams.get('v_id') ? url.searchParams.get('v_id') : null;

        var productDetails;

        let cartBtn = document.getElementById('add-cart-btn');
        let removeCartBtn = document.getElementById('remove-cart-btn');

        let wishlistBtn = document.getElementById('add-wishlist-btn');
        let removeWishlistBtn = document.getElementById('remove-wishlist-btn');


        var loginModal = new bootstrap.Modal(document.getElementById('loginBackdrop'), {backdrop: true});
        let spinner = `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

        function initProductDetails() {  
           

            APIFetcher.fetchData(`${API_BASE_URL}/product-details?id=${product_id}`, 'GET', {}, localStorage.getItem('ft-token'))
            .then(response => {

                productDetails = response;

                // Render HTML using the response data
                try {
                    // ComponentGenerator.makeVarGlobal({'response': response})
                    console.log("REPONSE DATA", response)
                        response?.data?.image.map(image => {
                            image.thumbnail = image.thumbnail ? response.base_url + image.thumbnail : response.base_url + image.image
                            image.image = response.base_url + image.image;

                            document.getElementById('productSwiperSliderWrapper').innerHTML += `<div class="swiper-slide"><img src="${image.image}" width="" height="" alt="product-image" /></div>`;

                            document.getElementById('productThumbSwiperSliderWrapper').innerHTML += `<div class="swiper-slide"><img src="${image.thumbnail}" width="" height="" alt="product-image" /></div>`;

                            

                            return image;
                        } );
                
                        document.getElementById('productCode').innerText = response?.data?.productcode;
                        document.getElementById('productTitle').innerText = response?.data?.productname;
                        document.getElementById('productShortDescription').innerHTML = response?.data?.description;
                        document.getElementById('productDescription').innerHTML = response?.data?.description;

                        try {

                            updateAttributeClass();
                           

                                  // Get the table element where you want to insert the content
                                const customization_btns = document.getElementById('customization_btns');

                                // Insert the HTML content into the table
                                customization_btns.insertAdjacentHTML('beforeend',  `<button onclick="updateAttributeClass()" class="detail_select col-12 border-gray m-med text-grey4 rounded-2 bg-white" type="button" data-bs-toggle="modal" data-bs-target="#customizeBackdrop">
                                    Choose Variation
                                    </button>`);  

                           

                                updatePriceBreakup();
                           


                           
                           
                        } catch (e) {
                            console.log(e);
                        }

                        
                        
                        
            
                    
                        // if(response?.data?.image)
                        //     response.data.image = response.base_url + response?.data?.image;

                        
                        initProductSlider(response, {wrapperId: "customProductCardSlider", key: "similar_products"});
                        
                    
                    
                        

                    //     initSliders();

                        checkWishlist();
                    //     checkCart();

                    document.querySelector('#add-wishlist-btn').addEventListener('click', () => {
                        addToWishlist();
                    })

                    document.querySelector('#remove-wishlist-btn').addEventListener('click', () => {
                        removeToWishlist();
                    })

                    document.querySelector('#add-cart-btn').addEventListener('click', () => {
                        addToCart();
                    })

                    document.querySelector('#remove-cart-btn').addEventListener('click', () => {
                        removeFromCart();
                    })

                    document.querySelector('#increaseProductQty').addEventListener('click', () => {
                        updateProductQty(1);
                    })

                    document.querySelector('#decreaseProductQty').addEventListener('click', () => {
                        updateProductQty(-1);
                    })

            

                    emitter.subscribe('productVariationUpadated', data => {
                        console.log(data);
                        assets = data;
                        checkCart() 
                    });

                } catch (e) {
                    console.warn(e)
                }
                
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function initProductSlider(response, data) 
        {

            const customCode = document.querySelector(`#${data.wrapperId}`);
            document.querySelector('#FeaturedProductWrapperHeading').innerText = "Similar Products";
            if (customCode) {
                // console.log(response)
                response = JSON.parse(JSON.stringify(response))
                console.log(response)
                let featured_products = response?.data[data.key];

                // filter eligible products
                // featured_products = featured_products.filter(p => (p.material_attribute !== undefined && p.material_attribute.length > 0));

                featured_products.map(product => {
                    product.image_thumb = response.base_url + product.image_thumb
                    product.image = response.base_url + product.image
                    product.created_at = DateTime.formatDate(product.created_at);

                    // let reviews = +product.reviews;
                    // console.log('review', reviews)
                    // product.reviews = '';
                    // while (reviews > 0) {
                    //     product.reviews += ' <img src="images/star.svg" alt="">';
                    //     reviews--;
                    // }

                    // if (product.material_attribute) {
                    //     // let VARIATIONS =  product.material_attribute.find(e => e.attribute_class == "VARIATIONS"); 
                    //     let VARIATIONS =  product.material_attribute[0]; 

                        
                    
                        
                    //     let lowestOfferPrice = Number.MAX_SAFE_INTEGER;

                    //     if (VARIATIONS && VARIATIONS.hasOwnProperty('variations')) {
                            
                    //         for (const item of VARIATIONS.variations) {
                                
                    //             const offerPrice = parseFloat(item.value.Offer_Amount);
                                
                    //             if (offerPrice < lowestOfferPrice) {
                    //                 lowestOfferPrice = offerPrice;
                    //                 product.total_offer_price = item.value.Offer_Amount;
                    //                 product.making_charges = item.value.Making_Charge;
                    //                 product.variation_id = item.id;
                    //             }
                    //         }
                    //     } 
                    // }

                    

                    return product;
                } );

                ComponentGenerator.populateComponent({ component: 'custom-product-card-slide', data: featured_products})
                .then(css => {
                    document.querySelector(`#${data.wrapperId}`).innerHTML = css; 
                })
            } else {
                // The HTML code is not yet loaded, wait and check again
                setTimeout(() => initProductSlider(response), 100); // Adjust the timeout as needed
            }
                    
        
        }

        function initPincodeChecker() {

            let myPincode = localStorage.getItem(TOKEN_PREFIX+'pincode');

            let pincode =  document.getElementById('pincode');

            pincode.value = myPincode ? myPincode : '';
            let deliveryBtn = document.getElementById('delivery-search-btn');


            document.getElementById('pincode-checker-form').addEventListener('submit',(e) => {
                    e.preventDefault();
                
                    console.log('initPincodeChecker()', pincode.value, countDigits(pincode.value))

                    if (countDigits(pincode.value) == 6) {
                        localStorage.setItem(TOKEN_PREFIX+'pincode', pincode.value);

                        // cart_flag = isCartPageOpen ? 1 : 0;
                        cart_flag = typeof isCartPageOpen !== 'undefined' ? (isCartPageOpen ? 1 : 0) : 0;

                        deliveryBtn.setAttribute('disabled', true)
                        deliveryBtn.innerHTML =  `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

                        APIFetcher.fetchData(`${API_BASE_URL}/check-pincode`, 'POST', {delivery_postcode: pincode.value, pickup_postcode: '700002', cart_flag}, localStorage.getItem(TOKEN_PREFIX+'token'))
                        .then(response => {
                            // Render HTML using the response data

                            deliveryBtn.innerHTML = 'Check';
                            deliveryBtn.removeAttribute("disabled");

                            console.log(response)
                            document.getElementById('expt-delivery').innerHTML = response.message;
                            document.getElementById('expected_delivery_charges'.innerHTML = response.estimated_delivery_charge)
                            
                            
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    } else {
                        document.getElementById('expt-delivery').innerHTML = "Please enter a valid pincode.";
                    }
                    

                   
                })
        }

        function countDigits(text) {
            // Regular expression to match non-digits
            const nonDigitRegex = /\D/;
            // Test if the string contains any non-digits
            if (nonDigitRegex.test(text)) {
                // If non-digits are found, return -1
                return -1;
            }
            // Regular expression to match digits
            const digitRegex = /\d/g;
            // Match digits in the text
            const matches = text.match(digitRegex);
            
            if (matches) {
                // If matches are found, return the count of digits
                return matches.length;
            } else {
                // If no matches are found, return -1
                return -1;
            }
        }

        function updateAttributeClass() {
                // Get the modalBody element where you want to insert the content
                const modalBody = document.getElementById('modalBody');

                modalBody.innerHTML = '';
                
                

                productDetails?.data?.material_attribute.forEach((material_attribute,i) => {
                    let variationValues = ''
                    material_attribute.variations.forEach(variation => {
                        
                        if (variation_id == null )
                        updateSelectedVariation(variation.id);

                        const obj = variation.value;
                        let properties = '';
                        // Iterate over the object properties
                        for (const key in obj) {
                            if (Object.hasOwnProperty.call(obj, key)) {
                                const value = obj[key];
                                console.log(`${key}: ${value}`);
                                if('images' != key)
                                properties +=  ` <p class="mb-0 font-10 m-med"><strong>${(key).replace(/_/g, " ")}</strong> : ${value}</p> `;
                            }
                        }

                        variationValues += `
                                                        <div class="metal_card">
                                                            <input ${variation.id == variation_id ? 'checked' : '' } onclick="updateSelectedVariation(${variation.id})" type="radio" id="variation_${variation.id}" name="metal" class="d-none">
                                                            <label for="variation_${variation.id}" class="py-2 px-3 rounded-3 d-flex flex-column ">
                                                                ${properties}
                                                            </label>
                                                        </div>
                                                   `;
                    });

                    let option = `<div class="d-flex flex-column mb-41">
                    <h3 class="text-black font-18 mb-3 m-bd">Metal : ${material_attribute.attribute_class}</h3>
                    <div class="d-flex flex-row flex-wrap gap-10">
                                                ${variationValues}
                                                </div>
                                            </div>`;
                // Insert the HTML content into the modalBody
                 modalBody.insertAdjacentHTML('beforeend', option); 

                }) 
            
        }

        function updateSelectedVariation(v_id) {
            variation_id = v_id;
            history.pushState(null, APP__NAME, BASE_URL + `/product?product_id=${product_id}&v_id=${v_id}`);
            updatePriceBreakup();
        }

        function addToWishlist() {
            if (localStorage.getItem(TOKEN_PREFIX+'token')) {
                if (product_id && variation_id) {
                    wishlistBtn.setAttribute('disabled', true)
                    wishlistBtn.innerHTML = spinner;

                    APIFetcher.fetchData(`${API_BASE_URL}/user/wishlist`, 'POST', {product_id, variation_id}, localStorage.getItem(TOKEN_PREFIX+'token'))
                    .then(response => {
                        // Render HTML using the response data

                        wishlistBtn.innerHTML = `<span>
                                        <i class="fa fa-heart text-white font-24"></i>
                                    </span><span class="font-18 text-white m-med "> Add to Wishlist</span>`;
                        wishlistBtn.removeAttribute("disabled");

                        console.log(response)

                        // Toast.success(response.message);

                        localStorage.setItem(TOKEN_PREFIX+'wishlist', JSON.stringify(response.data) );
                        emitter.publish('wishlist-updated', response.wishlist_count);
                        checkWishlist()
                        
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });

                } else {
                    //alert("please select a varition ")
                    // Toast.error("Please select all options of product varition.");
                }

            } else {
                // var loginModal = new bootstrap.Modal(document.getElementById('login'), {backdrop: true})
                loginModal.toggle();
            }

        }

        function checkWishlist() {
            if (localStorage.getItem(TOKEN_PREFIX+'wishlist')) {
            let wishlist =  JSON.parse((localStorage.getItem(TOKEN_PREFIX+'wishlist')));


            let isWislisted = wishlist.find(w => {
                if(w.product_id == product_id) {
                    return (w.variation_id == variation_id ) ? true: false;
                }
            
            });
                console.log(isWislisted)
            if (isWislisted) {
                document.querySelector('#remove-wishlist-btn').classList.remove('d-none')
                document.querySelector('#add-wishlist-btn').classList.add('d-none')
                
            } else {
                document.querySelector('#remove-wishlist-btn').classList.add('d-none')
                document.querySelector('#add-wishlist-btn').classList.remove('d-none')
            }

            }
        }

        function removeToWishlist() {
            if (localStorage.getItem(TOKEN_PREFIX+'wishlist')) {
                let wishlist =  JSON.parse((localStorage.getItem(TOKEN_PREFIX+'wishlist')));
            
                let isWislisted = wishlist.find(w => (w.product_id == product_id && w.variation_id == variation_id));
                if (isWislisted) {

                    removeWishlistBtn.setAttribute('disabled', true)
                    removeWishlistBtn.innerHTML = spinner;

                    APIFetcher.fetchData(`${API_BASE_URL}/user/wishlist/${isWislisted.id}`, 'DELETE', {}, localStorage.getItem(TOKEN_PREFIX+'token'))
                    .then(response => {
                        // Render HTML using the response data

                        removeWishlistBtn.innerHTML = `<span>
                                        <i class="fa fa-heart text-white font-24"></i>
                                    </span> <span class="font-18 text-white m-med ">Remove from Wishlist</span>`;
                        removeWishlistBtn.removeAttribute("disabled");

                        console.log(response)

                        // Toast.success(response.message);
                        localStorage.setItem(TOKEN_PREFIX+'wishlist', JSON.stringify(response.data) );
                        emitter.publish('wishlist-updated', response.wishlist_count);
                        checkWishlist();
                        
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                    
                }

        }
        }

        function addToCart() {
            if (localStorage.getItem(TOKEN_PREFIX+'token')) {
            

                //let ast =  JSON.stringify(assets);
                if (variation_id) {
                    let quantity = document.getElementById('product-cart-quantity').value;
            
                    cartBtn.setAttribute('disabled', true)
                    cartBtn.innerHTML = spinner;

                    APIFetcher.fetchData(`${API_BASE_URL}/user/cart`, 'POST', {product_id, quantity, variation_id }, localStorage.getItem(TOKEN_PREFIX+'token'))
                    .then(response => {
                        // Render HTML using the response data

                        cartBtn.innerHTML = ` <span>
                                        <i class="fa fa-bag-shopping text-white font-24"></i>
                                    </span>
                                    <span class="font-18 text-white m-med ">Add to Cart</span>`;
                        cartBtn.removeAttribute("disabled");

                        console.log(response)

                        // Toast.success(response.message);

                        

                        localStorage.setItem(TOKEN_PREFIX+'cart', JSON.stringify(response.data) );
                        emitter.publish('cart-updated', response.cart_count);
                        // checkCart()
                        
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                } else {
                    // Toast.error("Please select all options of product varition.");
                }
            

            } else {
                loginModal.toggle();
            }
        
        }

    function removeFromCart() {
        if (localStorage.getItem(TOKEN_PREFIX+'cart')) {

            removeCartBtn.setAttribute('disabled', true)
            removeCartBtn.innerHTML = spinner;

            let cart =  JSON.parse((localStorage.getItem(TOKEN_PREFIX+'cart')));
            let isInCart = cart.find(w => w.product_id == product_id);

            if (isInCart) {

                APIFetcher.fetchData(`${API_BASE_URL}/user/cart/${isInCart.id}`, 'DELETE', {}, localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data

                    removeCartBtn.innerHTML = `<span>
                                    <i class="fa fa-bag-shopping text-white font-24"></i>
                                </span>
                                <span class="font-18 text-white m-med ">Remove From Cart</span> `;
                    removeCartBtn.removeAttribute("disabled");

                    console.log(response)

                    // Toast.success(response.message);
                    localStorage.setItem(TOKEN_PREFIX+'cart', JSON.stringify(response.data) );
                    emitter.publish('cart-updated', response.cart_count);
                    checkCart();
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });
                
            }
            else {
                getCart()
            }

    }
    }

    function updateProductQty(action) {

        if (localStorage.getItem(TOKEN_PREFIX+'token')) {
            let currentQty = document.querySelector('#product-cart-quantity').value;
            let newQty = +currentQty + action;
            document.querySelector('#product-cart-quantity').value = newQty;
            if (newQty) {
                addToCart();
            } else {
                document.querySelector('#decreaseProductQty').setAttribute('disable', true);
                removeFromCart();
            }
        } else {
            // var loginModal = new bootstrap.Modal(document.getElementById('login'), {backdrop: true})
            loginModal.toggle();
        }

        

    }


    function checkCart() {
        if (localStorage.getItem(TOKEN_PREFIX+'cart')  && localStorage.getItem(TOKEN_PREFIX+'cart')  != 'undefined') {
          let cart =  JSON.parse((localStorage.getItem(TOKEN_PREFIX+'cart')));

          let isInCart = cart.find(w => {
                if(w.product_id == product_id) {
                    w.assets = JSON.parse(w.assets);

                    return (w.assets.id == variation_id ) ? true: false;
                }
            
            });
            console.log(isInCart)

          if (isInCart && isInCart.assets && isInCart.assets.id == variation_id) {

            document.querySelector('#product-cart-quantity').value = isInCart.qty;
            document.querySelector('#remove-cart-btn').classList.remove('d-none')
            document.querySelector('#add-cart-btn').classList.add('d-none')
            return 0; 
          }
        }

        document.querySelector('#product-cart-quantity').value = 1;
        document.querySelector('#remove-cart-btn').classList.add('d-none')
        document.querySelector('#add-cart-btn').classList.remove('d-none')
    }

    function updatePriceBreakup() {
        // Create a temporary container element
        const tempContainer = document.createElement('div');

        let price_breakup = `<tr class="border-bottom h-32">
                            <th class="font-14 m-sbd text-black">
                                Component
                            </th>
                            <th class="font-14 m-sbd text-black">
                                Rate
                            </th>
                            <th class="font-14 m-sbd text-black">
                                Weight
                            </th>
                            <th class="font-14 m-sbd text-black">
                                Value
                            </th>
                            <th class="font-14 m-sbd text-black">
                                Final Value
                            </th>
                        </tr>`;

        let current_price = productDetails?.data?.price_attribute.find(v => v.variation_id == variation_id);

        console.log(current_price);

        current_price.price_breakup.forEach(e => {
            
            price_breakup += `<tr class="border-bottom h-32">
                <td class="font-14 text-grey4 m-reg">${e.component}</td>
                <td class="font-14 text-grey4 m-reg">${e.rate}</td>
                <td class="font-14 text-grey4 m-reg text-center">${e.weight}</td>
                <td class="font-14 text-grey4 m-reg text-center">${e.value}</td>
                <td class="font-14 text-grey4 m-reg text-center">${e.final_value}</td>
                </tr>`;

        })

            // Get the table element where you want to insert the content
        const table = document.getElementById('priceBreakupTable');
        table.innerHTML = "";
        // Insert the HTML content into the table
        table.insertAdjacentHTML('beforeend', price_breakup);  

        document.getElementById('total_product_price_with_gst').innerText = current_price.total_product_price_with_gst;
    }


        initProductDetails();
        initPincodeChecker()

    </script>

</body>

</html>