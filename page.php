<?php
    get_header();
?>
            <div class="body">
                <?php get_sidebar(); ?>
                <div class="content light">
                    <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                    ?>
                    <div class="single" id="<?php the_ID();?>">
                        <h1 class="singleTitle first"><?php the_title();?></h1>
                        <?php 
                        if (has_post_thumbnail()) {
                            $featuredImage = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                        } 
                        ?>
                        <img src="<?php echo $featuredImage ?>" class="singleImage" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                        <div class="singleContent">
                            <?php the_content("Read more...");?>
                        </div>
                    </div>
                    <?php
                            } //end while
                    ?>
                    <?php
                        }//end if
                    ?>
                </div>
            </div>

<?php
get_footer();