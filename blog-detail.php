<?php
$_PAGE_NAME = "Blog Detail"
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

    <section class="blog_wrapper">
        <div class="container mt-5 pt-3 mb-15r">
            <div class="col-12 d-flex flex-row align-items-start gap-5 justify-content-between flex-wrap">
                <div class="w-auto3">
                    <div class="col-12 overflow-hidden rounded-3   bg-white">
                        <div class="blog_image overflow-hidden">
                            <img id="blog_image_thumb" width="" height="" alt="">
                        </div>
                        <div class="p-3">
                            <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <!-- <div class="wh-28 rounded-circle overflow-hidden">
                                        <img src="./assets/img/cangan.webp" width="" height="" alt="person_image">
                                    </div> -->
                                    <span class="font-14 text-black m-sbd" id="blog_author"></span>
                                    <span class="font-12 text-grey2 m-sbd " id="created_at"></span>
                                </div>
                                <!-- <div class="d-flex align-items-center gap-2">
                                    <span>
                                        <i class="fa fa-share text-grey2 font-14"></i>
                                    </span>
                                    <span class="text-grey2 font-14 m-bd">Share</span>
                                </div> -->
                            </div>
                            <h3 class="font-18 text-black m-sbd mb-3" id="blog_title"></h3>
                            <span class="font-14 m-reg text-grey " id="description"></span>

                        </div>
                    </div>
                </div>

                <div class="position-lg-sticky top-5 w-450">
                    <h3 class="m-bd text-black font-20 mb-4">Other Blog</h3>
                    <div class="other_blog_card pb-3 border-bottom mb-3 d-flex flex-row gap-20">
                        <div class="otherblogImage rounded-3 overflow-hidden border-1 border-green">
                            <img src="./assets/img/kangan.webp" width="" class="" height="" alt="blog-image">
                        </div>
                        <div class="d-flex flex-column">
                            <h3 class="m-sbd text-black font-18 mb-3">
                                What is Lorem Ipsum?
                            </h3>
                            <p class=" track-2 text-grey font-14 m-reg">It is a long established fact that a reader
                                will be distracted...</p>
                            <p class="text-grey mb-0 text-grey font-12 m-reg">26 Jan 2024 by Miller Scott</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- FOOTER START -->
    <?php include("./templates/footer.php"); ?>
        <!-- FOOTER END -->

    <script>
         const url = new URL(window.location.href);
            // Get the value of the 'order_id' parameter
            const id =  url.searchParams.get('b_id');

          APIFetcher.fetchData(`${API_BASE_URL}/blog-details?id=${id}`, 'POST')
.then(response => {
    // Render HTML using the response data
    console.log(response);
     let data = response.data;
     
    
        data.blog_image = response.base_url + data.blog_image;
        data.blog_image_thumb = response.base_url + data.blog_image_thumb
        data.created_at = DateTime.formatDate(data.created_at);
        data.href = 'blog/' + data.id + '/' + ((data.blog_title).replaceAll(' ', '-') ).toLowerCase() + '.html';
       

     document.querySelector('#blog_image_thumb').src = data.blog_image_thumb;
     document.querySelector('#created_at').innerHTML = data.created_at;
     document.querySelector('#blog_title').innerHTML = data.blog_title;
     document.querySelector('#description').innerHTML = data.description;
     document.querySelector('#blog_author').innerHTML = data.blog_author;

     data.related_blogs.map(blog => {
        blog.blog_image_thumb = response.base_url + blog.blog_image_thumb
        blog.created_at = DateTime.formatDate(blog.created_at);
        blog.href = '/blog/' + blog.id + '/' + ((blog.blog_title).replaceAll(' ', '-') ).toLowerCase() + '.html';
        return blog;
    } );
    
    // ComponentGenerator.populateComponent({ component: 'related-blogs', data: data.related_blogs})
    // .then(blogList => {
    //     document.querySelector('.other-blogs').innerHTML += blogList;
    // })



})
.catch(error => {
    console.error('Error:', error);
});
    </script>
</body>

</html>