<?php if (have_comments()) { ?>
<h2 class="commentsTitle">
    <?php
        $commentsTitle = '';
        if (get_comments_number() == 1) {
            $commentsTitle .= get_comments_number() . ' comment';
        } else {
            $commentsTitle .= get_comments_number() . ' comments';
        }
        echo $commentsTitle .= ' on ' . get_the_title();
    ?>
</h2>
<ul class="commentsList">
    <?php 
        wp_list_comments();
    ?>
</ul>
<?php } //end if (have_comments) ?>

