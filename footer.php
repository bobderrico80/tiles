            <div class="footer dark">
                <p>Blog Posts and Pages &copy Copyright <?php echo date('Y'); ?> <a href="mailto:meg@notyourmommysblog.com">Megan D'Errico</a></p>
                <p>Theme Design &copy Copyright <?php echo date('Y');?> <a href="http://www.derricowebdesign.com">D'Errico Web Design</a></p>
                <p>Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | <a href="wp-admin/">Administrator Login</a></p>
            </div>
        </div> <?php //close pageWrapper div?>
        <script src="wp-content/themes/tiles/slider.js" type="text/javascript"></script>
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
        </script>
    </body>
</html>