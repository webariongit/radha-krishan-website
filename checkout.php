<!DOCTYPE html>
<html lang="en">

<?php
$_PAGE_NAME = "Checkout"
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
        <div class="container mb-15r mt-5">
            <div class="col-12 d-flex flex-row align-items-start gap-5 justify-content-between flex-wrap">
                <div class="w-auto3">
                    <h3 class="font-16 m-bd text-black mb-3 pb-1">Shipping Address</h3>
                    <div class="row gap-lg-0 gap-4">
                    <div class="row mb-4 " id="no-address-msg">
                        <span class="btn " >No Address Found.</span>
                    </div>

                    <div class="row" id="shipping-address-list"></div>
                        <!-- <div class="col-lg col-12">
                            <input type="radio" id="address1" name="address" class="radio-input" checked />
                            <label class="address-label border-grey border-1 col-12 rounded-3 p-4 py-3 px-4 cursor-pointer"
                                for="address1">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h3 class="font-16 text-black mb-2">Home</h3>
                                    <button class="wishlist_btn border-grey bg-white rounded-circle">
                                        <img src="./assets/img/trash.svg" width="14" height="14" alt="trash-icon">
                                    </button>
                                </div>
                                <address class="font-14 text-grey m-reg mb-3">396 Lillian Blvd, Holbrook, NY 11741, USA
                                </address>
                                <button class="border-grey rounded-1 py-1 px-auto text-center col-12">
                                    <span class="font-14 text-black m-reg">Edit Address</span>
                                </button>
                            </label>
                        </div>
                        <div class="col-lg col-12">
                            <input type="radio" id="address2" name="address" class="radio-input" />
                            <label class="address-label border-grey border-1 col-12 rounded-3 py-3 px-4 cursor-pointer"
                                for="address2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h3 class="font-16 text-black mb-2">Home</h3>
                                    <button class="wishlist_btn border-grey bg-white rounded-circle">
                                        <img src="./assets/img/trash.svg" width="14" height="14" alt="trash-icon">
                                    </button>
                                </div>
                                <address class="font-14 text-grey m-reg mb-3">396 Lillian Blvd, Holbrook, NY 11741, USA
                                </address>
                                <button class="border-grey rounded-1 py-1 px-auto text-center col-12">
                                    <span class="font-14 text-black m-reg">Edit Address</span>
                                </button>
                            </label>
                        </div> -->
                    </div>
                    <button
                        data-bs-toggle="modal" data-bs-target="#addAdress"
                        class="text-center d-flex flex-row justify-content-center align-items-center gap-2 py-3 px-auto rounded-3 mt-20 col-12 border-1 border-black bg-white">
                        <span>
                            <i class="fa fa-plus text-black font-14"></i>
                        </span>
                        <span class="text-black font-14">
                            Add New Address
                        </span>
                    </button>
                    <h3 class="font-16 m-bd text-black mb-3 pb-1 mt-4 pt-3">Billing Address</h3>
                    <div class="d-flex flex-row gap-2">
                        <input type="checkbox" name="shippingAddressCheckbox" id="shippingAddressCheckbox" class="shippingadd">
                        <label for="shippingAddressCheckbox" class="text-grey1 font-14  m-reg">Same as shipping address</label>
                    </div>
                    <div class="row" id="billing-address-list"></div>
                </div>
                <?php include("./templates/cart-summery.php"); ?>
                
            </div>
        </div>
    
    </section>

    <?php include("./templates/user-address-modal.php"); ?>
    <?php include("./templates/user-address-edit-modal.php"); ?>

 <!-- FOOTER START -->
 <?php include("./templates/footer.php"); ?>
    <!-- FOOTER END -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>

    var addresses;
    // Get the modal element by its ID
    var modal;
    // Create a new Modal instance using Bootstrap's Modal class
    var modalInstance; 

    const playload = {
        shipping_address: null,
        billing_address: null,
        payment_mode: 'cod',
        transaction_id: '',
        transaction_status: 'pending'
    };


    var shippingAddressCheckbox = document.getElementById('shippingAddressCheckbox');

    if (localStorage.getItem(TOKEN_PREFIX+'token')) {
        initPage();
    } else {
        window.location.href = BASE_URL;
    }

    function initPage() {

        getCartDetails();

        getAddressList();

        initAddressForm();
        initEditAddressForm();

        emitter.subscribe('cart-updated', (data) => {
            let cart = localStorage.getItem(TOKEN_PREFIX+'cart');

            cart = JSON.parse(cart);
            console.log(cart);

        })

        if (playload.payment_mode === 'cod') {
            document.getElementById('codPayment').checked = true;
        } else if (paymentMode === 'online') {
            document.getElementById('onlinePayment').checked = true;
        }

        document.getElementById('onlinePayment').addEventListener('click', () => {
            playload.payment_mode = "online";
            console.log(playload)
        })

        document.getElementById('codPayment').addEventListener('click', () => {
            playload.payment_mode = "cod";
        })

    }

        


        function getAddressList() {

            APIFetcher.fetchData(`${API_BASE_URL}/user/view-address`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
            .then(response => {
                // Render HTML using the response data
                console.log(response);
                addresses = response.addresses;
                console.log(addresses);
                if (response.addresses)
                document.querySelector('#no-address-msg').classList.add('d-none');

                document.querySelector('#shipping-address-list').innerHTML ="";
                document.querySelector('#billing-address-list').innerHTML ="";

                response.addresses.forEach(element => {

                    for (let key in element) {
                        if (element.hasOwnProperty(key)) {
                        if (element[key] === null) {
                            element[key] = '';
                        }
                        }
                    }

                    console.log(element.shipping_address)

                    let checked = element.shipping_address ? 'checked' : '';

                    

                    let card = `<div class="col-6">
                                            <label for="shipping_address-{{id}}" class="address-box billing-address">
                                                <div class="select-box">
                                                    <input ${checked} type="radio" name="shipping_address" id="shipping_address-{{id}}" onchange="selectAddress('{{id}}', 'shipping_address')">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <h4 class="mb-0">{{type}}</h4>
                                                    <p class="mb-0">
                                                        {{name}}
                                                        <br>{{line_1}} , {{line_2}}
                                                        <br> {{landmark}}
                                                        <br> {{city}} Pincode - {{pincode}} 
                                                        <br> {{state}} - {{country}}
                                                        <br>{{phone_no}}, {{alternate_phone_no}}
                                                    </p>
                                                    <div class="address-list-button">
                                                        <button onclick="openEditAddressModel('{{id}}')"  type="button" class=" edit-btn short-button">Edit</button>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>`;

                    document.querySelector('#shipping-address-list').innerHTML += ComponentGenerator.replacePlaceholders(card, element)

                    checked = shippingAddressCheckbox.checked && element.shipping_address ? 'checked' : '';

                    if (element.shipping_address) {
                        playload.shipping_address = element.id;
                        playload.billing_address = shippingAddressCheckbox.checked ?  element.id : null;
                        
                    }

                    card = `<div class="col-6">
                                            <label for="billing_address-{{id}}" class="address-box billing-address">
                                                <div class="select-box">
                                                    <input ${checked} type="radio" name="billing_address" id="billing_address-{{id}}" onchange="selectAddress('{{id}}', 'billing_address')">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <h4 class="mb-0">{{type}}</h4>
                                                    <p class="mb-0">
                                                        {{name}}
                                                        <br>{{line_1}} , {{line_2}}
                                                        <br> {{landmark}}
                                                        <br> {{city}} Pincode - {{pincode}} 
                                                        <br> {{state}} - {{country}}
                                                        <br>{{phone_no}}, {{alternate_phone_no}}
                                                    </p>
                                                    <div class="address-list-button">
                                                        <button onclick="openEditAddressModel('{{id}}')"  type="button" class=" edit-btn short-button">Edit</button>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>`;

                    document.querySelector('#billing-address-list').innerHTML += ComponentGenerator.replacePlaceholders(card, element)
                
                });

                
                console.log('playload', playload)

            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function getCartDetails() {
                APIFetcher.fetchData(`${API_BASE_URL}/user/cart`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data

                    console.log(response)
                    refreshCartView(response)
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }



        function refreshCartView(response) {
            if (response.status ==200){
                    response.data.map(w => {
                        w.product_details.image_thumb = response.base_url + w.product_details.image_thumb;
                    })

                    
                    // document.getElementById('expected_delivery_on').innerHTML = response.order_summary.expected_delivery_on ? response.order_summary.expected_delivery_on : '';
                    document.getElementById('total_price').innerHTML = response.order_summary.total_price;
                    document.getElementById('total_product_discount').innerHTML = response.order_summary.total_product_discount;
                    document.getElementById('total_offer_price').innerHTML = response.order_summary.total_offer_price;
                    document.getElementById('applicable_gst').innerHTML = response.order_summary.applicable_gst;
                    document.getElementById('coupon_saving').innerHTML = response.order_summary.coupon_saving;
                    document.getElementById('expected_delivery_charges').innerHTML = response.order_summary.expected_delivery_charges;
                    document.getElementById('total_cart_amount').innerHTML = response.order_summary.total_cart_amount;

                    localStorage.setItem(TOKEN_PREFIX+'cart', JSON.stringify(response.data) );
                    emitter.publish('cart-updated', response.cart_count);
                } else {
                    localStorage.removeItem(TOKEN_PREFIX+'cart');
                    emitter.publish('cart-updated', 0);
                }
        }


        function openEditAddressModel(id) {
            // Get the modal element by its ID
            modal = document.getElementById('editAdress');

            // Create a new Modal instance using Bootstrap's Modal class
            modalInstance = new bootstrap.Modal(modal);

            let address = addresses.find(a => a.id == id);
            console.log(address);

            var form = document.getElementById("user-address-edit-form");
            for (var key in address) {
                if (address.hasOwnProperty(key)) {
                    var element = form.elements[key];
                    if (element) {
                        element.value = address[key];
                    }
                }
            }

            // Call the 'show' method to open the modal
            modalInstance.show();

            // Submit the form when it's submitted
            var form = document.getElementById("user-address-edit-form");
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                
                var formData = new FormData(form);
                formData.append('address_id', id); // Add address_id
                
                submitForm(formData);
            });
        }

        function submitForm(formData) {
            var jsonObject = {};
            formData.forEach(function(value, key) {
                jsonObject[key] = value;
            });

            console.log('submitForm', jsonObject);

            APIFetcher.fetchData(`${API_BASE_URL}/user/edit-address`, 'POST', jsonObject, localStorage.getItem(TOKEN_PREFIX+'token'))
                    .then(response => {
                        // Render HTML using the response data
                        console.log(response);
                        
                        getAddressList()
                            // Call the 'show' method to open the modal
                            modalInstance.hide();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
        }


        shippingAddressCheckbox.addEventListener('change', function() {
            if (this.checked) {
                playload.billing_address = playload.shipping_address;
                // Checkbox is checked, do something
                console.log('Checkbox is checked', playload);
                document.getElementById('billing_address-'+playload.shipping_address).checked = true;
                document.querySelector('#billing-address-list').classList.add('d-none');
            } else {
                playload.billing_address = null;
                document.getElementById('billing_address-'+playload.shipping_address).checked = false;
                // Checkbox is not checked, do something else
                console.log('Checkbox is not checked');
                document.querySelector('#billing-address-list').classList.remove('d-none');
            }
        });

        function selectAddress(id, type) {
            if (document.getElementById(type + '-' + id).checked) {
                
                playload[type] = id;
                if(type == 'shipping_address')
                    checkDeliveryInfo(id);

                // Checkbox is checked, do something with the parameters
                console.log('Checkbox is checked with parameters:', id, type, playload);
            } 
        }

        function checkDeliveryInfo(id) {
            let address = addresses.find(a => a.id == id);
            console.log(address);

            APIFetcher.fetchData(`${API_BASE_URL}/check-pincode`, 'POST', {delivery_postcode: address.pincode, pickup_postcode: PICKUP_POSTCODE}, localStorage.getItem(TOKEN_PREFIX+'token'))
            .then(response => {
                // Render HTML using the response data

                console.log(response)
                document.getElementById('expt-delivery').innerHTML = response.message;
                
                
            })
        }

        function proceedOrder() {
            if(playload.shipping_address && playload.billing_address) {
                (playload.payment_mode == 'cod') ?   createOrder() :  initiateRazorPay();
            } else {
                document.getElementById('checkout-msg').innerHTML = `<label class="text-danger">Please choose your shipping and billing address to proceed.</label>`
            }
        }

        function createOrder() {
            APIFetcher.fetchData(`${API_BASE_URL}/user/checkout`, 'POST', playload, localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data
                    console.log(response);
                    localStorage.removeItem(TOKEN_PREFIX+'cart');
                    if (response.status == 400) {
                        Toast.danger(response.message);
                    } else {
                        location.replace(`${BASE_URL}order-complete?order_id=${response.prefix}${response.Order_id}&status=${response.status}`);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function initiateRazorPay() {
            let address = addresses.find(a => a.id == playload.shipping_address);
            var options = {
                                "key": RZP_KEY, // Enter the Key ID generated from the Dashboard
                                "amount": (+document.getElementById('total_cart_amount').innerHTML * 100).toString(), // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                "currency": "INR",
                                "name": "First Toy", //your business name
                                "description": "Payment to FisrtToy",
                                "image": `${BASE_URL}images/logo.svg`,
                                //  "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                "handler": function (response){
                                    // alert(response.razorpay_payment_id);
                                    playload.transaction_status = 'complete'
                                    playload.transaction_id = response.razorpay_payment_id;
                                    createOrder();
                                },
                                "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
                                    "name": address.name, //your customer's name
                                    "email": '', 
                                    "contact": address.phone_no  //Provide the customer's phone number for better conversion rates 
                                },
                                "notes": {
                                    "address": ""
                                },
                                "theme": {
                                    "color": "#55acd3"
                                }
                            };
            var rzp1 = new Razorpay(options);
            rzp1.on('payment.failed', function (response){
                    // alert(response.error.code);
                    // alert(response.error.description);
                    // alert(response.error.source);
                    // alert(response.error.step);
                    // alert(response.error.reason);
                    // alert(response.error.metadata.order_id);
                    // alert(response.error.metadata.payment_id);
                    playload.transaction_status = 'failed'
                    playload.transaction_id = response.error.metadata.payment_id;
                    createOrder();
            });
            // document.getElementById('rzp-button1').onclick = function(e){
                rzp1.open();
            //     e.preventDefault();
            // }
        }

        function initAddressForm() {
            let login_form = document.getElementById('user-address-form');
            
            let loginBtn = document.querySelector('#user-address-form [type="submit"]');

            var inputs = document.querySelectorAll("#user-address-form input");


            function validateEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

            let validator = (input) => {
                
                let val;
                if (input.required && !input.value ) {
                    input.classList.add("is-invalid");
                    val = false;
                } else {
                    if (input.type == "email") {
                    val = validateEmail(input.value);
                    val
                        ? input.classList.remove("is-invalid")
                        : input.classList.add("is-invalid");
                    } else {
                    input.classList.remove("is-invalid");
                    val = true;
                    }
                }
                return val;
            };

            inputs.forEach((input) => {
                input.addEventListener("keyup", function () {
                    validator(input);
                });

                input.addEventListener("focusout", function () {
                    validator(input);
                });
            });

   


            login_form.addEventListener('submit', (e) => {
                e.preventDefault();
                console.log('submit fired');

                var flag = true;

                inputs.forEach((input) => {
                    flag *= validator(input);
                });

                if (!flag) {
                    showFormError('address-success-msg', 'Please fill all required feilds.');
                    return false;
                } else {
                    const jsonData = {};

                    // Iterate over the input elements and build the JSON object
                    inputs.forEach(input => {
                    const name = input.name;
                    const value = input.value;
                    jsonData[name] = value;
                    });


                                console.log(jsonData)

                                loginBtn.setAttribute('disabled', true)

                                let spinner = `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

                                loginBtn.innerHTML = spinner;

                            
                                APIFetcher.fetchData(`${API_BASE_URL}/user/add-address`, 'POST', jsonData, localStorage.getItem(TOKEN_PREFIX+'token'))
                                .then(response => {

                                            loginBtn.innerHTML = 'Submit';
                                            loginBtn.removeAttribute("disabled");

                                        
                                            console.log(response);

                                            if (response.status !== 200) {
                                                for (const key in response.errors) {

                                                    console.log(`${key}: ${response.errors[key]}`);
                                                    inputs.forEach(i => {
                                                        if ( i.id  == key) {
                                                            i.classList.add("is-invalid");
                                                        }
                                                    })
                                                    if ('message'  == key) {
                                                        document.querySelector('#message').classList.add("is-invalid");
                                                    }
                                                }

                                                showFormError("address-success-msg",  'Please fill all required feilds.');
                                                return;
                                            } else {
                                            
                                        
                                                showFormSuccess("address-success-msg",response.message)
                                                location.reload();
                                                
                                            }

                                            

                                })
                                .catch(error => {
                                console.error('Error:', error);
                                });
                }
            })

        

        }


        function initEditAddressForm() {
            let login_form = document.getElementById('user-address-edit-form');
            
            let loginBtn = document.querySelector('#user-address-edit-form [type="submit"]');

            var inputs = document.querySelectorAll("#user-address-edit-form input");


            function validateEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

            let validator = (input) => {
                
                let val;
                if (input.required && !input.value ) {
                    input.classList.add("is-invalid");
                    val = false;
                } else {
                    if (input.type == "email") {
                    val = validateEmail(input.value);
                    val
                        ? input.classList.remove("is-invalid")
                        : input.classList.add("is-invalid");
                    } else {
                    input.classList.remove("is-invalid");
                    val = true;
                    }
                }
                return val;
            };

            inputs.forEach((input) => {
                input.addEventListener("keyup", function () {
                    validator(input);
                });

                input.addEventListener("focusout", function () {
                    validator(input);
                });
            });

   


            login_form.addEventListener('submit', (e) => {
                e.preventDefault();
                console.log('submit fired');

                var flag = true;

                inputs.forEach((input) => {
                    flag *= validator(input);
                });

                if (!flag) {
                    showFormError('address-success-msg', 'Please fill all required feilds.');
                    return false;
                } else {
                    const jsonData = {};

                    // Iterate over the input elements and build the JSON object
                    inputs.forEach(input => {
                    const name = input.name;
                    const value = input.value;
                    jsonData[name] = value;
                    });


                    console.log(jsonData)

                    loginBtn.setAttribute('disabled', true)

                    let spinner = `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

                    loginBtn.innerHTML = spinner;

                    //Post request  without data
                    APIFetcher.fetchData(`${API_BASE_URL}/user/edit-address`, 'POST', jsonData, localStorage.getItem('ft-token'))
                    .then(response => {

                                loginBtn.innerHTML = 'Submit';
                                loginBtn.removeAttribute("disabled");

                                // Render HTML using the response data
                                console.log(response);

                                if (response.status !== 200) {
                                    for (const key in response.errors) {

                                        console.log(`${key}: ${response.errors[key]}`);
                                        inputs.forEach(i => {
                                            if ( i.id  == key) {
                                                i.classList.add("is-invalid");
                                            }
                                        })
                                        if ('message'  == key) {
                                            document.querySelector('#message').classList.add("is-invalid");
                                        }
                                    }

                                    showFormError("address-success-msg",  'Please fill all required feilds.');
                                    return;
                                } else {
                                    
                            
                                    showFormSuccess("address-success-msg",response.message)
                                    location.reload();
                                    
                                }

                                

                    })
                    .catch(error => {
                    console.error('Error:', error);
                    });
                }
            })

        }


    


</script>
</body>

</html>