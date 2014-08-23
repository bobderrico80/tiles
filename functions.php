<?php
add_theme_support( 'post-thumbnails' );

function custom_excerpt_length() {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function get_tiles($args) {
    global $post;
    $posts = get_posts($args);
    $firstOne = TRUE;
    foreach ($posts as $post) {
        setup_postdata($post);
        $featuredImage = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        if ($firstOne && !(is_sticky())) {
            $isWide = " tileWide";
        } else {
            $isWide = "";
        }
        ?>
<div class="tile<?php echo $isWide;?>" id="<?php the_ID()?>" style="background-image: url(<?php echo $featuredImage;?>)">
    <div class="tileOverlay">
        <h1 class="tileTitle"><?php the_title()?></h1>
        <p class="tileDate"><?php echo get_the_date('F j, Y'); ?></p>
        <div class="tileExcerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>
        <?php
        $firstOne = FALSE;
    } //end foreach
    wp_reset_postdata();
} //end function