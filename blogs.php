<?php
$_PAGE_NAME = "Our Blogs"
?>

<!DOCTYPE html>
<html lang="en">


<?php include("./templates/head.php"); ?> 

<body>
    <!-- HEADER SECTION START-->
    <?php include("./templates/header.php"); ?> 
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
    
    <section class="aboutUs_wrapper">
        <div class="container mt-5 pt-3 mb-15r">
            <h3 class="aboutus_title m-bd text-black"> <?= $_PAGE_NAME; ?></h3>
            <div class="blog_grid" id="blog-list">
                
               

            </div>
            <nav aria-label="Page navigation example" class="mt-5 pt-2 d-flex justify-content-center" id="nxt-btn">
            </nav>
        </div>
    </section>
   
    <!-- FOOTER START -->
    <?php include("./templates/footer.php"); ?>
        <!-- FOOTER END -->
    <script>
         function nextPage(url) {
            APIFetcher.fetchData(url, 'GET')
                .then(response => {
                    // Render HTML using the response data
                    console.log(response);
                    response.data.data.map(blog => {
                        blog.blog_image_thumb = response.base_url + blog.blog_image_thumb
                        blog.created_at = DateTime.formatDate(blog.created_at);
                        blog.href = '/blog/' + blog.id + '/' + ((blog.blog_title).replaceAll(' ', '-') ).toLowerCase() + '.html';
                        return blog;
                    } );
                    console.log(response.data.data);
                    ComponentGenerator.populateComponent({ component: 'blog-post-card', data: response.data.data})
                    .then(blogList => {
                        document.querySelector('#blog-list').innerHTML += blogList;
                    })

                    if (response.data.next_page_url) {
                        document.getElementById('nxt-btn').innerHTML = `<a class="allColBtn rounded-2 text-center" href="javascript:nextPage('${response.data.next_page_url}')" aria-label="Next">
                                        <span class="m-reg text-center text-green ">Load More Blogs</span>
                                    </a>`;
                    } else {
                        document.getElementById('nxt-btn').innerHTML = ""
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

    nextPage(`${API_BASE_URL}/blog`);
    </script>
</body>

</html>