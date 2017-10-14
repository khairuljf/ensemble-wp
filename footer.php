<footer>
    <div id="copyright">
        <p><?php echo get_theme_mod('copyright') ?></p>
    </div><!-- end copyright -->
    <nav id="footer-navigation">
        

        <div id="footer">
            <?php

                                wp_nav_menu(array(
                                    'theme_location'=>'footer-menu',
                                    'menu_class'=>'',/* add class in ul*/
                                    'container'=>'', /* when you no need class  id or div before ul  */
                                    'container_class'=>'', /* add div with class before ul*/
                                    'container_ud'=>'', /* add div with id before ul */
                                
                                    
                                ));
                            ?>
        </div>
        
    </nav><!-- end nav -->
    <nav id="social-navigation">
        <ul>
            <li>
                <a href="<?php echo get_theme_mod('twitter') ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" alt="Follow us on Twitter">
                </a>
            </li>
            <li>
                <a href="<?php echo get_theme_mod('lkding') ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_linkedin.png" alt="Follow us on LinkedIn">
                </a>
            </li>
        </ul>
    </nav><!-- end social-navigation -->
    <div class="clear"></div>
</footer><!-- end footer -->


<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"><\/script>')</script>

<!-- FlexSlider -->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 5000,
            animationSpeed: 1000,
            controlNav: false,
            directionNav: true,
            keyboard: true,
            touch: true,
            pauseOnAction: false
        });
    });
</script>

<!-- Modal -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-55241610-1");
        pageTracker._trackPageview();
    } catch (err) {
    }
</script>
    <?php wp_footer(); ?>
</body>
</html>
