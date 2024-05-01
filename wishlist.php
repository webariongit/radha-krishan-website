<?php
$_PAGE_NAME = "Wishlist"
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

    <section class="wishlist_wrapper">
        <div class="container">
            <div class="row gutter-y d-flex flex-row flex-wrap mb-15r" id="wishlistProductCardsWrapper">

            </div>

        </div>
    </section>
  
     <!-- FOOTER START -->
     <?php include("./templates/footer.php"); ?>
        <!-- FOOTER END -->

        <script>
            function getWishlist() {
                APIFetcher.fetchData(`${API_BASE_URL}/user/wishlist`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data

                   
                    if (response.status == 200){
                        response.data.map(w => {
                            w.image = response.base_url + w?.product_details?.image;
                            w.productname = w?.product_details?.productname;
                            w.productcode = w?.product_details?.productcode;
                            w.description = w?.product_details?.description;

                            w.assets = JSON.parse(w.assets);

                            w.TOTAL_OFFER_PRICE = w.assets.value.TOTAL_OFFER_PRICE
                            w.TOTAL_PRICE = w.assets.value.TOTAL_PRICE;
                        })
                        console.log(response)
                        localStorage.setItem(TOKEN_PREFIX+'wishlist', JSON.stringify(response.data) );
                        emitter.publish('wishlist-updated', response.wishlist_count);

                        if ( response.wishlist_count) {
                            ComponentGenerator.populateComponent({ component: 'wishlist-product-card', data: response.data})
                            .then(css => {
                                document.querySelector(`#wishlistProductCardsWrapper`).innerHTML = css;
                            })
                        } else {
                            console.log('response wishlist_count', response.wishlist_count)
                            document.querySelector(`#wishlistProductCardsWrapper`).innerHTML = `<div id="empty-wishlist" class="row text-center">
                                                                                                <div class="col-lg-12">
                                                                                                    <div class="order-complete-content">
                                                                                                        <i class="fas fa-heart-broken big-icon"></i>
                                                                                                        <h4>Your Wishlist is empty.</h4>
                                                                                                        <p id="status_message"></p>
                                                                                                        <div id="order_detail_btn"></div>
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>`;
                        }

                        
                    }
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }

            function removeToWishlist(wishlist_id) {
       

                APIFetcher.fetchData(`${API_BASE_URL}/user/wishlist/${wishlist_id}`, 'DELETE', {}, localStorage.getItem(TOKEN_PREFIX+'token'))
                .then(response => {
                    // Render HTML using the response data

                    console.log(response)

                    // Toast.success(response.message);
                    if (response.status == 200){
                        response.data.map(w => {
                            w.image = response.base_url + w.product_details.image;
                        })
                        console.log(response)
                        localStorage.setItem(TOKEN_PREFIX+'wishlist', JSON.stringify(response.data) );
                        emitter.publish('wishlist-updated', response.wishlist_count);

                        getWishlist()

                        
                    }
                    
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });
                        
                    

            }

            getWishlist()
        </script>
</body>

</html>