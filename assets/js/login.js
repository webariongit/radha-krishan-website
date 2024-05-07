var navData;

function initLoginForm(e) {
    let login_form = document.getElementById('login-form');
    
    let loginBtn = document.querySelector('#login-form [type="submit"]');

    var inputs = document.querySelectorAll("#login-form input");

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

    login_form.addEventListener('submit', (e) => {
        e.preventDefault();
        console.log('submit fired');

        var flag = true;

        inputs.forEach((input) => {
            flag *= validator(input);
        });

        if (!flag) {
            showFormError();
            return false;
        } else {
            let data = {
                            mobile_no: inputs[0].value,
                        };

                        loginBtn.setAttribute('disabled', true)

                        let spinner = `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

                        loginBtn.innerHTML = spinner;

                        //Post request  without data
                        APIFetcher.fetchData(`${API_BASE_URL}/get-otp`, 'POST', data)
                        .then(response => {

                                    loginBtn.innerHTML = 'Submit';
                                    loginBtn.removeAttribute("disabled");

                                    // Render HTML using the response data
                                    //console.log(response);

                                    if (response.status !== 200) {
                                        for (const key in response.errors) {

                                            //console.log(`${key}: ${response.errors[key]}`);
                                            inputs.forEach(i => {
                                                if ( i.id  == key) {
                                                    i.classList.add("is-invalid");
                                                }
                                            })
                                            if ('message'  == key) {
                                                document.querySelector('#message').classList.add("is-invalid");
                                            }
                                        }

                                        showFormError("success-msg-login", response.error);
                                        return;
                                    } else {
                                        document.querySelector('#login-form').reset();
                                    
                                        
                                        showFormSuccess("success-msg-otp",response.success)

                                        document.querySelector("#otp_mobile_number").value = data.mobile_no;
                                        document.getElementById('login-view').classList.add('d-none');
                                        document.getElementById('otp-view').classList.remove('d-none');

                                        startOtpTimer();
                                    }
                        })
                        .catch(error => {
                        console.error('Error:', error);
                        });
        }
    })

}

function initOtpForm(e) {
    let otp_form = document.getElementById('otp-form');
    let otpBtn = document.querySelector('#otp-form [type="submit"]');

    var inputs = document.querySelectorAll("#otp-form input");

    var loginModal = new bootstrap.Modal(document.getElementById('loginBackdrop'), {backdrop: true})


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




    otp_form.addEventListener('submit', (e) => {
        e.preventDefault();
        //console.log('submit fired');

        var flag = true;

        inputs.forEach((input) => {
            flag *= validator(input);
        });

        if (!flag) {
            showFormError('success-msg-otp');
            return false;
        } else {

            const digits = document.getElementsByClassName('digit-input');
            let numberString = '';

            for (let i = 0; i < digits.length; i++) {
                numberString += digits[i].value;
            }

            let data = {
                            mobile_no: document.querySelector("#otp_mobile_number").value,
                            otp: numberString,
                        };

                        otpBtn.setAttribute('disabled', true)

                        let spinner = `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

                        otpBtn.innerHTML = spinner;

                        //Post request  without data
                        APIFetcher.fetchData(`${API_BASE_URL}/submit-otp`, 'POST', data)
                        .then(response => {

                                    otpBtn.innerHTML = 'Submit';
                                    otpBtn.removeAttribute("disabled");

                                    // Render HTML using the response data
                                    //console.log(response);

                                    if (response.status !== 200) {
                                        for (const key in response.errors) {

                                            //console.log(`${key}: ${response.errors[key]}`);
                                            inputs.forEach(i => {
                                                if ( i.id  == key) {
                                                    i.classList.add("is-invalid");
                                                }
                                            })
                                            if ('message'  == key) {
                                                document.querySelector('#message').classList.add("is-invalid");
                                            }
                                        }

                                        showFormError("success-msg-login");
                                        return;
                                    } else {
                                        document.querySelector('#otp-form').reset();
                                    
                                        
                                        showFormSuccess("success-msg-otp",response.message)
                                        if(response?.token?.original?.access_token) {
                                            localStorage.setItem(TOKEN_PREFIX+'token', response.token.original.access_token);

                                            if (response.flag == 1 && location.href.indexOf("profile.php") == -1) {
                                                location.replace('./profile.php');
                                            } else {
                                                location.reload();
                                            }
                                            
                                        }
                                        
                                    }

                                    

                        })
                        .catch(error => {
                        console.error('Error:', error);
                        });
        }
    })

    resendOTP.addEventListener('click', (e) => {
        e.preventDefault();
        //console.log('resend fired');

        startOtpTimer()

        if (document.querySelector("#otp_mobile_number").value)  {
            let data = {
                            mobile_no:  document.querySelector("#otp_mobile_number").value,
                        };

                        //Post request  without data
                        APIFetcher.fetchData(`${API_BASE_URL}/get-otp`, 'POST', data)
                        .then(response => {
                                    // Render HTML using the response data
                                    //console.log(response);

                                    if (response.status !== 200) {
                                        for (const key in response.errors) {

                                            //console.log(`${key}: ${response.errors[key]}`);
                                            inputs.forEach(i => {
                                                if ( i.id  == key) {
                                                    i.classList.add("is-invalid");
                                                }
                                            })
                                            if ('message'  == key) {
                                                document.querySelector('#message').classList.add("is-invalid");
                                            }
                                        }

                                        showFormError("success-msg-otp");
                                        return;
                                    } else {
                                        
                                        showFormSuccess("success-msg-otp",response.success)
                                    }

                                    

                        })
                        .catch(error => {
                        console.error('Error:', error);
                        });
        }
    })

}

