<div class="sidebar dark">
        <h1 class="sidebarHeading first">Pages</h1>
        <ul class="pages">
            <?php 
                $pages = get_pages(array('sort_column'=>'menu_order'));
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
        <?php wp_tag_cloud(); ?>
        <div class="tmbBanner">
            <a href="http://www.topmommyblogs.com/" target="_blank"><img border="0" src="http://www.topmommyblogs.com/directory/images/banners/TMB-approved-150.png" title="Please click! A visit a day boosts my blog ranking at Top Mommy Blogs - The Best Mommy Blog Directory Ever!" alt="Please click! A visit a day boosts my blog ranking at Top Mommy Blogs - The Best Mommy Blog Directory Ever!" width="150" height="150"></a>
        </div>
        
</div>

