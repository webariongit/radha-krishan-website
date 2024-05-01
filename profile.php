<?php
$_PAGE_NAME = "My Profile"
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
            <div class="d-flex col-12 flex-wrap flex-row align-items-start gap-5 mb-15r">

                 <!-- Profile Side Menu START -->
                <?php include("./templates/profile-side-menu.php"); ?>
                <!-- Profile Side Menu END -->

                <div class="w-auto4">
                    <h3 class="font-18 m-bd text-black mb-4">Edit Profile</h3>
                    <div class="position-relative profile_photo">
                    <div class="profile_photo position-relative rounded-circle border-green overflow-hidden">
                        <img id="user-profile-pic-preview"  src="./assets/img/user.webp" width="" height="" alt="profile-photo">
                       
                       
                    </div>
                    <label class="camera_photo position-absolute rounded-circle cursor-pointer d-flex justify-content-center align-items-center border-0 bg-white" for="profile-input-field">
                            <i class="font-14 fa fa-camera "></i>
                            <input type="file" name="" id="profile-input-field" class="d-none">
                        </label>
                    </div>
                    

                     <!-- <label for="" class="change-profile-btn">
                    Change Profile Picture
                </label> -->

                    
                    <div class="profile-success-msg col-12 d-flex align-items-center justify-content-center "> </div>

                    <form id="user-profile-form">
                        <div class="row gy-3  mt-36">
                            <div class="col-lg col-12 d-flex flex-column">
                                <label for="FirstName" class="font-14 text-grey5 m-med">Full Name</label>
                                <input type="text" name="name" id="name"
                                    class="w-100 border-grey rounded-2 h-40 mt-10">
                            </div>
                            <!-- <div class="col-lg col-12 d-flex flex-column">
                                <label for="LastName" class="font-14 text-grey5 m-med">Last Name</label>
                                <input type="text" name="LastName" id="LastName"
                                    class="w-100 border-grey rounded-2 h-40 mt-10">
                            </div> -->
                        </div>
                        <div class="row gy-3 mt-lg-4 mt-2">
                            <div class="col-lg col-12 d-flex flex-column">
                                <label for="Email" class="font-14 text-grey5 m-med">Email</label>
                                <input type="email" name="email" id="email" class="w-100 border-grey rounded-2 h-40 mt-10">
                            </div>
                            <div class="col-lg col-12 d-flex flex-column">
                                <label for="Country" class="font-14 text-grey5 m-med">Phone Number</label>
                                <div class="d-flex flex-row gap-20 justify-content-between mt-10 col-12">
                                    <select name="PhoneNumber" id="PhoneNumber" class="border-grey rounded-2 h-40  col-2">
                                        <option value="">+91</option>
                                    </select>
                                    <input type="text" readonly name="mobile_no" id="mobile_no" class="col border-grey rounded-2 h-40 ">
                                </div>

                            </div>
                        </div>
                        <button
                            type="submit"
                            class="bg-green h-50 rounded-1 border-0 text-white font-16 m-sbd d-flex align-items-center justify-content-center mt-5 px-5">Update</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

    
        <!-- FOOTER START -->
        <?php include("./templates/footer.php"); ?>
        <!-- FOOTER END -->
        <script src="./assets/js/user-profile-form.js"></script>
        

</body>

</html>