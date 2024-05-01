<!DOCTYPE html>
<html lang="en">

<?php include("./templates/head.php"); ?> 

<body>
    <!-- HEADER SECTION START-->
    <?php include("./templates/header.php"); ?>  
    <!-- HEADER SECTION END-->


     <!-- Banner SECTION START-->
    <?php include("./templates/banner.php"); ?>
     <!-- Banner SECTION END-->

    <!-- COLLECTION SECTION START-->
     <?php include("./templates/collection.php"); ?>
    <!-- COLLECTION SECTION END-->

    <!-- Featured Product SECTION START-->
    <?php include("./templates/featured-products.php"); ?> 
    <!-- Featured Product SECTION END-->

    <section class="Timeless_wrapper">
        <div class="container">
            <div class="bg-timeless">
                <div class="col-md-10 col-12 py-timeless">
                    <div class="col-lg-5  col-6 d-flex flex-column ms-auto  align-items-start">
                        <h3 class="bannerText text-left m-bd text-white">
                            Timeless Elegance In Every Piece.
                        </h3>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Most Selling Product SECTION START-->
    <?php include("./templates/most-selling-products.php"); ?> 
    <!-- Most Selling Procduct SECTION END-->

     <!-- CustomerReview SECTION START-->
     <?php include("./templates/customer-review.php"); ?>
    <!-- CustomerReview SECTION END-->

   

    <section class="jewell_video_wrapper">
        <div class="container">
            <div class="col-12 video_props rounded-4 position-relative">
                <video src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerMeltdowns.mp4"
                    poster="./assets/img/videoPoster.webp" id="video"></video>
                <button
                    class="playButton bg-white d-flex align-items-center justify-content-center rounded-circle position-absolute "
                    title="Play" id="playVideo">
                    <i class="fa fa-play text-green font-34" id="iconPlay"></i>
                </button>
            </div>
        </div>
    </section>
    

    <!-- OFFER START -->
    <?php include("./templates/offer_wrapper.php"); ?>
    <!-- OFFER END -->

    <!-- FOOTER START -->
    <?php include("./templates/footer.php"); ?>
    <!-- FOOTER END -->

   

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./assets/js/swiper.js"></script>
   
    <script>
        const playVideo = document.querySelector('#playVideo');
        const video = document.querySelector('#video');
        const iconPlay = document.querySelector('#iconPlay')
        playVideo.addEventListener('click', (e) => {
            if (video.paused) {
                video.play();
                iconPlay.classList.remove('fa-play');
                iconPlay.classList.add('fa-pause');

            }
            else {
                video.pause();
                iconPlay.classList.add('fa-play');
                iconPlay.classList.remove('fa-pause');
            }
        })


        // script will be added here

        APIFetcher.fetchData(`${API_BASE_URL}/home`, 'GET')
                .then(response => {
                    // Render HTML using the response data
                    console.log(response);
                    initBanners(response);
                    initCollectionImages(response);
                    initCategoryImages(response);
                    initProductSlider(response, {wrapperId: "customProductCardSlider", key: "featured_products"});
                    initProductSlider(response, {wrapperId: "customProductCardSlider2", key: "most_selling"});
                    initTestimonials(response) ;
                    initOffersSlider(response);

                    getWishlist();
                })
                .catch(error => {
                    console.error('Error:', error);
                });



    
        
       
    </script>

<script src="./assets/js/custom/banner.js"></script>

</body>

</html>