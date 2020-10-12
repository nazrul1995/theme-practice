<div class="latest-post-wrap">
    <h4 class="cat-title"><?php _e("Latest News","mymag")?></h4>
    <?php
    $mymag_latest_post = new WP_Query(array(
        'posts_per_page' =>6,
        'ignore_sticky_posts' =>1,
        'orderby' =>"date",
        'order' =>"dec",
    ));
    while ($mymag_latest_post->have_posts()) {
        $mymag_latest_post->the_post();
        ?>
        <div class="single-latest-post row align-items-center">
            <div class="col-lg-5 post-left">
                <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <?php the_post_thumbnail("mymag-home-latest") ?>
                </div>
                <ul class="tags">
                    <li><a href="<?php ?>"><?php the_category(' / ')?></a></li>
                </ul>
            </div>
            <div class="col-lg-7 post-right">
                <a href="<?php the_permalink()?>">
                    <h4><?php the_title() ?></h4>
                </a>
                <ul class="meta">
                    <li><a href="<?php esc_url(get_author_posts_url(get_the_author_meta("ID")))?>"><span class="lnr lnr-user"></span><?php the_author() ?></a></li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo get_the_date() ?></a></li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span><?php comments_number()?></a></li>
                </ul>
                <p class="excert">
                    <?php the_excerpt() ?>
                </p>
            </div>
        </div>
        <?php
    }
    ?>

</div>