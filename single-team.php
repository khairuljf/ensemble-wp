<?php get_header(); ?>  


<div id="banner">


    <?php
    

    $args = array(
        'p' => 6, // ID of a page, post, or custom type
        'post_type' => 'page',
    );

    $q = new WP_Query($args);



    while ($q->have_posts()) : $q->the_post();

        if (has_post_thumbnail()) {
            echo '<img src="' . get_the_post_thumbnail_url() . '" >';
        }


    endwhile;
    
    
    
    ?>


</div>
<!-- end banner -->

<div id="content">
<?php get_sidebar();
        wp_reset_query();
        $prefix = 'clean_';
        $position = get_post_meta(get_the_ID(), $prefix . 'position', true);
        $linkedin = get_post_meta(get_the_ID(), $prefix . 'linkedin', true);
        $vcard = get_post_meta(get_the_ID(), $prefix . 'vcard', true);

         
?>


    <!-- end fourth-column -->        
    <div id="main" class="three-fourths-column col">
        
        <div class="cushycms"><h1><?php echo get_the_title(); ?></h1>

            <h2><?php echo $position;  ?></h2>

            <p class="emphasized">
                <img alt="Judson Ivy" class="float-right" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                <?php echo get_the_content(); ?>
            </p>

            <p class="bio-links">
                
                <?php if(!empty($linkedin)){ ?>
                
                <a href="<?php echo $linkedin;  ?>" target="_blank">
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/icon_bio-linkedin.png" />Connect on LinkedIn
                </a> 
                    
               <?php } ?>
                
                <?php if(!empty($vcard)){ ?>
                
               <a href="<?php echo $vcard;  ?>" target="_blank">
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/icon_bio-vcard.png" />Download vCard
                </a>
                    
               <?php } ?>
                
                
            </p>
        </div><!--end cushy-->
    
    </div><!-- end three-fourths-column -->

    <div class="clear"></div>

</div><!-- end content -->
</div><!-- end container -->

<?php get_footer(); ?>