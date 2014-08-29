            <div class="footer dark">
                <p>Blog Posts and Pages &copy Copyright <?php echo date('Y'); ?> <a href="mailto:meg@notyourmommysblog.com">Not Your Mommy's Blog</a></p>
                <p>Theme Design &copy Copyright <?php echo date('Y');?> <a href="http://www.derricowebsolutions.com">D'Errico Web Solutions</a></p>
                <p>Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | <a href="<?php bloginfo('url');?>/wp-admin/">Administrator Login</a></p>
            </div>
        </div> <?php //close pageWrapper div?>
        <script src="<?php bloginfo('template_url')?>/slider.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                
                //Event listener for tile clicks
                $(".tile").on("click",function(){
                    window.location.href = "/?p=" + $(this).attr("id");
                });
                
                //Event listeners to open/close sidebar meny on small screens
                $(".menu").on("click",function(){
                    $(".sidebar").slideToggle();
                });
                
                $(".sidebar").find("a").on("click",function(){
                    $(".sidebar").slideUp();
                    });
                });
                
                //Event listener for back button
                $(".back").on("click",function(){
                    window.location.href = "/";
                });
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-54141519-1', 'auto');
          ga('send', 'pageview');

        </script>
        <?php 
            if (is_front_page()) {
        ?>
        
        <script>
            $(document).ready(function(){
                $(".before").hide();
            });
        </script>
        
        <?php } //END IF ?>
    </body>
</html>