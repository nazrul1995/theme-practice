<?php
require_once get_theme_file_path("/inc/tgm.php");
require_once( get_theme_file_path( "/inc/attachments.php" ) );
require_once get_theme_file_path("/widgets/social-icons-widget.php");
require_once get_theme_file_path("/widgets/editor-widget.php");


if (site_url()== "http://demo.lwhh.com"){
    define("VERSION",time());
}else{
    define("VERSION",wp_get_theme()->get("version"));
}


function mymag_theme_setup() {
    load_theme_textdomain( "mymag", get_theme_file_path( "/languages" ) );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "custom-logo" );
    add_theme_support( "title-tag" );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery","audio", "video") );
    add_editor_style( "/assets/css/editor-style.css" );
    register_nav_menu( "topmenu", __( "Top Menu", "mymag" ) );
    register_nav_menus( array(
        "footer-left"   => __( "Footer Left Menu", "mymag" ),
        "footer-middle" => __( "Footer Middle Menu", "mymag" ),
        "footer-right"  => __( "Footer Right Menu", "mymag" ),
        "footer-resource"  => __( "Footer Resource Menu", "mymag" ),
    ) );
    add_image_size( "mymag-home-square", 750, 439, true );
    add_image_size( "mymag-home-latest", 263, 180, true );
    add_image_size( "mymag-home-large", 710, 310, true );
}
add_action( "after_setup_theme", "mymag_theme_setup" );
function mymag_assets() {
    wp_enqueue_style( "google-fonts-css", "//fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet" );
    wp_enqueue_style( "linearicons-css", get_theme_file_uri( "/assets/css/linearicons.css" ), null, "1.0" );
    wp_enqueue_style( "font-awesome-css", get_theme_file_uri( "/assets/css/font-awesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.css" ), null, "1.0" );
    wp_enqueue_style( "magnific-css", get_theme_file_uri( "/assets/css/magnific-popup.css" ), null, "1.0" );
    wp_enqueue_style( "nice-css", get_theme_file_uri( "/assets/css/nice-select.css" ), null, "1.0" );
    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.min.css" ), null, "1.0" );
    wp_enqueue_style( "owl-css", get_theme_file_uri( "/assets/css/owl.carousel.css" ), null, "1.0" );
    wp_enqueue_style( "jquery-css", get_theme_file_uri( "/assets/css/jquery-ui.css" ), null, "1.0" );
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, "1.0" );
    wp_enqueue_style( 'mymag-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );


    wp_enqueue_script( 'magnific.min.js', "//code.jquery.com/jquery-3.3.1.min.js");
    wp_enqueue_script( 'magnific.min.js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri().'/assets/js/vendor/bootstrap.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'maps.js', "//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    wp_enqueue_script( 'easing.min.js', get_template_directory_uri().'/assets/js/easing.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'hoverIntent.js', get_template_directory_uri().'/assets/js/hoverIntent.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'superfish.min.js', get_template_directory_uri().'/assets/js/superfish.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'jquery.ajaxchimp.min.js', get_template_directory_uri().'/assets/js/jquery.ajaxchimp.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'mn-accordion.js', get_template_directory_uri().'/assets/js/mn-accordion.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'jquery-ui.js', get_template_directory_uri().'/assets/js/jquery-ui.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'jquery.nice-select.min.js', get_template_directory_uri().'/assets/js/jquery.nice-select.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'mail-script.js', get_template_directory_uri().'/assets/js/mail-script.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'main.js', get_template_directory_uri().'/assets/js/main.js', array('jquery'),'1.0',true);

    if ( is_singular() ) {
        wp_enqueue_script( "comment-reply" );
    }
}
add_action( "wp_enqueue_scripts", "mymag_assets" );


function mymag_sidebar(){
register_sidebar(
    array(
        'name'          => __( 'Home sidebar', 'mymag' ),
        'id'            => 'sidebar',    // ID should be LOWERCASE  ! ! !
        'description'   => 'right_sidebar',
        'class'         => 'custom class',
        'before_widget' => '<div id="%1$s" class="single-sidebar-widget most-popular-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title" style="font-size: 14px">',
        'after_title'   => '</h2>',
    )
);

    register_sidebar(
        array(
            'name'          => __( 'Home Section', 'mymag' ),
            'id'            => 'mymag_front_page_content_section',    // ID should be LOWERCASE  ! ! !
            'description'   => 'right_sidebar',
            'class'         => 'custom class',
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget most-popular-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="title" style="font-size: 14px">',
            'after_title'   => '</h6>',
        )
    );

}
add_action("widgets_init","mymag_sidebar");

// Breadcrumbs
function custom_breadcrumbs() {

    // Settings
    $separator          = '';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Homepage';

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';

    // Get the query & post information
    global $post,$wp_query;

    // Do not display on the homepage
    if ( !is_front_page() ) {

        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="lnr lnr-arrow-right"> ' . $separator . ' </li>';

        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="lnr lnr-arrow-right"> ' . $separator . ' </li>';

            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

        } else if ( is_single() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="lnr lnr-arrow-right"> ' . $separator . ' </li>';

            }

            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {

                // Get last category post is in
                $last_category = end(array_values($category));

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="lnr lnr-arrow-right"> ' . $separator . ' </li>';
                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;

            }

            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

                // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="lnr lnr-arrow-right"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            } else {

                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            }

        } else if ( is_category() ) {

            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

        } else if ( is_page() ) {

            // Standard page
            if( $post->post_parent ){

                // If child page, get parents
                $anc = get_post_ancestors( $post->ID );

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="lnr lnr-arrow-right-' . $ancestor . '"> ' . $separator . ' </li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

            } else {

                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

            }

        } else if ( is_tag() ) {

            // Tag page

            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;

            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_month() ) {

            // Month Archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_year() ) {

            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

        } else if ( is_author() ) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

        } else if ( get_query_var('paged') ) {

            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

        } else if ( is_search() ) {

            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

        } elseif ( is_404() ) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }

        echo '</ul>';

    }

}