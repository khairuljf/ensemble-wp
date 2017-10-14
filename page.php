<?php get_header(); ?>
<!-- end masthead-container -->    
<div id="banner">
    <?php
    if (has_post_thumbnail()) {
        echo '<img src="' . get_the_post_thumbnail_url() . '" >';
    }
    ?>

</div><!-- end banner -->

<div id="content">
    
<?php get_sidebar(); ?>
    <!-- end fourth-column -->        
    <div id="main" class="three-fourths-column col">


        <?php
        while (have_posts()): the_post();  
        
            the_content();
        
        endwhile;
        
        
        wp_reset_query();
        ?>

    </div>
    <!-- end three-fourths-column -->

    <div class="clear"></div>

</div><!-- end content -->
</div><!-- end container -->

<?php get_footer(); ?>