function showFormError(className, msg = 'Please fill all the details below.') {
   
    document.getElementsByClassName(className)[0].innerHTML =
        `<div class="alert alert-danger p-2">${msg}</div>`;
        document.querySelector('.'+className).scrollIntoView({
        behavior: "smooth",
        block: "center",
        inline: "nearest",
        });
        setTimeout(function () {
        document.getElementsByClassName(className)[0].innerHTML = "";
        }, 3000);
}

function showFormSuccess(className, msg) {
    document.getElementsByClassName(className)[0].innerHTML =
        '<div class="success alert-success p-2">'+msg+'</div>';
        document.querySelector('.'+className).scrollIntoView({
        behavior: "smooth",
        block: "center",
        inline: "nearest",
        });
        setTimeout(function () {
        document.getElementsByClassName(className)[0].innerHTML = "";
        }, 3000);
}

function moveToNextInput(inputIndex) {
    const input = document.getElementsByClassName('digit-input')[inputIndex - 1];

    if (inputIndex > 1 && input.value.length === 0) {
    // If the input is empty and not the first input, move to the previous input
    document.getElementsByClassName('digit-input')[inputIndex - 2].focus();
    } else if (input.value.length === 1 && inputIndex < 4) {
    // If the input has a digit and not the last input, move to the next input
    document.getElementsByClassName('digit-input')[inputIndex].focus();
    }
}

function startOtpTimer()
{
    let resendOTP = document.getElementById('resendOTP');
    let resendTimer = document.getElementById('resendTimer');
    let OtpTimer = document.querySelector('#OtpTimer');
    OtpTimer.innerText = '00:40';

    resendOTP.classList.add('d-none');
    resendTimer.classList.remove('d-none');

    let OtpInterval = setInterval(()=> {
        let tm = OtpTimer.innerText.split(":");
        let sec = +tm[1];
        sec--;
        tm = '00:'+sec;
        OtpTimer.innerText = tm;
        if (sec == 0) {
            resendOTP.classList.remove('d-none');
            resendTimer.classList.add('d-none');
            OtpTimer.innerText = '00:40';
            clearInterval(OtpInterval);
        } 
    }, 1000)
}

