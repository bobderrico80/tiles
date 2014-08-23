            <div class="footer dark">
                <p>
                    Theme design copyright <?php echo date('Y');?> by <a href="http://www.derricowebdesign.com">D'Errico Web Design</a>
                </p>
            </div>
        </div> <?php //close pageWrapper div?>
        <script src="wp-content/themes/tiles/slider.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $(".tile").bind("click",function(){
                    window.location.href = "/?p=" + $(this).attr("id");
                });
            });
        </script>
    </body>
</html>