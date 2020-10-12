
<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4><?php _e('Product','mymag')?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-left',
                    'menu_id'        => 'footerleft',
                    'menu_class'     => '',
                ) );
                ?>

            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4><?php _e('Quick Links','mymag')?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-middle',
                    'menu_id'        => 'footermiddle',
                    'menu_class'     => '',
                ) );
                ?>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4><?php _e('Features','mymag')?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-right',
                    'menu_id'        => 'footerright',
                    'menu_class'     => '',
                ) );
                ?>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4><?php _e('Resource','mymag')?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-resource',
                    'menu_id'        => 'footerresource',
                    'menu_class'     => '',
                ) );
                ?>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>Instragram Feed</h4>
                <ul class="instafeed d-flex flex-wrap">
                    <li><img src="<?php echo get_template_directory_uri() ?>../assets/img/i1.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>../assets/img/i2.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>../assets/img/i3.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>../assets/img/i4.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>../assets/img/i5.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>../assets/img/i6.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>../assets/img/i7.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>../assets/img/i8.jpg" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-md-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>