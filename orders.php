<?php
$_PAGE_NAME = "My Orders"
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
                    <!-- <ul class="nav nav-pills mb-3 gap-20" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link border-grey px-links active" id="pills-home-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                aria-controls="pills-home" aria-selected="true">My Orders</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-links border-grey px-links" id="pills-profile-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Cancelled Orders</button>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="d-flex justify-content-end col-12">
                                <input type="text" class="h-50 border-grey rounded-2 px-2" placeholder="Search">
                            </div>
                            <div class="overflow-auto">
                                <table class="col custom_width_order_table">
                                    <tr class="h-56 border-bottom ">
                                        <th class="text-center ">
                                            <span class="font-14 text-black m-bd text-center">Order Id</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center">Date Purchased</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center">Status</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center">Total</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center">Payment Type</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center"></span>
                                        </th>
                                    </tr>
                                    <tr class="h-56 border-bottom">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-green">Inprogress</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">COD</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="./OrderDetail.html"
                                                style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View Details</span></a>
                                        </th>
                                    </tr>
                                    <tr class="h-56 border-bottom">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-green">Inprogress</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">Online</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="" style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                    <tr class="h-56 border-bottom">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-green">Inprogress</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">COD</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="" style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                    <tr class="h-56 border-bottom">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-green">Inprogress</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">Online</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="" style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                    <tr class="h-56">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-green">Inprogress</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">COD</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="./OrderDetail.html"
                                                style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="d-flex justify-content-end col-12">
                                <input type="text" class="h-50 border-grey rounded-2 px-2" placeholder="Search">
                            </div>
                            <div class="overflow-auto">
                                <table class="col custom_width_order_table">
                                    <tr class="h-56 border-bottom ">
                                        <th class="text-center ">
                                            <span class="font-14 text-black m-bd text-center">Order Id</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center">Date Purchased</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center">Status</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center">Total</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center">Payment Type</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="font-14 text-black m-bd text-center"></span>
                                        </th>
                                    </tr>
                                    <tr class="h-56 border-bottom">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-danger">Cancelled</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">COD</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="./OrderDetail.html"
                                                style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                    <tr class="h-56 border-bottom">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-danger">Cancelled</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">Online</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="./OrderDetail.html"
                                                style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                    <tr class="h-56 border-bottom">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-danger">Cancelled</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">COD</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="./OrderDetail.html"
                                                style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                    <tr class="h-56 border-bottom">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-danger">Cancelled</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">Online</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="./OrderDetail.html"
                                                style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                    <tr class="h-56">
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">RADHA00873</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">02, Feb 2024</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-danger">Cancelled</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">₹13,585</span>
                                        </th>
                                        <th class="text-center">
                                            <span class="m-sbd font-14 text-grey4">COD</span>
                                        </th>
                                        <th class="text-center">
                                            <a href="./OrderDetail.html"
                                                style="text-decoration: underline;color: #36B609;"><span
                                                    class="m-sbd font-14 ">View
                                                    Details</span></a>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div> -->
                    <div class="table-responsive order-list">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>ORDER ID</th>
                                <th>AMOUNT</th>
                                <th>DATE & TIME</th>
                                <th>ORDER STATUS</th>
                                <th>PAYMENT TYPE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody id="order-list-table">
                        </tbody>
                    </table>
                </div>
                </div>

               

            </div>
        </div>

    </section>
     <!-- FOOTER START -->
     <?php include("./templates/footer.php"); ?>
        <!-- FOOTER END -->

    <script>
        function initOrderListTable() {

            APIFetcher.fetchData(`${API_BASE_URL}/user/checkout`, 'GET', '', localStorage.getItem(TOKEN_PREFIX+'token'))
            .then(response => {
                // Render HTML using the response data

                console.log(response)
                if (response.status == 200)
                {
                    response.data.forEach(order => {

                    document.getElementById('order-list-table').innerHTML +=  `<tr>
                    <td><span class="mobile-label">ORDER ID :</span> <b>${response.prefix + order.order_id}</b></td>
                    <td><span class="mobile-label">AMOUNT :</span> ₹ ${order.final_total}</td>
                    <td><span class="mobile-label">DATE & TIME :</span> ${order.created_at}</td>
                    <td><span class="mobile-label">ORDER STATUS :</span> <span class="order-badges bg-green">${order.order_status}</span></td>
                    <td><span class="mobile-label">PAYMENT TYPE :</span> <span class="payment-badges ${order.payment_mode == 'cod' ? 'bg-purple' : 'bg-light-green'}">${order.payment_mode}</span></td>
                    <td><a href="order-details?order=${order.order_id}" class="view-btn btn">View</a></td>
                    </tr>`;

                    

                });
                } else {
                    document.querySelector('.order-list').innerHTML = `<div class="row mb-4" ><span class="btn ">No Orders Found.</span></div>`;
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        initOrderListTable()
    </script>

</body>

</html>