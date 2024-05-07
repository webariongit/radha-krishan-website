<header>

    <div class="top_header">
        <div class="bg-lightgreen col">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row gap-10 align-items-center ">
                        <span><i class="fa fa-phone text-green"></i></span>
                        <a class="text-green mobile_number_text m-reg" id="header_comp_mobile"></a>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-end gap-10">
                        <button id="loginBtn" type="button" data-bs-toggle="modal" data-bs-target="#loginBackdrop"
                            class="login_btn bg-none border-0 transparent_btn m-med text-green">Login</button>
                        <!-- <div class="top_header_vertical_line bg-green"></div>
                        <a href="#" class="login_btn transparent_btn m-med text-green">Sign Up</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_header">
        <div class="middleHeaderProps">
            <div class="container">
                <div
                    class="d-flex flex-row align-items-center justify-content-between gap-lg-0 gap-3 flex-wrap py-3  py-lg-0">
                    <div class="col-2  col-md-1 col-lg-3">
                        <div class="header_logo col-lg-10 col-12">
                            <a href="<?= $BASE_URL ; ?>" class="d-lg-block d-none">
                                <img src="<?= $BASE_URL ; ?>assets/img/logo1.webp" width="" height="" alt="site-logo">
                            </a>
                            <a href="<?= $BASE_URL ; ?>" class="d-lg-none d-block">
                                <img src="<?= $BASE_URL ; ?>assets/img/logo2.webp" width="" height="" alt="site-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-9 col-md-4 col-lg-4">
                        <div class="col-12">
                            <input type="text" id="searchKey" placeholder="Type jewellery name and then press enter" class="searchForJewell col-12">
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                        <div class="d-flex col gap-35 justify-content-end align-items-center">
                            <a href="<?= $BASE_URL ; ?>cart">
                                <div class="position-relative">
                                    <img src="<?= $BASE_URL ; ?>assets/img/cart.svg" width="" height="" alt="cart-image">
                                    <p id="cart_count"
                                        class="cart_items m-sbd position-absolute mb-0 text-magenta text-center bg-white d-none" ></p>
                                </div>
                            </a>
                            <a href="<?= $BASE_URL ; ?>wishlist">
                                <div class="position-relative">
                                    <img src="<?= $BASE_URL ; ?>assets/img/heart.svg" width="" height="" alt="whislist-image">
                                    <p id="wishlist_count"
                                        class="cart_items m-sbd position-absolute mb-0 text-magenta text-center bg-white d-none"></p>
                                </div>
                            </a>

                           
                            <div id="profileIcon" class="d-none">
                                <a href="<?= $BASE_URL ; ?>profile">
                                    <img src="<?= $BASE_URL ; ?>assets/img/profile.svg" width="" height="" alt="profile-image">
                                </a>
                            </div>
                            
                            <div>
                                <select name="currancyselect" id="currancy_select">
                                    <option value="INR">INR</option>
                                </select>
                            </div>
                            <button lass="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                class="border-0 rounded-2 p-2 bg-none d-block d-lg-none">
                                <i class="fa fa-bars text-green font-18"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom_header bg-white d-lg-block d-none">
        <div class="container" >
            <ul class="position-relative d-flex justify-content-center flex-row align-items-center position-relative gap-50 " id="menu-container">
                <template id="header-navigation-menu"></template>
               
                <li class="py-header list-menu">
                    <a href="<?= $BASE_URL ; ?>blogs" class="nav-link">
                        <span class="text-green nav_props m-sbd">Blogs</span>
                    </a>
                </li>
                <li class="py-header list-menu">
                    <a href="<?= $BASE_URL ; ?>contact-us" class="nav-link">
                        <span class="text-green nav_props m-sbd">Contact Us</span>
                    </a>
                </li>
                <li class="py-header position-relative offer-menu">

                    <a href="<?= $BASE_URL ; ?>ProductListing.html" class="nav-link d-flex align-items-end gap-1">
                        <span class="text-green nav_props m-sbd">Offers</span>
                        <span><i class="fa fa-sort-down text-green"></i></span>
                    </a>
                    <div class="offersubmenu col-12 rounded-4 bg-white">
                        <div class="d-flex flex-column">
                            <ul class="pl-0 ">
                                <li class="mb-11">
                                    <a href="<?= $BASE_URL ; ?>ProductListing.html"
                                        class="d-flex flex-row align-items-center  gap-3">
                                        <span><img src="<?= $BASE_URL ; ?>assets/img/cangan.webp" alt="kangan" class="wh-40"></span>
                                        <span class="mb-0 font-14 text-grey ">Upto 20% off Silver Ring</span>
                                    </a>

                                </li>
                                <li class="mb-11">
                                    <a href="<?= $BASE_URL ; ?>ProductListing.html"
                                        class="d-flex flex-row align-items-center  gap-3">
                                        <span><img src="<?= $BASE_URL ; ?>assets/img/cangan.webp" alt="kangan" class="wh-40"></span>
                                        <span class="mb-0 font-14 text-grey ">Additional 25% Off on your 1st
                                            Installment on GMS</span>
                                    </a>

                                </li>
                                <li class="mb-11">
                                    <a href="<?= $BASE_URL ; ?>ProductListing.html"
                                        class="d-flex flex-row align-items-center  gap-3">
                                        <span><img src="<?= $BASE_URL ; ?>assets/img/cangan.webp" alt="kangan" class="wh-40"></span>
                                        <span class="mb-0 font-14 text-grey ">All Offers</span>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

