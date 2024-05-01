<?php
$_PAGE_NAME = "My Addresses"
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
                    <h3 class="font-18 m-bd text-black mb-4">My Addresses</h3>
                    <div id="address-list">
                        <div id="empty-wishlist" class="row text-center">
                            <div class="col-lg-12">
                                <div class="order-complete-content">
                                    <i class="fa-solid fa-location-dot big-icon"></i>
                                    <h4>No Address Found.</h4>
                                    <p id="status_message"></p>
                                    <div id="order_detail_btn"></div>
                                    
                                </div>
                            </div>
                    </div>
                    </div>
                   
                  
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addAdress"
                        class="h-50 col-12 rounded-2 bg-white d-flex justify-content-center align-items-center py-3 border-grey gap-2">
                        <span>
                            <i class="fa fa-plus font-14 text-black"></i>
                        </span>
                        <span class="font-14 text-black m-reg">Add New Address</span>
                    </button>
                </div>
            </div>
        </div>

    </section>
     <!-- FOOTER START -->
     <?php include("./templates/footer.php"); ?>
        <!-- FOOTER END -->

        <div class="modal fade" id="addAdress" tabindex="-1" aria-labelledby="addAdressModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0">
                        <h1 class="modal-title col-10 text-center font-18 text-black mb-0 m-bd" id="addAdressModalLabel">Add
                            New Address</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form id="user-address-form">
                        <div class=" address-success-msg"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="name">Full Name <span class="danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="line_1">Flat /  House No. / Building <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="line_1" id="line_1" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="line_2">Street Address / Colony <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="line_2" id="line_2" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="landmark">Landmark</label>
                                    <input type="text"  class="form-control" name="landmark" id="landmark">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="pincode">Pin Code <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="pincode" id="pincode" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="city">City <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="city" id="city" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="state">State <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="state" id="state" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="country">Country <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="country" id="country" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="phone_no">Phone Number <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="phone_no" id="phone_no" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="alternate_phone_no">Alternative Phone Number</label>
                                    <input type="text"  class="form-control" name="alternate_phone_no" id="alternate_phone_no">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="">Address Type</label>
                                    <div class="d-flex">
                                        <label class="address-type">
                                            <input type="radio" name="type" checked value="Home">
                                            <span>Home <sup>(7AM - 10PM delivery)</sup></span>
                                        </label>
                                        <label class="address-type">
                                            <input type="radio" name="type" value="Work">
                                            <span>Work <sup>(10PM - 6PM delivery)</sup></span>
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" value="1" name="shipping_address">

                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" class="btn main-btn">Add Address</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteConfirmModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog chart-modal modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Alert!!!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Are you really want to delete this address?</h4>
                                <div class="text-center">
                                    <input type="hidden" id="deleteConfirmationValue" value="">
                                    <button type="button" id="deleteConfirmModalYes" class="btn main-btn">Yes</button>
                                    <button type="button" class="btn main-btn" data-bs-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editAdress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog chart-modal modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="address-form">
                            <form id="user-address-edit-form">
                                <div class=" address-success-msg"></div>
                                <div class="row">
                                    <input type="hidden" class="form-control" name="address_id" id="address_id" required>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="name">Full Name <span class="danger">*</span></label>
                                            <input type="text" class="form-control" name="name" id="name" required>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="line_1">Flat /  House No. / Building <span class="danger">*</span></label>
                                            <input type="text"  class="form-control" name="line_1" id="line_1" required>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="line_2">Street Address / Colony <span class="danger">*</span></label>
                                            <input type="text"  class="form-control" name="line_2" id="line_2" required>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="landmark">Landmark</label>
                                            <input type="text"  class="form-control" name="landmark" id="landmark">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="pincode">Pin Code <span class="danger">*</span></label>
                                            <input type="text"  class="form-control" name="pincode" id="pincode" required>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="city">City <span class="danger">*</span></label>
                                            <input type="text"  class="form-control" name="city" id="city" required>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="state">State <span class="danger">*</span></label>
                                            <input type="text"  class="form-control" name="state" id="state" required>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="country">Country <span class="danger">*</span></label>
                                            <input type="text"  class="form-control" name="country" id="country" required>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="phone_no">Phone Number <span class="danger">*</span></label>
                                            <input type="text"  class="form-control" name="phone_no" id="phone_no" required>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 form-group">
                                            <label for="alternate_phone_no">Alternative Phone Number</label>
                                            <input type="text"  class="form-control" name="alternate_phone_no" id="alternate_phone_no">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4 form-group">
                                            <label for="">Address Type</label>
                                            <div class="d-flex">
                                                <label class="address-type">
                                                    <input type="radio" name="type" checked value="Home">
                                                    <span>Home <sup>(7AM - 10PM delivery)</sup></span>
                                                </label>
                                                <label class="address-type">
                                                    <input type="radio" name="type" value="Work">
                                                    <span>Work <sup>(10PM - 6PM delivery)</sup></span>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="hidden" value="1" name="shipping_address">

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <button type="submit" class="btn main-btn">Edit Address</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        const pageInfoUnsubscribe = emitter.subscribe('userInfoUpdated', data => {
        console.log('userInfoUpdated event fired!', data);
      
        console.log(data);
    
        if (data.profile_image) {
            // document.getElementById('user-profile-pic-preview').src = data.base_url + data.profile_image;
            document.getElementById('profilePicLabel').src = data.base_url + data.profile_image;
        }
       
        
        
        // document.getElementById('name').value = data.name;
        document.getElementById('profileUserNameLabel').innerHTML = data.name;
        // document.getElementById('email').value = data.email;
        document.getElementById('profileEmailLabel').innerHTML = data.email;
        // document.getElementById('mobile_no').value = data.mobile_no;
    });

    var addresses;
  // Get the modal element by its ID
  var deleteConfirmModal;

  // Create a new Modal instance using Bootstrap's Modal class
  var deleteConfirmModalInstance;

    function initUserAddressList() {

    deleteConfirmModal = document.getElementById('deleteConfirmModal');
    deleteConfirmModalInstance = new bootstrap.Modal(deleteConfirmModal);

        APIFetcher.fetchData(`${API_BASE_URL}/user/view-address`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data
                    console.log(response);
                    addresses = response.addresses;
                    console.log(addresses);
                    if (response.addresses){
                    // document.querySelector('#no-address-msg').classList.add('d-none');
                    response.addresses.map(obj => {
                        for (const key in obj) {
                        // Check if the property value is null
                        if (obj[key] === null) {
                            // Update the property value with a blank space
                            obj[key] = '';
                        }
                    }
                    });
                    }
                    document.querySelector('#address-list').innerHTML ="";
                    ComponentGenerator.populateComponent({ component: 'user-address-card', data: response.addresses})
                    .then(blogList => {
                        document.querySelector('#address-list').innerHTML += blogList;
                    })
                })
                .catch(error => {
                    console.error('Error:', error);
                });

                var yesButton = document.querySelector('#deleteConfirmModalYes');

                // Add event listeners
                yesButton.addEventListener('click', function() {
                    // Continue the task
                    // Call the API or perform the task you need

                    var address_id = document.querySelector('#deleteConfirmationValue').value;


                    APIFetcher.fetchData(`${API_BASE_URL}/user/delete-address`, 'POST', {address_id}, localStorage.getItem(TOKEN_PREFIX+'token'))
                            .then(response => {
                                // Render HTML using the response data
                                console.log(response);
                                
                                initUserAddressList()
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });

                    // Close the modal
                    deleteConfirmModalInstance.hide();
                });


    }

    function openDeleteAddressModal(address_id) {
        console.log('deleteAddress', address_id);

        document.querySelector('#deleteConfirmationValue').value = address_id;

        deleteConfirmModalInstance.show();
        
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
                            APIFetcher.fetchData(`${API_BASE_URL}/user/edit-address`, 'POST', jsonData, localStorage.getItem(TOKEN_PREFIX+'token'))
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

     // Get the modal element by its ID
    var modal = document.getElementById('editAdress');

    // Create a new Modal instance using Bootstrap's Modal class
    var modalInstance = new bootstrap.Modal(modal);

    function openEditAddressModel(id) {
   

        let address = addresses.find(a => a.id == id);
        console.log(address);
        address.address_id = id;

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
        //  var form = document.getElementById("user-address-edit-form");
        //  form.addEventListener('submit', function (event) {
        //      event.preventDefault();
            
        //      var formData = new FormData(form);
        //      formData.append('address_id', id); // Add address_id
            
        //      submitForm(formData);
        //  });
    }


    initUserAddressList();
    initAddressForm();
    initEditAddressForm();
    </script>
    
 
    
</body>

</html>