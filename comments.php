<div class="comment-sec-area">
    <div class="container">
        <div class="row flex-column">
            <h6>
                <?php
                $mymag_cn = get_comments_number();
                if ($mymag_cn <=1){
                    echo $mymag_cn . " " . __("Comment","philosophy");
                }else{
                    echo $mymag_cn . " " . __("Comments","philosophy");
                }
                ?>
            </h6>
            <div class="comment-list">
                <?php
                wp_list_comments(array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                        'avatar_size' => 74,

                    )
                );

                ?>
            </div>
            <?php

            the_comments_pagination(array(
                    'screen_reader_text' => __('Pagination','mymag'),
                    'prev_text' => __('Previous Comments','mymag'),
                    'next_text' => __('Next Comments','mymag'),
            ))

            ?>
        </div>
    </div>
</div>

<div class="comment-form">
    <h4><?php _e('Post Comment','mymag') ?></h4>
    <?php
    comment_form();

    ?>
</div>