<?php
    get_header();
?>
            <div class="body">
                <?php get_sidebar(); ?>
                <div class="content light">
                    <?php
                        if (have_posts()) {
                            $first = ' first';
                            while (have_posts()) {
                                the_post();
                    ?>
                    <div class="summary" id="<?php the_ID();?>">
                        <h1 class="summaryTitle<?php echo $first; ?>">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php the_title();?>
                            </a>
                        </h1>
                        <?php
                        if (has_post_thumbnail()) {
                            $featuredImage = wp_get_attachment_url(get_post_thumbnail_id());
                            echo '<img src="' . $featuredImage . 
                                    '" class="summaryImage ' . get_post(get_post_thumbnail_id())->post_excerpt . 
                                    '" alt="' . get_the_title() . 
                                    '" title="' . get_the_title() . '"/>';
                        } 
                        ?>
                        
                        <div class="summaryContent">
                            <?php the_content("Read more...");?>
                        </div>
                        <p class="summaryDate">Posted: <?php echo get_the_date('l, F j, Y, g:ia')?></p>
                        <p class="summaryTags"><?php the_tags('<b>Tagged as: </b>'); ?></p>
                        <p class="summaryComments">
                            <?php 
                                echo '<a href="' . get_comments_link() . '">';
                                if (get_comments_number() == 1) {
                                    echo get_comments_number() . ' comment';
                                } else {
                                    echo get_comments_number() . ' comments';
                                }
                                echo '</a>'
                            ?>
                        </p>
                        <img src="<?php bloginfo('template_url')?>/divider.png" class="divider" alt="divider">
                    </div>
                    <?php
                                $first = '';
                            } //end while
                    ?>
                    <div class="pageNav">
                        <div class="pageNavPrevious">
                            <?php previous_posts_link(); ?>
                        </div>
                        <div class="pageNavNext">
                            <?php next_posts_link(); ?>
                        </div>
                    </div>
                    <?php
                        }//end if
                    ?>
                </div>
            </div>

<?php
get_footer();