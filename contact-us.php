<?php
$_PAGE_NAME = "Contact Us"
?>

<!DOCTYPE html>
<html lang="en">


<?php include($BASE_URL."templates/head.php"); ?> 

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
                            <?= $_PAGE_NAME; ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_wrapper">
        <div class="container mt-5 pt-3 mb-5">
            <div class="col-12 d-flex flex-row align-items-start gap-5 justify-content-between flex-wrap">
                <div class="col-lg-3 col-md-5 col-12">
                    <h3 class="m-bd text-black font-20 mb-4">Contact Info</h3>
                    <div class="border-grey rounded-4 p-4 d-flex gap-4 align-items-center mb-3 ">
                        <div class="wh-54 rounded-circle border-grey d-flex justify-content-center align-items-center">
                            <i class="fas fa-building text-green font-20"></i>
                        </div>
                        <h3 class="mb-0 text-card font-16 m-med" id="contact_business_name"></h3>
                    </div>
                    <div class="border-grey rounded-4 p-4 d-flex gap-4 align-items-center mb-3 ">
                        <div class="wh-54 rounded-circle border-grey d-flex justify-content-center align-items-center">
                            <i class="fa fa-map text-green font-20"></i>
                        </div>
                        <h3 class="mb-0 text-card font-16 m-med" id="contact_comp_address"></h3>
                    </div>
                    <div class="border-grey rounded-4 p-4 d-flex gap-4 align-items-center mb-3 ">
                        <div class="wh-54 rounded-circle border-grey d-flex justify-content-center align-items-center">
                            <i class="fa fa-phone text-green font-20"></i>
                        </div>
                        <h3 class="mb-0 text-card font-16 m-med" id="contact_comp_mobile"></h3>
                    </div>
                    <div class="border-grey rounded-4 p-4 d-flex gap-4 align-items-center mb-3 ">
                        <div class="wh-54 rounded-circle border-grey d-flex justify-content-center align-items-center">
                            <i class="fa fa-envelope text-green font-20"></i>
                        </div>
                        <h3 class="mb-0 text-card font-16 m-med" id="contact_comp_email"></h3>
                    </div>
                    
                </div>
                <div class="col-md col-12">
                    <h3 class="m-bd text-black font-20 mb-4">Get in touch with us</h3>
                    <form id="enquiry-form">
                    <div class="success-msg"></div>
                    <div class="d-flex flex-column mt-10 pt-1 gap-20">
                        <div class="row gy-3">
                            <div class="col-md col-12 d-flex flex-column">
                                <label for="FirstName" class="font-14 text-grey5 m-med">First Name</label>
                                <input type="text" name="first_name" id="first_name"
                                    class="w-100 border-grey rounded-2 h-40 mt-10">
                            </div>
                            <div class="col-md col-12 d-flex flex-column">
                                <label for="LastName" class="font-14 text-grey5 m-med">Last Name</label>
                                <input type="text" name="last_name" id="last_name"
                                    class="w-100 border-grey rounded-2 h-40 mt-10">
                            </div>
                        </div>
                        <div class="row gy-3">
                            <div class="col-md col-12 d-flex flex-column">
                                <label for="email" class="font-14 text-grey5 m-med">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-100 border-grey rounded-2 h-40 mt-10">
                            </div>
                            <div class="col-md col-12 d-flex flex-column">
                                <label for="Country" class="font-14 text-grey5 m-med">Phone Number</label>
                                <div class="d-flex flex-row gap-20 justify-content-between mt-10 col-12">
                                    <!-- <select name="PhoneNumber" id="PhoneNumber"
                                        class="border-grey rounded-2 h-40  col-lg-2 col-md-3 col-2">
                                        <option value="">+91</option>
                                    </select> -->
                                    <input type="text" id="contact" name="contact"
                                        class="col-lg col-md-8 col border-grey rounded-2 h-40 ">
                                </div>

                            </div>
                        </div>

                        <!-- <div class="col d-flex flex-column">
                            <label for="Subject" class="font-14 text-grey5 m-med">Subject</label>
                            <input type="text" name="Subject" id="subject"
                                class="w-100 border-grey rounded-2 h-40 mt-10">
                        </div> -->
                        <div class="row">
                            <div class="col d-flex flex-column">
                                <label for="Message" class="font-14 text-grey5 m-med">Message</label>
                                <textarea name="message" id="message" class="w-100 border-grey rounded-2  mt-10 resize-none"
                                    cols="10" rows="5"></textarea>
                            </div>

                        </div>


                        <button
                        type="submit"
                            class="col-lg-2 col-md-4 text-white text-start h-40 rounded-2 border-0 bg-green d-flex align-items-center justify-content-center mt-4 py-3 px-auto">
                            Submit
                        </button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col mt-5 rounded-4 overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.4630613459585!2d88.4000963!3d22.599176999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275fcafd06da9%3A0x82f28a6f6142a12c!2sDakshindari%20Rd%2C%20South%20Dumdum%2C%20West%20Bengal%20700048!5e0!3m2!1sen!2sin!4v1712535750550!5m2!1sen!2sin" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>

    <script>
        window.onload = function()
        {
        }
    </script>

    <!-- FOOTER START -->
    <!-- sds -->
    <?php include("templates/footer.php"); ?>
     <!-- FOOTER END -->

        <script>

             // Subscribe to a custom event and get the unsubscribe function
          const contactInfoUnsubscribe = emitter.subscribe('contactInfoUpdated', data => {
             console.log('Custom event fired!', data);
             document.querySelector('#contact_business_name').replaceWith(data.business_name);
             document.querySelector('#contact_comp_mobile').replaceWith(data.comp_mobile);
             document.querySelector('#contact_comp_email').replaceWith(data.comp_email);
             document.querySelector('#contact_comp_address').replaceWith(data.comp_address);
 
 
             document.querySelector('#contact_fb_link').href = data.fb_link;
             document.querySelector('#contact_insta_link').href = data.insta_link;
             document.querySelector('#contact_google_link').href = data.google_link;
             document.querySelector('#contact_twitter_link').href = data.twitter_link;
             document.querySelector('#contact_linkedin_link').href = data.linkedin_link;
             document.querySelector('#contact_youtube_link').href = data.youtube_link;
         });


            function initContactUsForm() {
            let enquiry_form = document.getElementById('enquiry-form');
            let enquiryBtn = document.querySelector('#enquiry-form [type="submit"]');
    
            var inputs = document.querySelectorAll("#enquiry-form input");
            var msg = document.getElementsByTagName("textarea")[0];
    
            function validateEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
 
            let validator = (input) => {
                let val;
                if (!input.value) {
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
 
            msg.addEventListener("keyup", function () {
                validator(msg);
            });
    
            msg.addEventListener("focusout", function () {
                validator(msg);
            });
 
 
            enquiry_form.addEventListener('submit', (e) => {
                e.preventDefault();
                console.log('submit fired');
    
                var flag = true;
    
                inputs.forEach((input) => {
                    flag *= validator(input);
                });
    
                flag *= validator(msg);
    
                if (!flag) {
                    showFormError();
                    return false;
                } else {
                    let data = {
                                    first_name: document.querySelector("#first_name").value,
                                    last_name: document.querySelector("#last_name").value,
                                    email: document.querySelector("#email").value,
                                    contact: document.querySelector("#contact").value,
                                    message: document.querySelector("#message").value,
                                };
    
                                enquiryBtn.setAttribute('disabled', true)
    
                                let spinner = `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;
    
                                enquiryBtn.innerHTML = spinner;
    
                                //Post request  without data
                                APIFetcher.fetchData(`${API_BASE_URL}/enquiry`, 'POST', data)
                                .then(response => {
    
                                            enquiryBtn.innerHTML = 'Submit';
                                            enquiryBtn.removeAttribute("disabled");
    
                                            // Render HTML using the response data
                                            console.log(response);
    
                                            if (response.status !== 200) {
                                                let msg = ''
                                                for (const key in response.errors) {
                                                    msg += response.errors[key];
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
    
                                                showFormError(msg);
                                                return;
                                            } else {
                                                document.querySelector('#enquiry-form').reset();
                                                showFormSuccess(response.message)
                                                // Toast.success(response.message);
                                            }
    
                                            
    
                                })
                                .catch(error => {
                                console.error('Error:', error);
                                });
                }
            })
    
            function showFormError(msg = 'Please fill all the details below.') {
                document.getElementsByClassName("success-msg")[0].innerHTML =
                    '<div class="alert alert-danger">'+msg+'</div>';
                    document.querySelector(".success-msg").scrollIntoView({
                    behavior: "smooth",
                    block: "center",
                    inline: "nearest",
                    });
                    setTimeout(function () {
                    document.getElementsByClassName("success-msg")[0].innerHTML = "";
                    }, 3000);
            }

            function showFormSuccess(msg) {
                document.getElementsByClassName("success-msg")[0].innerHTML =
                    '<div class="alert alert-success">'+msg+'</div>';
                    document.querySelector(".success-msg").scrollIntoView({
                    behavior: "smooth",
                    block: "center",
                    inline: "nearest",
                    });
                    setTimeout(function () {
                    document.getElementsByClassName("success-msg")[0].innerHTML = "";
                    }, 3000);
            }
 
        
         }

            initContactUsForm();
        </script>
    

    
</body>

</html>