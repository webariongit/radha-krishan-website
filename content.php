<!DOCTYPE html>
<html lang="en">


<?php include("templates/head.php"); ?> 

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
                        <span class="text-white text-breadcrumb m-med" id="bc-title">
                            
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutUs_wrapper">
        <div class="container mt-md-5 mt-3 pt-2 pt-md-5 mb-15r">
            <div class="row align-items-center ">
                <div class="col-md col-12 ">
                    <h4 class="aboutus_title m-bd text-black" id="title"></h4>
                </div>
                <span id="description"></span>
            </div>
        </div>
    </section>

 <!-- FOOTER START -->
 <?php include("templates/footer.php"); ?>
        <!-- FOOTER END -->
<script>
    function getTitle() {
        // Get the URL from the address bar
        const url = window.location.href;

        // Extract the part after the last slash '/'
        const path = url.substring(url.lastIndexOf('/') + 1);

        // Remove the file extension if present
        const fileName = path.replace('.php', '');

        // Split the file name by hyphen '-'
        const words = fileName.split('-');

        // Convert each word to title case
        const titleCaseWords = words.map(word => word.charAt(0).toUpperCase() + word.slice(1));

        // Join the title case words with spaces
        const title = titleCaseWords.join(' ');

        console.log(title); // Output: Privacy Policy

        return title;

    }

    let title = getTitle();
    document.getElementById('bc-title').innerHTML = title;
    document.getElementById('title').replaceWith(title);

    const pageInfoUnsubscribe = emitter.subscribe('pageInfoUpdated', data => {
        console.log('Custom event fired!', data);
        let pageData = data.find(pd => pd.title.toLowerCase() == title.toLowerCase());
        console.log(pageData);
    //  document.querySelector('#title').replaceWith(pageData.title);
        document.getElementById('description').innerHTML = pageData.description;
    });
</script>

    

    
</body>

</html>