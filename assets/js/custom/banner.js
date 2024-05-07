function initBanners(response) 
    {

        const customCode = document.querySelector('#custom-swiper-slide');
        if (customCode) {
            let main_banners = response.data.find(obj => obj.key_name ===  'main_banners');

            main_banners.key_value.map(banner => {
                banner.image_thumb = response.base_url + banner.image_thumb
                banner.image = response.base_url + banner.image
                banner.created_at = DateTime.formatDate(banner.created_at);
                let bannerSlider = ComponentGenerator.replacePlaceholders(` 
                    <div class="swiper-slide">
                        <div class="banner-slider">
                            <a href="products.php?category={{category_id}}">
                                <img src="{{image}}" alt="">
                            </a>
                        </div>
                    </div>`, banner);
                        document.querySelector('#custom-swiper-slide').innerHTML += bannerSlider;
                    return banner;
                } );
            // ComponentGenerator.populateComponent({ component: 'custom-swiper-slide', data: main_banners.key_value})
            initBannerSlider();
        } else {
            // The HTML code is not yet loaded, wait and check again
            setTimeout(() => initBanners(response), 100); // Adjust the timeout as needed
        }
    }

    function initBannerSlider(){

        var swiper = new Swiper(".homeBanner", {
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        });
        // console.log('swiper', swiper);
    }

    function initCollectionImages(response) 
    {

        const customCode = document.querySelector('#collectionImagesWrapper');
        if (customCode) {
            let main_banners = response.data.find(obj => obj.key_name ===  'featured_category_banner');

            main_banners.key_value.map(banner => {
                banner.image_thumb = response.base_url + banner.image_thumb
                banner.image = response.base_url + banner.image
                banner.created_at = DateTime.formatDate(banner.created_at);
                let bannerSlider = ComponentGenerator.replacePlaceholders(` 
                                        <div class="col-sm col-12 collectionImage">
                                        <img src="{{image}}" class="rounded-4" alt="product-image" width=""
                                            height="">
                                    </div>`, banner);
                        document.querySelector('#collectionImagesWrapper').innerHTML += bannerSlider;
                    return banner;
                } );
        } else {
            // The HTML code is not yet loaded, wait and check again
            setTimeout(() => initCollectionImages(response), 100); // Adjust the timeout as needed
        }
    }

    function initCategoryImages(response) 
    {

        const customCode = document.querySelector('#categoryImagesWrapper');
        if (customCode) {
            let main_banners = response.data.find(obj => obj.key_name ===  "categories");

            main_banners.key_value.map(banner => {
                banner.image_thumb = response.base_url + banner.image_thumb
                banner.image = response.base_url +'/'+ banner.image
                banner.created_at = DateTime.formatDate(banner.created_at);
                let bannerSlider = ComponentGenerator.replacePlaceholders(` 
                                        <div class="col">
                                        <a href="products.php?category={{id}}">
                                            <div class="position-relative collectionCategories overflow-hidden rounded-4">
                                                <img src="{{image}}" alt="product-image" width="" height=""
                                                    class="rounded-4">
                                                <div class="position-absolute bottom-0 w-100 bottom-card-title">
                                                    <span class="text-white m-reg">{{category}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>`, banner);
                        document.querySelector('#categoryImagesWrapper').innerHTML += bannerSlider;
                    return banner;
                } );
        } else {
            // The HTML code is not yet loaded, wait and check again
            setTimeout(() => initCategoryImages(response), 100); // Adjust the timeout as needed
        }
    }

    

function initProductSlider(response, data) 
{

    const customCode = document.querySelector(`#${data.wrapperId}`);
    if (customCode) {
        // console.log(response)
        document.querySelector('#FeaturedProductWrapperHeading').innerText = "Featured Products";
        response = JSON.parse(JSON.stringify(response))
        let featured_products = response?.data?.find(obj => obj.key_name ===  `${data.key}`);

        // filter eligible products
        featured_products.key_value = featured_products.key_value.filter(p => (p.material_attribute !== undefined && p.material_attribute.length > 0));
        featured_products.key_value.map(product => {
            product.image_thumb = response.base_url + product.image_thumb
            product.image = response.base_url + product.image
            product.created_at = DateTime.formatDate(product.created_at);

            let reviews = +product.reviews;
            // console.log('review', reviews)
            product.reviews = '';
            while (reviews > 0) {
                product.reviews += ' <img src="images/star.svg" alt="">';
                reviews--;
            }

            if (product.material_attribute) {
                // let VARIATIONS =  product.material_attribute.find(e => e.attribute_class == "VARIATIONS"); 
                let VARIATIONS =  product.material_attribute[0]; 

                
            
                
                let lowestOfferPrice = Number.MAX_SAFE_INTEGER;

                if (VARIATIONS && VARIATIONS.hasOwnProperty('variations')) {
                    
                    for (const item of VARIATIONS.variations) {
                        
                        const offerPrice = parseFloat(item.value.Offer_Amount);
                        
                        if (offerPrice < lowestOfferPrice) {
                            lowestOfferPrice = offerPrice;
                            product.total_offer_price = item.value.Offer_Amount;
                            product.making_charges = item.value.Making_Charge;
                            product.variation_id = item.id;
                        }
                    }
                } 
            }

            

            return product;
        } );

        ComponentGenerator.populateComponent({ component: 'custom-product-card-slide', data: featured_products.key_value})
        .then(css => {
            document.querySelector(`#${data.wrapperId}`).innerHTML = css;
        })
    } else {
        // The HTML code is not yet loaded, wait and check again
        setTimeout(() => initProductSlider(response), 100); // Adjust the timeout as needed
    }
            
   
}

