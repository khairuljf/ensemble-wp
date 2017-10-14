<?php get_header(); ?>


<!-- Start  banner -->
<?php echo do_shortcode('[slider]') ?>

<!-- end banner -->

<div id="content">
    
    <?php echo do_shortcode('[home-content]') ?>
    


    <!-- end two-thirds-column -->
<?php echo do_shortcode('[twitter-Tweets]') ?>
    <!-- end third-column -->

    <div class="clear"></div>
    
</div><!-- end content -->
</div><!-- end container -->
<?php get_footer(); ?>