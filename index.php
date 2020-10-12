<?php get_header(); ?>
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
       <?php get_template_part("template-parts/blog-home/featured") ?>
    </section>
    <!-- End top-post Area -->
    <!-- Start latest-post Area -->
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start latest-post Area -->
                   <?php get_template_part("template-parts/blog-home/latest") ?>
                    <!-- End latest-post Area -->

                    <!-- Start banner-ads Area -->
                    <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>../assets/img/banner-ad.jpg" alt="">
                    </div>
                    <!-- End banner-ads Area -->
                    <!-- Start popular-post Area -->
                    <?php get_template_part("template-parts/blog-home/popular") ?>
                    <!-- End popular-post Area -->
                    <!-- Start relavent-story-post Area -->
                    <?php get_template_part("template-parts/blog-home/relevent") ?>
                    <!-- End relavent-story-post Area -->
                </div>
                <?php get_template_part("template-parts/sidebar") ?>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>

<?php get_footer() ?>