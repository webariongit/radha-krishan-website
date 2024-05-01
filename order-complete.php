<?php
$_PAGE_NAME = "Order Completed"
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

    <section class="thanku_msg_wrapper">
        <div class="mt-5 col-lg-6 col-sm-10 col-md-8 mx-auto pt-2 mb-15r">
            <div class="col-2 mx-auto mb-1">
                <img id="status_img"  width="" height="" alt="success_msg">
            </div>
            <h3 class="thanku_msg mt-20 text-black text-center m-bd"  ></h3>
            <p class="text-black font-20 text-center"><h3>We have received your order with order id - <span id="order_id"></span></h3></p>
            <p class="text-center font-16 m-reg" style="color: #666666;" id="status_message"></p>
           

            <div class="d-flex flex-row flex-wrap align-items-center justify-content-center gap-40">
                <a
                    href="/"
                    class="bg-gray border-0 d-flex h-50 rounded-2 d-flex align-items-center justify-content-center py-11 px-5 w-208">
                    <span class="font-16 text-black text-center m-reg text-nowrap">Go back shopping</span>
                </a>
                
                <div id="order_detail_btn"></div>
               
            </div>
        </div>
    </section>

       <!-- FOOTER START -->
     <?php include("./templates/footer.php"); ?>
        <!-- FOOTER END -->

        <script>
            const url = new URL(window.location.href);

                // Get the value of the 'order_id' parameter
                const orderId = url.searchParams.get('order_id');

                // Get the value of the 'status' parameter
                const status = url.searchParams.get('status');

                document.getElementById('order_id').innerHTML = orderId;
                let oid = orderId.split("-")[1];
                if (status == 200 || status == 202 ){
                    document.getElementById('status_message').innerHTML = `Thank you for your order! <br> Your order has been placed and will be processed as soon as possible.`;
                    document.getElementById('status_img').src = './assets/img/Done_ring_round.svg';
                    document.getElementById('order_detail_btn').innerHTML = `<a href="./order-details?order=${oid}" class="bg-green border-0 d-flex h-50 rounded-2 d-flex align-items-center justify-content-center py-11 px-5 w-208" ><span class="font-16 text-white text-center m-reg">Track Order</span></a>`;
                }    

                if (status == 402 || status == 302){
                
                    document.getElementById('status_message').innerHTML = 'But your payment is still pending. You can retry for the payment from order details page. Click the button below to proceed.';
                    document.getElementById('status_img').src = './assets/img/warning.png';
                    document.getElementById('order_detail_btn').innerHTML = `<a href="./order-details?order=${oid}" class="bg-green border-0 d-flex h-50 rounded-2 d-flex align-items-center justify-content-center py-11 px-5 w-208" ><span class="font-16 text-white text-center m-reg text-nowrap">Complete Order</span></a>`;
                }

                APIFetcher.fetchData(`${API_BASE_URL}/user/order-details?id=${oid}`, 'GET', '', localStorage.getItem('ft-token'))
                .then(response => {
                // Render HTML using the response data
                console.log(response);

                })
                .catch(error => {
                console.error('Error:', error);
                });
        </script>
</body>

</html>