function initTestimonials(response) 
{

    const customCode = document.querySelector('#testimonialsWrapper');
    if (customCode) {
        let main_banners = response.data.find(obj => obj.key_name ===  "testimonials");

        main_banners.key_value.map(banner => {
            banner.image = response.base_url +'/'+ banner.image
            banner.created_at = DateTime.formatDate(banner.created_at);
            let bannerSlider = ComponentGenerator.replacePlaceholders(` 
                                    <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="customerImage rounded-circle">
                                            <img src="{{image}}" width="" height="" alt="customer-image"
                                                class="">
                                        </div>
                                        <p class="customer_text m-sbd mb-3 text-center col-7 mx-auto text-grey2">
                                            {{feedback}}
                                        </p>
                                        <h3 class="customer_name m-sbd text-black mb-4">- {{name}}</h3>
                                    </div>
                                </div>`, banner);
                    document.querySelector('#testimonialsWrapper').innerHTML += bannerSlider;
                return banner;
            } );
    } else {
        // The HTML code is not yet loaded, wait and check again
        setTimeout(() => initTestimonials(response), 100); // Adjust the timeout as needed
    }
}

function initOffersSlider(response) 
{

    const customCode = document.querySelector('#offersSliderWrapper');
    if (customCode) {
        let main_banners = response.data.find(obj => obj.key_name ===  "available_offers");

        main_banners.key_value.map(banner => {
            banner.image = response.base_url +'/'+ banner.image
            banner.created_at = DateTime.formatDate(banner.created_at);
            let bannerSlider = ComponentGenerator.replacePlaceholders(` 
                                    <div class="swiper-slide">
                                    <div class="offerImage rounded-4 overflow-hidden">
                                        <img src="{{image}}" width="" height="" alt="offer-Image">
                                    </div>
                                </div>`, banner);
                    document.querySelector('#offersSliderWrapper').innerHTML += bannerSlider;
                return banner;
            } );
    } else {
        // The HTML code is not yet loaded, wait and check again
        setTimeout(() => initOffersSlider(response), 100); // Adjust the timeout as needed
    }
}

function toggleWishList(product_id, variation_id) {
    if (localStorage.getItem(TOKEN_PREFIX+'token')) {
     
            
        let wishlist = localStorage.getItem(TOKEN_PREFIX+'wishlist') ? JSON.parse(localStorage.getItem(TOKEN_PREFIX+'wishlist')) : [];
        let isWislisted = wishlist.find(w => (w.id == product_id));

        if (isWislisted) {

            APIFetcher.fetchData(`${API_BASE_URL}/user/wishlist/${isWislisted.wishlist_id}`, 'DELETE', {}, localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data

                    let wishListedProducts = document.querySelectorAll(".wishlist-product-"+product_id);
                    wishListedProducts.forEach(i => i.src = "./assets/img/heart.svg");

                    localStorage.setItem(TOKEN_PREFIX+'cart', JSON.stringify(response.data) );
                    emitter.publish('cart-updated', response.cart_count);
                    
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });

        } else {
            APIFetcher.fetchData(`${API_BASE_URL}/user/wishlist`, 'POST', {product_id, variation_id}, localStorage.getItem(TOKEN_PREFIX+'token'))
            .then(response => {
                // Render HTML using the response data
                console.log(response)

                let wishListedProducts = document.querySelectorAll(".wishlist-product-"+product_id);
                wishListedProducts.forEach(i => i.src = "./assets/img/heart-filled.svg");

                localStorage.setItem(TOKEN_PREFIX+'wishlist', JSON.stringify(response.data) );
                emitter.publish('wishlist-updated', response.data.length);
               
                // checkWishlist()
                
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

    } else {
        // var loginModal = new bootstrap.Modal(document.getElementById('login'), {backdrop: true})
        loginModal.toggle();
    }

}