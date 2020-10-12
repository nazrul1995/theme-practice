<!DOCTYPE html>
<html lang="zxx" class="no-js" <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                    <ul>
                        <li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
                        <li><a href="mailto:support@colorlib.com"><span class=" lnr lnr-envelope"></span><span>support@colorlib.com</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <a href="index.html">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>../assets/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>../assets/img/banner-ad.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu" id="main-menu">
        <div class="row align-items-center justify-content-between">
           <?php get_template_part("template-parts/common/navigation") ?>
            <div class="navbar-right">
                <form class="Search">
                    <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                    <label for="Search-box" class="Search-box-label">
                        <span class="lnr lnr-magnifier"></span>
                    </label>
                    <span class="Search-close">
								<span class="lnr lnr-cross"></span>
                       </span>
                </form>
            </div>
        </div>
    </div>
</header>
