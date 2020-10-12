<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mymag
 */

get_header();
?>

    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-nav-area">
                            <h1 class="text-white"><?php _e('Post type','mymag')?></h1>
                            <?php custom_breadcrumbs(); ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="news-tracker-wrap">
                            <h6><span>Breaking News:</span>
                                <?php if (have_posts()):
                                    while (have_posts()):the_post(); ?>
                                        <a href="#"><?php the_title() ?></a>
                                    <?php endwhile; endif;?>
                                <?php Wp_reset_query() ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                            <div class="single-post-wrap">
                                <?php
                                get_template_part("template-parts/post-formats/post", get_post_format() );
                                ?>
                            </div>
                        <!-- Start single-post Area -->

                        <!-- End single-post Area -->
                    </div>
                    <?php get_template_part("template-parts/sidebar") ?>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>

<?php
get_footer();
