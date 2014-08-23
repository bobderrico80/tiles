<div class="sidebar dark">
        <h1 class="sidebarHeading">Pages</h1>
        <ul class="pages">
            <?php 
                $pages = get_pages();
                foreach ($pages as $page) {
                    $pageTitle = $page->post_title;
                    echo '<li><a href="' . get_page_link($page) . '">';
                    echo $pageTitle;
                    echo '</a></li>';
                }
            ?>
        </ul>
        
        <h1 class="sidebarHeading">Recent Posts</h1>
        <ul class="recentPosts">
            <?php
                $recentPosts = wp_get_recent_posts(array('post_status'=>'publish'));
                foreach ($recentPosts as $post) {
                    echo '<li><a href="' . get_permalink($post["ID"]) . '">';
                    echo $post["post_title"];
                    echo '</a></li>';
                }
            ?>
        </ul>
        
        <h1 class="sidebarHeading">Archives</h1>
        <ul class="archives">
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        
        <h1 class="sidebarHeading">Tags</h1>
        <ul class="tags">
            <?php
                $tags = get_tags();
                foreach ($tags as $tag) {
                    $tagTitle = $tag->name;
                    echo '<li><a href="' . get_tag_link($tag->term_id) . '">';
                    echo $tag->name;
                    echo '</a></li>';

                }
            ?>
        </ul>
</div>

