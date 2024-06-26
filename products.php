<!DOCTYPE html>
<html lang="en">


<?php include("templates/head.php"); ?> 

<body>
    <!-- HEADER SECTION START-->
    <?php include("templates/header.php"); ?> 
    <!-- HEADER SECTION END-->

    <section class="listing-banner-wrapper">
        <div class="bg-listing bg">
            <div class="container">
                <div class="d-flex flex-row align-items-center gap-4 pt_listing_banner">
                    <a href="">
                        <span class="text-white text-breadcrumb m-med">
                            Home
                        </span>
                    </a>
                    <span>
                        <i class="fa fa-angles-right text-white"></i>
                    </span>
                    <a href="">
                        <span class="text-white text-breadcrumb m-med">
                            Earrings
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="listing_wrapper">
        <div class="container mb-5">
            <div class="mt-49 col-12 d-flex align-items-start flex-wrap gap-5">
                <div class="filter_section sticky top-5 w-324">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <span class="filterBy_text m-sbd  text-black ">Filter By</span>
                        <button class="border-green bg-white py-1 d-flex align-items-center  h-28  px-3 rounded-2 clear-btn">
                            <span class="text-green m-reg clearAll text-center">Clear All</span>
                        </button>
                    </div>
                    <!-- <div class="d-flex flex-column">
                        <div
                            class="filterBtn mt-29 bg-white rounded-1 h-50 d-flex flex-row justify-content-between align-items-center">
                            <span class="m-sbd filter_btn_text">Product Type</span>
                            <span class="">
                                <i class="fa fa-angle-down text-green"></i>
                            </span>
                        </div>
                        <div class="h-200 overflow-y-auto">
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Earrings</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Rings</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Necklaces</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Pendants</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Bracelets</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Necklaces</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Pendants</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Bracelets</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Necklaces</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Pendants</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Bracelets</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div
                            class="filterBtn mt-29 bg-white rounded-1 h-50 d-flex flex-row justify-content-between align-items-center">
                            <span class="m-sbd filter_btn_text">Weight Ranges</span>
                            <span class="">
                                <i class="fa fa-angle-down text-green"></i>
                            </span>
                        </div>
                        <div class="h-200 overflow-y-auto">
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">0-2 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(113)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">2-5 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">5 - 10 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(04)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">10-20 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(204)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">20-30 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">0-2 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(113)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">2-5 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">5 - 10 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(04)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">10-20 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(204)</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">20-30 g</span>
                                    <span class="text-grey3 filter_btn_text m-sbd">(2304)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div
                            class="filterBtn mt-29 bg-white rounded-1 h-50 d-flex flex-row justify-content-between align-items-center">
                            <span class="m-sbd filter_btn_text">Gender</span>
                            <span class="">
                                <i class="fa fa-angle-down text-green"></i>
                            </span>
                        </div>
                        <div class="h-200 overflow-y-auto">

                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Unisex </span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Boy</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey filter_btn_text m-med">Girl</span>
                                </p>
                            </div>


                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div
                            class="filterBtn mt-29 bg-white rounded-1 h-50 d-flex flex-row justify-content-between align-items-center">
                            <span class="m-sbd filter_btn_text">Price</span>
                            <span class="">
                                <i class="fa fa-angle-down text-green"></i>
                            </span>
                        </div>
                        <div class="h-200 overflow-y-auto">

                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">₹ 0 to 250</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">₹ 0 to 250</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">₹ 500 to 1000</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">₹ 1000 to 2000</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">₹ 2000 to 3000</span>
                                </p>
                            </div>


                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div
                            class="filterBtn mt-29 bg-white rounded-1 h-50 d-flex flex-row justify-content-between align-items-center">
                            <span class="m-sbd filter_btn_text">Rating</span>
                            <span class="">
                                <i class="fa fa-angle-down text-green"></i>
                            </span>
                        </div>
                        <div class="h-200 overflow-y-auto">

                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">Top Rating</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">4 and Up</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">3 and Up</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">2 and Up</span>
                                </p>
                            </div>
                            <div class="d-flex flex-row gap-10 align-items-center mt-3">
                                <input type="checkbox" name="productType" class="radioBtn border-green rounded-circle">
                                <p class="mb-0">
                                    <span class="text-grey3 filter_btn_text m-sbd">1 and Up</span>
                                </p>
                            </div>


                        </div>
                    </div> -->
                    <div class="accordion" id="accordionPanelsStayOpenExample"></div>
                </div>
                <div class="w-auto2">
                    <div class="col-md col-12">
                        <div class="d-flex flex-row justify-content-end  h-40">
                            <label class="sortby_text m-bd bg-green rounded-start text-white border-green">Sort
                                by:</label>
                            <select name="" id="" class="px-10 border-green rounded-end">
                                <option value="" selected>Price Low to High</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-start gap-2 my-3">
                            <span class="listing_title text-black m-bd">Filter by :</span>
                            <span class="text-grey result_text m-bd" id="filter-bage-container"></span>
                        </div>

                        <div class="row  gutter-y">
                            <div class="col-xl-4 col-lg-6 col-12 ">
                                <div class="product-card overflow-hidden rounded-4 bg-white ">
                                    <div class="product_image position-relative">
                                        <div class="swiper productImageSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                            </div>
                                            <div class="swiper-button-next small_swiper_btn"></div>
                                            <div class="swiper-button-prev small_swiper_btn"></div>
                                        </div>
                                        <button
                                            class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                            <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                        </button>
                                        <div
                                            class="bg-orange rounded-2 px-2 py-1 position-absolute z-2  top-15 start-15">
                                            <span class="text-white m-sbd product_label_text">Best Seller</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column p-14">
                                        <h2 class="product_title m-sbd text-black text-start">Silver Earring</h2>
                                        <p class="product_text m-reg text-start text-grey ">It is a long established
                                            fact
                                            that a reader will be distracted by the readable content of a page when
                                            looking
                                            at its layout. </p>
                                        <p class="product_discount_text mb-0">
                                            <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount on making
                                                charges</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 ">
                                <div class="product-card overflow-hidden rounded-4 bg-white ">
                                    <div class="product_image position-relative">
                                        <div class="swiper productImageSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                            </div>
                                            <div class="swiper-button-next small_swiper_btn"></div>
                                            <div class="swiper-button-prev small_swiper_btn"></div>
                                        </div>
                                        <button
                                            class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                            <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                        </button>
                                        <div
                                            class="bg-green rounded-2 px-2 py-1 position-absolute z-2  top-15 start-15">
                                            <span class="text-white m-sbd product_label_text">New</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column p-14">
                                        <h2 class="product_title m-sbd text-black text-start">Silver Earring</h2>
                                        <p class="product_text m-reg text-start text-grey ">It is a long established
                                            fact
                                            that a reader will be distracted by the readable content of a page when
                                            looking
                                            at its layout. </p>
                                        <p class="product_discount_text mb-0">
                                            <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount on making
                                                charges</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 ">
                                <div class="product-card overflow-hidden rounded-4 bg-white ">
                                    <div class="product_image position-relative">
                                        <div class="swiper productImageSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
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
                                        <h2 class="product_title m-sbd text-black text-start">Silver Earring</h2>
                                        <p class="product_text m-reg text-start text-grey ">It is a long established
                                            fact
                                            that a reader will be distracted by the readable content of a page when
                                            looking
                                            at its layout. </p>
                                        <p class="product_discount_text mb-0">
                                            <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount on making
                                                charges</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 ">
                                <div class="product-card overflow-hidden rounded-4 bg-white ">
                                    <div class="product_image position-relative">
                                        <div class="swiper productImageSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                            </div>
                                            <div class="swiper-button-next small_swiper_btn"></div>
                                            <div class="swiper-button-prev small_swiper_btn"></div>
                                        </div>
                                        <button
                                            class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                            <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                        </button>
                                        <div
                                            class="bg-orange rounded-2 px-2 py-1 position-absolute z-2  top-15 start-15">
                                            <span class="text-white m-sbd product_label_text">Best Seller</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column p-14">
                                        <h2 class="product_title m-sbd text-black text-start">Silver Earring</h2>
                                        <p class="product_text m-reg text-start text-grey ">It is a long established
                                            fact
                                            that a reader will be distracted by the readable content of a page when
                                            looking
                                            at its layout. </p>
                                        <p class="product_discount_text mb-0">
                                            <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount on making
                                                charges</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 ">
                                <div class="product-card overflow-hidden rounded-4 bg-white ">
                                    <div class="product_image position-relative">
                                        <div class="swiper productImageSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="./assets/img/earingProduct.webp" alt="product-image"
                                                        width="" height="">
                                                </div>
                                            </div>
                                            <div class="swiper-button-next small_swiper_btn"></div>
                                            <div class="swiper-button-prev small_swiper_btn"></div>
                                        </div>
                                        <button
                                            class="wishlist_btn end-15 top-15 position-absolute  bg-white rounded-circle">
                                            <img src="./assets/img/heart.svg" width="" height="" alt="wishlist-icon">
                                        </button>
                                        <div
                                            class="bg-green rounded-2 px-2 py-1 position-absolute z-2  top-15 start-15">
                                            <span class="text-white m-sbd product_label_text">New</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column p-14">
                                        <h2 class="product_title m-sbd text-black text-start">Silver Earring</h2>
                                        <p class="product_text m-reg text-start text-grey ">It is a long established
                                            fact
                                            that a reader will be distracted by the readable content of a page when
                                            looking
                                            at its layout. </p>
                                        <p class="product_discount_text mb-0">
                                            <span class="text-grey m-reg "><b class="m-bd ">20%</b> Discount on making
                                                charges</span>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <nav aria-label="Page navigation example" class="mt-5 pt-2 d-flex justify-content-center">
                        <ul class="pagination gap-1">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
 <!-- FOOTER START -->
 <?php include("templates/footer.php"); ?>
        <!-- FOOTER END -->

    <script>
        const url = new URL(window.location.href);
        const filterData = [];
        const category_id =  url.searchParams.get('category');
        function initFilterBox() {
            // Get the value of the 'order_id' parameter
            var category_id =  url.searchParams.get('category');

            let endPoint = '/filter-list'
            // console.log(typeof category_id, category_id === 'null' )

            // if (typeof category_id === 'string' && category_id === 'null') {
            //     endPoint += '';
            // } else if (category_id) {
            //      endPoint += `?category_id=${category_id}`
            // } 

            // Get all search parameters as an array of key-value pairs
            const searchParams = Array.from(url.searchParams);

            // Now you can iterate through the search parameters
            searchParams.forEach(([key, value]) => {
                if (key != 'category') {
                    filterData.push({ 'filter_name' :key, 'filter_value' : value.split(',')});
                }
            });

            console.log(filterData);


            let queryParams = [];

            if (category_id && typeof category_id === 'string' && category_id != 'null') 
                queryParams.push(`category=${category_id}`);


                // Extract filter_names and filter_values
                const filterNames = filterData.map(obj => obj.filter_name).join(',');
                const filterValues = filterData.map(obj => obj.filter_value.join(',')).join(',');

                queryParams.push(`filter=${filterNames}`)
                queryParams.push(`value=${filterValues}`)


                console.log(queryParams.join('&'))


            APIFetcher.fetchData(`${API_BASE_URL}${endPoint}?${queryParams.join('&')}`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
            .then(response => {
                // Render HTML using the response data

                console.log(response)

                response.data[0].filters.forEach((filter, index) => {

                    if (filter.filter_name == 'Reviews') {
                        console.log(filter.filter_name, filter)
                    }

                    let options = ''

                    filter?.filter_values?.forEach((filter_value, index) => {

                        let isThisFilterSelected = filterData.find(f => f.filter_name == (filter.filter_name).toLowerCase());
                        let isChecked = '';
                        if (isThisFilterSelected) {
                            isChecked = isThisFilterSelected.filter_value.includes(filter_value.key_value.toString());

                            if (isChecked)
                            document.querySelector('#filter-bage-container').innerHTML += `<span class="filter-badge">${filter_value.key_name}<i onclick="updateFilter('${filter.filter_name}', '${filter_value.key_value}')" class="fa-solid fa-xmark close-icon"></i></span>`
                        }

                        options += `<li class="d-flex flex-row gap-10 align-items-center mt-3"><input class="radioBtn border-green rounded-circle" ${isChecked ? 'checked' : '' }  type="checkbox" value="${filter_value.key_value}" onclick="updateFilter('${filter.filter_name}', '${filter_value.key_value}')" ><label for=""></label><span>${filter_value.key_name}</span></li>`
                    })

                document.getElementById('accordionPanelsStayOpenExample').innerHTML +=  
                    ` <div class="accordion-item  mt-29 "">
                    <h2 class="accordion-header" id="panelsStayOpen-heading-${index}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-${index}" aria-expanded="true" aria-controls="panelsStayOpen-collapse-${index}">
                        ${filter.filter_name}
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapse-${index}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-${index}">
                    <div class="accordion-body">
                        <div class="filter-content-box">
                            <ul>
                                ${options}
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>`

                });

                
            

            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function updateFilter(filter_name, filter_value) {
            
            
            filter_name = filter_name.toLowerCase();



            //  let filter_name = url.searchParams.get('filter') ? url.searchParams.get('filter').split(",") : [];
            // let filter_value = url.searchParams.get('value') ? url.searchParams.get('value').split(",") : [];
        
            const existingObj =  filterData.find(fd => filter_name === fd.filter_name)

            if (existingObj) {
                const filterValues = existingObj.filter_value;

                // Check if inputValue is already present in filterValues
                const index = filterValues.indexOf(filter_value);

                if (index !== -1) {
                    // If the value exists, remove it from the array
                    filterValues.splice(index, 1);

                    // If there are no values left, remove the object from filterData
                    if (filterValues.length === 0) {
                        filterData.splice(filterData.indexOf(existingObj), 1);
                    }
                } else {
                    // If the value is not present, add it to the array
                    filterValues.push(filter_value);
                }
            }
            else {
                // If the filter_name doesn't exist in any object, create a new object
                const newObj = { filter_name, filter_value: [filter_value] };
                filterData.push(newObj);
            }

            console.log(filterData);
            
            let queryParams = [];

            if (category_id && typeof category_id === 'string' && category_id != 'null') 
                queryParams.push(`category=${category_id}`);


                // Extract filter_names and filter_values
                filterData.map(obj => {
                    
                    queryParams.push(`${obj.filter_name}=${obj.filter_value.join(',')}`)
                });
            //   const filterValues = filterData.map(obj => obj.filter_value.join(',')).join(',');

                // queryParams.push(`filter=${filterNames}`)
                // queryParams.push(`value=${filterValues}`)


                console.log(queryParams.join('&'))

            window.location.href = BASE_URL + 'products' +  `?${queryParams.join('&')}`;

        
        }

        document.querySelector('.clear-btn').addEventListener('click', () => {
            let queryParams = [];
            if (category_id && typeof category_id === 'string' && category_id != 'null') 
                queryParams.push(`category=${category_id}`);

            window.location.href = BASE_URL + 'products' +  `?${queryParams.join('&')}`;

        });

        initFilterBox();
    </script>
</body>

</html>