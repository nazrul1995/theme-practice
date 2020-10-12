<nav id="nav-menu-container">
   <?php
   $mymag_menu = wp_nav_menu( array(
       'theme_location' => 'topmenu',
       'menu_id'        => 'topmenu',
       'menu_class'     => 'nav-menu',
   ) );

   ?>
</nav><!-- #nav-menu-container -->