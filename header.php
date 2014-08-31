<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width"/>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta property="og:title" content="<?php bloginfo('name'); wp_title(' - ',TRUE,'left'); ?>"/>
        <meta property="og:description" content="Cute Tagline Here. Tomorrow."/>
        <title><?php bloginfo('name'); wp_title(' - ',TRUE,'left'); ?></title>
    </head>
    <body <?php body_class(); ?>>
            <?php 
                $type = '';
                $showBack = '';
                if (!is_home()) {
                    $type = 'notHome';
                    $showBack = 'showBack';
                }
            ?>
            <div class="header dark">
                <div class="masthead">
                    <img src="<?php bloginfo('template_url');?>/menu.png" alt="Menu" class="menu icon" title="Menu"/>
                    <img src="<?php bloginfo('template_url');?>/back.png" alt="Back" class="back icon <?php echo $showBack;?>" title="Back"/>
                    <a href="<?php echo home_url()?>">
                        <img 
                            src="<?php bloginfo('template_url');?>/header.png" 
                            alt="<?php bloginfo('name');?> - <?php bloginfo('description');?>"
                            title="<?php bloginfo('name');?> - <?php bloginfo('description');?>"
                            class="headerImage"
                        />
                    </a>
                </div>
            </div>
            <div class="pageWrapper">
                <div class="tileSection <?php echo $type;?>">
                    <div class="stickyTileSection">
                        <?php
                        $page = get_page_by_title('Click Here for Fun!');
                        $featuredImage = wp_get_attachment_url(get_post_thumbnail_id($page->ID));
                        ?>
                        <div class="tile" id="<?php echo $page->ID;?>" style="background-image: url(<?php echo $featuredImage;?>)">
                            <div class="tileOverlay">
                                <h1 class="tileTitle"><?php echo $page->post_title;?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="sliderTileSection">
                        <div class="sliderButtonLeft">
                            <div class="triangleLeft"></div>
                        </div>
                        <div class="sliderButtonRight">
                            <div class="triangleRight"></div>
                        </div>
                            <?php 
                            $args = array (
                                'posts_per_page'=>10,
                                'post__not_in' => get_option('sticky_posts')
                            );
                            get_tiles($args);
                            ?>
                        </div>
                    </div>
