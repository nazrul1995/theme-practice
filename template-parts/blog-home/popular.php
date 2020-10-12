<?php
$mymag_pp = new WP_Query(array(
    'posts_per_page' =>3,
    'ignore_sticky_posts' =>1,
    'orderby' =>"comment_count",
    'order' =>"dec",
));
$post_data = array();
while ($mymag_pp->have_posts()){
    $mymag_pp->the_post();
    $categories = get_the_category();
    $comments = get_comments_number("comments");
    $post_data[] = array(
        "title" => get_the_title(),
        "excerpt" => get_the_excerpt(),
        "permalink" => get_the_permalink(),
        "date" => get_the_date(),
        "thumbnail" => get_the_post_thumbnail_url(get_the_ID(),"home-square"),
        "author" => get_the_author_meta("display_name"),
        "author_avatar" => get_avatar_url(get_the_author_meta("ID")),
        "cat" => $categories[mt_rand(0,count($categories)-1)]->name,
        "comments" => $comments
    );
}

if ($mymag_pp->post_count > 1):

    ?>

<div class="popular-post-wrap">
    <h4 class="title">Popular Posts</h4>
    <div class="feature-post relative">
        <div class="feature-img relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="<?php echo esc_url($post_data[0]['thumbnail'])?>" alt="">
        </div>
        <div class="details">
            <ul class="tags">
                <li><a href="<?php tag_description()?>"><?php the_category() ?></a></li>
            </ul>
            <a href="<?php echo get_the_permalink()?>">
                <h3><?php echo esc_html($post_data[0]['title'])?></h3>
            </a>
            <ul class="meta">
                <li><a href="<?php get_the_author_posts_link() ?>"><span class="lnr lnr-user"></span><?php the_author() ?></a></li>
                <li><a href="<?php get_the_date() ?>"><span class="lnr lnr-calendar-full"></span><?php the_date() ?></a></li>
                <li><a href="<?php comments_number() ?>"><span class="lnr lnr-bubble"></span> <?php echo esc_html($post_data[0]['comments']);?><?php _e("comments","mymag")?></a></li>
            </ul>
        </div>
    </div>
    <div class="row mt-20 medium-gutters">
        <?php
        for ($i = 1; $i < 3; $i++):
            ?>
            <div class="col-lg-6 single-popular-post">
                <div class="feature-img-wrap relative">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="<?php echo esc_url($post_data[$i]['thumbnail'])?>" alt="">
                    </div>
                    <ul class="tags">
                        <li><a href="<?php echo esc_html($post_data[$i]["permalink"])?>"><?php echo esc_html($post_data[$i]['cat'])?></a></li>
                    </ul>
                </div>
                <div class="details">
                    <a href="<?php echo esc_url($post_data[$i]['permalink'])?>">
                        <h4><?php echo esc_html($post_data[$i]['title'])?></h4>
                    </a>
                    <ul class="meta">
                        <li><a href="<?php echo esc_html($post_data[$i]['author_url'])?>"><span class="lnr lnr-user"></span><?php echo esc_html($post_data[$i]['author'])?></a>
                        </li>
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html($post_data[$i]['date'])?></a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span> <?php echo esc_html($post_data[$i]['comments'])?><?php _e("comments","mymag") ?></a></li>
                    </ul>
                    <p class="excert">
                        <?php echo esc_html($post_data[$i]['excerpt'])?>
                    </p>
                </div>
            </div>
        <?php
        endfor;
        ?>
    </div>
</div>
<?php endif; ?>