function logout() {
    APIFetcher.fetchData(`${API_BASE_URL}/auth/logout`, 'POST', '', localStorage.getItem(TOKEN_PREFIX+'token'))
    .then(response => {
        // Render HTML using the response data
  
        // console.log(response)
        if (response.status ==200){
          localStorage.removeItem(TOKEN_PREFIX+'token');
          
          window.location.replace("./index.php");
  
        } else {
         
        }
        
    })
    .catch(error => {
        console.error('Error:', error);
    });
  }

  function getWishlist() {
    APIFetcher.fetchData(`${API_BASE_URL}/user/wishlist`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
    .then(response => {
        // Render HTML using the response data
  
        // console.log(response)
        if (response.status == 200){
          response.data.map(w => {
            if (w?.product_details?.image_thumb)
            w.image_thumb = response.base_url + w.product_details.image_thumb;
            let wishListedProducts = document.querySelectorAll(".wishlist-product-"+w.id);
            wishListedProducts.forEach(i => i.src = "./assets/img/heart-filled.svg");

            console.log(".wishlist-product-"+w.id, wishListedProducts)
          })
          localStorage.setItem(TOKEN_PREFIX+'wishlist', JSON.stringify(response.data) );
          emitter.publish('wishlist-updated', response.data.length);
        }
        
    })
    .catch(error => {
        console.error('Error:', error);
    });
  }
  
  function getCart() {
    APIFetcher.fetchData(`${API_BASE_URL}/user/cart`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
    .then(response => {
        // Render HTML using the response data
  
        // console.log(response)
        if (response.status ==200){
          emitter.publish('cart-updated', response.cart_count);
          localStorage.setItem(TOKEN_PREFIX+'cart', JSON.stringify(response.data) );
        } else {
          emitter.publish('cart-updated', 0);
        }
        
    })
    .catch(error => {
        console.error('Error:', error);
    });
  }

function getUserProfile() {
  
    if (localStorage.getItem(TOKEN_PREFIX+'token')) {

        document.getElementById("loginBtn").classList.add('d-none');
        document.getElementById("profileIcon").classList.remove('d-none');

      //Post request  without data
      APIFetcher.fetchData(`${API_BASE_URL}/auth/view-profile`, 'GET', {}, localStorage.getItem(TOKEN_PREFIX+'token'))
      .then(response => {
        console.log(response)
        if (response.status == "Token is Invalid") {
            localStorage.clear();
            window.location.replace("./index.php");
        }
            

         emitter.publish('userInfoUpdated', response);
      }).catch(error => {
        console.error('Error:', error);
      });
  
      getWishlist()
      getCart()
  
    } else {

        // Get the current URL
        var currentUrl = window.location.href;

        // Check if the URL contains "profile.php"
        if (currentUrl.indexOf("profile.php") !== -1) {
            // If it contains "profile.php"
            console.log("The current page is profile.php");
            window.location.replace("./index.php");
        } else {
            // If it does not contain "profile.php"
            document.getElementById("profileIcon").classList.add('d-none');
            document.getElementById("loginBtn").classList.remove('d-none');
            initLoginForm();
            initOtpForm();
        }


       
    }
      
}

function initNavigationMenu() 
{

    const customCode = document.querySelector('#header-navigation-menu');
    if (customCode) {

      APIFetcher.fetchData(`${API_BASE_URL}/navigation-menu`, 'GET')
                .then(response => {
                    // Render HTML using the response data
                    
                    const menuContainer = document.querySelector('#menu-container');
                    const replacementTemplate = document.querySelector('#header-navigation-menu')

                    response.data.map(m => {
                        m.BASE_URL = BASE_URL
                        m.image = response.base_url +'/'+ m.image
                        return m;
                    }) ;

                    // console.log('response.data', response.data)

                    ComponentGenerator.populateComponent({ component: 'header-navigation-menu', data: response.data})
                    .then(htmlContent => {
                        // console.log(`htmlContent==>`,htmlContent);
                      replacementTemplate.innerHTML = htmlContent;
                        
                        // Replace the template tag with the HTML content
                        const templateContent = menuContainer.innerHTML;
                        const replacedContent = templateContent.replace(replacementTemplate.outerHTML, htmlContent);

                        // Update the container's innerHTML with the modified content
                        menuContainer.innerHTML = replacedContent;

                         navData = response;
                       
                        navigationMenu = true;

                        initNavMegaMenu();

                        
                        
                    })
                    
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });

    } else {
        // The HTML code is not yet loaded, wait and check again
        setTimeout(() => initNavigationMenu(), 100); // Adjust the timeout as needed
    }
            
   
}

function initNavMegaMenu() {
    // console.log('header-navigation-menu', navData);

    let filterPageUrl = new URL(window.location.href);
    let category_id =  filterPageUrl.searchParams.get('category');

    let catData = navData.data.find(cat => cat.id == category_id);
    if (category_id && catData) {
        console.log("========>", category_id, catData)
        if (document.querySelector('#cat-bread-crum'))
        document.querySelector('#cat-bread-crum').innerHTML  =  catData.category; //"Fashion"
    }

    navData.data.forEach(cat => {
        //  console.log("#nav-id-"+cat.id)
    let catItem = document.querySelector("#nav-id-"+cat.id);

    // let mostTrendingIndex = cat.navigation.findIndex((e) => e.filter_name == 'Most Trending' );
    // let mostTrending = cat.navigation[mostTrendingIndex];

    // cat.navigation.splice(mostTrendingIndex, 1)

   

    cat.navigation.forEach(nav => {
       

        if (nav?.filter_values?.length > 0) {
           
            let navitem =  `<div class="col">
            <h3 class="font-14 m-med text-black mb-1">SHOP BY ${nav.filter_name}</h3>
            <div class="horizontal_line"></div>
            <ul class="pl-0">`;
            let navFilter = '';

            let more = ''
            if(nav.filter_values.length > 5) {
                more = `<li><a href="${BASE_URL}products.html">+${+nav.filter_values.length - 5} More</a></li>`
                nav.filter_values= nav.filter_values.splice(0,5);
            }

            nav.filter_values.forEach(filter => {
                let queryParams = [];
                queryParams.push(`category=${cat.id}`);

                queryParams.push(`${(nav.filter_name).toLowerCase()}=${filter.key_value}`)

                // <span>
                // <img src="${navData.base_url}" alt="kangan"
                //         class="wh-40">
                // </span>

                navFilter += ` <li class="mb-11">
                <a href="${BASE_URL}products.php?${queryParams.join('&')}"
                    class="d-flex flex-row align-items-center  gap-3">
                   
                    <span class="mb-0 font-14 text-grey ">${filter.key_name}</span>
                </a>

            </li>`
            })

            navitem += navFilter + more +`</ul></div>`;

            catItem.innerHTML += navitem;

        }

        
        // most trending sllider

        // mostTrending.filter_values =  mostTrending.filter_values.filter(p => (p.material_attribute !== undefined && p.material_attribute.length > 0));
        
        // if (mostTrending.filter_values.length > 0) {

        //     let ctr = document.getElementById('nav-cat-container-'+cat.id);
        //     ctr.classList.remove('col-lg-12');
        //     ctr.classList.add('col-lg-8');

        //     document.getElementById('nav-product-slider-'+cat.id).classList.remove('d-none')

        //     mostTrending.filter_values.map(product => {

        //         let reviews = +product.reviews;
        //         // console.log('review', reviews)
        //         product.reviews = '';
        //         while (reviews > 0) {
        //             product.reviews += ' <img src="images/star.svg" alt="">';
        //             reviews--;
        //         }
        
        //         if (product.material_attribute) {
        //             let VARIATIONS =  product.material_attribute.find(e => e.attribute_class == "VARIATIONS"); 
                    
        //             let lowestOfferPrice = Number.MAX_SAFE_INTEGER;
        
        //             if (VARIATIONS && VARIATIONS.hasOwnProperty('variations')) {
        //                 for (const item of VARIATIONS.variations) {
        //                     const offerPrice = parseFloat(item.value.TOTAL_OFFER_PRICE);
                            
        //                     if (offerPrice < lowestOfferPrice) {
        //                         lowestOfferPrice = offerPrice;
        //                         product.total_offer_price = item.value.TOTAL_OFFER_PRICE;
        //                         product.total_price = item.value.TOTAL_PRICE;
        //                     }
        //                 }
        //             } 
        //         }
        
        //         return product;
        //     } );

        //     mostTrending.filter_values.forEach(data => {
        //         let keywordTag = ComponentGenerator.replacePlaceholders(`<div class="swiper-slide">
        //         <a href="${BASE_URL}product-detail.html?product_id={{id}}">
        //             <div class="product-box">
        //                 <div class="product-img">
        //                     <img src="${navData.base_url}{{image_thumb}}" alt="">
        //                 </div>
        //                 <div class="product-content">
        //                     <div>
        //                         <h3>₹ {{total_offer_price}} <del>₹ {{total_price}}</del></h3>
        //                         <p>{{productname}}</p>
        //                     </div>
        //                     <div>
        //                         {{reviews}}
        //                     </div>
        //                 </div>
        //             </div>
        //         </a>
        //     </div>`, data);
        //         document.querySelector('#swiper-wrapper-'+cat.id).innerHTML += keywordTag;
                
        //     })
        // }

    })

        // initTopTrendingSlider()
        megaMenu = true;
    })
}

initNavigationMenu() ;

getUserProfile();

emitter.subscribe('wishlist-updated', (wishlist_count) => {
    console.log('wishlist_count', wishlist_count)

    let wishlist_count_badge = document.querySelector('#wishlist_count')
    if (wishlist_count) {
      wishlist_count_badge.innerText = wishlist_count;
      wishlist_count_badge.classList.remove('d-none');
    } else {
      wishlist_count_badge.classList.add('d-none');
    }
    
    
  })

  emitter.subscribe('cart-updated', (cart_count) => {
    console.log('cart_count', cart_count)

    let cart_count_badge = document.querySelector('#cart_count')
    if (cart_count) {
      cart_count_badge.innerText = cart_count;
      cart_count_badge.classList.remove('d-none');
    } else {
      cart_count_badge.classList.add('d-none');
    }
    
    
  })

