<div class="content-wrap">
    <?php
    while (have_posts()){
        the_post();
        ?>
        <ul class="tags">
            <li><a href="#"><?php the_category("/")?></a></li>
        </ul>
        <h3><?php echo the_title() ?></h3>
        <ul class="meta pb-20">
            <li><a href="<?php esc_url(get_author_posts_url(get_the_author_meta("ID")))?>"><span class="lnr lnr-user"></span><?php the_author()?></a></li>
            <li><a href="<?php echo esc_url( get_day_link('','','') ); ?>"><span class="lnr lnr-calendar-full"></span><?php the_date() ?></a>
            </li>
            <li><a href="<?php echo esc_url( get_comments_link(get_post("ID")) ); ?>"><span class="lnr lnr-bubble"></span><?php comments_number() ?> </a></li>
        </ul>
        <?php the_content() ?>
        <div class="navigation-wrap justify-content-between d-flex">
            <?php
            $mymag_prev_post = get_previous_post();
            if ($mymag_prev_post):
                ?>
                <a class="prev"
                   href="<?php echo get_the_permalink($mymag_prev_post); ?>"><span
                            class="lnr lnr-arrow-left"></span><?php _e('Previous Post', 'mymag') ?>

                </a>
            <?php endif; ?>

            <?php
            $mymag_next_post = get_next_post();
            if ($mymag_next_post):
                ?>
                <a class="next"
                   href="<?php echo get_the_permalink($mymag_next_post); ?>"><?php _e('Next Post', 'mymag') ?> <span
                            class="lnr lnr-arrow-right"></span>

                </a>
            <?php endif; ?>
        </div>
        <?php
        if (!post_password_required()){
            comments_template();
        }
        ?>
        <?php
    }
    ?>
</div>