</header>


<!-- header models --->
<div class="offcanvas offcanvas-start bg-lightgreen2" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <div class="col-6">
                    <img src="<?= $BASE_URL ; ?>assets/img/logo1.webp" alt="logo-offcanvas">
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
    <div class="modal fade" id="loginBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="loginBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login_popup">
            <div class="modal-content rounded-5 p-3">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="loginBackdropLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div   id="login-view">
                    <h3 class="text-center login_text_heading ">Login</h3>
                    <div class="success-msg-login  col-12 d-flex align-items-center justify-content-center "></div>
                        <form id="login-form">
                            <div class="border_horzontal"></div>
                            <div class="d-flex flex-column pt-3">
                                <div class="col d-flex flex-column">
                                    <label for="Country" class="font-14 text-grey5 m-med">Whatsapp Phone Number</label>
                                    <div class="d-flex flex-row gap-20 justify-content-between mt-10 col-12">
                                        <select name="PhoneNumber" id="PhoneNumber" class="border-grey rounded-2 h-40  col-2">
                                            <option value="">+91</option>
                                        </select>
                                        <input type="text" name="" id="" class="col border-grey rounded-2 h-40 ">
                                    </div>

                                </div>
                            </div>
                            <button type="submit" 
                                class="greenbtn mt-4 col-12 d-flex align-items-center justify-content-center gap-2 text-center border-green rounded-2">
                                <span class="font-18 text-white m-med ">Login</span>
                            </button>
                        </form>
                    </div>
                    

                

                 <div   id="otp-view" class="d-none">
                        <h3 class="text-center login_text_heading ">Verify Mobile Number</h3>
                        <div class="success-msg-otp col-12 d-flex align-items-center justify-content-center "> </div>
                        <div class="border_horzontal mb-3"></div>
                        <form id="otp-form">
                        <div class="d-flex flex-column pt-3">
                            <div class="col d-flex flex-column">
                                <label for="Country" class="font-14 text-center text-grey5 m-med">Enter OTP</label>
                                <div class="d-flex flex-row gap-20 mb-4 justify-content-center mt-10 col-12">
                                    <input type="hidden" class="form-control" name="otp_mobile_number" id="otp_mobile_number">
                                    <input type="text"  placeholder="*" class="text-center otp_box rounded digit-input" oninput="moveToNextInput(1)">
                                    <input type="text"  placeholder="*" class="text-center otp_box rounded digit-input" oninput="moveToNextInput(2)">
                                    <input type="text"  placeholder="*" class="text-center otp_box rounded digit-input" oninput="moveToNextInput(3)">
                                    <input type="text"  placeholder="*" class="text-center otp_box rounded digit-input" >
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="greenbtn mt-4 col-12 d-flex align-items-center justify-content-center gap-2 text-center border-green rounded-2">
                            <span class="font-18 text-white m-med ">Verify & Continue</span>
                        </button>
                        </form>
                        <div class="col-12 d-flex align-items-center justify-content-center pt-1">
                            <p id="resendOTP" >Did't get OTP? <a href="javascript:void(0)">Resend OTP</a></p>
                            <p id="resendTimer" class="d-none">Resend OTP in <span id="OtpTimer">00:40</span></p>
                        </div>        
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
<!--- header models end --->
<script>

// Get references to the input field and button
    const searchInput = document.getElementById('searchKey');

    let urlCustom = new URL(window.location.href);
    var searchInputValue =  urlCustom.searchParams.get('keyword');

    searchInput.value = searchInputValue ? searchInputValue : '';

   // Add a click event listener to the button

   searchInput.addEventListener('keydown', function (event) {
  //  event.preventDefault();
    // console.log(event.key);
    if (event.key === 'Enter') {
      event.preventDefault();
        // If the Enter key is pressed, perform the search
        performSearch();
    }
  });

  function performSearch() {
    // Get the text from the input field
    const keyword = searchInput.value;

    // console.log(`${BASE_URL}products.html?keyword=${encodeURIComponent(keyword)}`);
    // Redirect to products.html with the query parameter
    window.location.href = `${BASE_URL}products?keyword=${encodeURIComponent(keyword)}`;
  }

</script>