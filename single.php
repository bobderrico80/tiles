<?php
    get_header();
?>
            <div class="body">
                <?php get_sidebar(); ?>
                <div class="content light">
                    <a name="top"></a>
                    <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                    ?>
                    <div class="single" id="<?php the_ID();?>">
                        <h1 class="singleTitle first"><?php the_title();?></h1>
                        <?php 
                        if (has_post_thumbnail()) {
                            $featuredImage = wp_get_attachment_url(get_post_thumbnail_id());
                            echo '<img src="' . $featuredImage . 
                                    '" class="summaryImage ' . get_post(get_post_thumbnail_id())->post_excerpt . 
                                    '" alt="' . get_the_title() . 
                                    '" title="' . get_the_title() . '"/>';
                        } 
                        ?>
                        <div class="singleContent">
                            <?php the_content("Read more...");?>
                        </div>
                        <p class="singleDate">Posted: <?php echo get_the_date('l, F j, Y, g:ia')?></p>
                        <p class="singleTags"><?php the_tags('<b>Tagged as: </b>'); ?></p>
                        <img src="wp-content/themes/tiles/divider.png" class="divider" alt="divider">
                        <div class="pageNav">
                            <div class="pageNavPrevious">
                                <?php previous_post_link(); ?>
                            </div>
                            <div class="pageNavNext">
                                <?php next_post_link(); ?>
                            </div>
                        </div>
                        <div class="comments">
                            <a name="comments"></a>
                            <?php 
                                $closedFlag = false;
                                if (!get_comments_number() && !comments_open()) {
                                    echo '<p class="commentsClosed">Comments are closed on this article.</p>';
                                    $closedFlag = true;
                                } elseif (!get_comments_number()) {
                                    echo '<h2 class="commentsTitle">0 comments</h2>';
                                } else {
                                    comments_template();
                                }
                                
                                if (comments_open()) {
                                    comment_form();
                                } elseif (!$closedFlag) {
                                    echo '<p class="commentsClosed">Comments are closed on this article</p>';
                                }
                            ?>
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