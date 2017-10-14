 
<?php if (is_page('contact')) { ?>
<div id="sidebar" class="fourth-column col">
    <h2><a href="<?php echo site_url('contact') ?>">Ready to see results?</a></h2>
    <div class="cta">
        <h3>Find out more.</h3>
        <p>
            <a href="<?php echo site_url('contact') ?>">Contact us</a> or call us at<br>704-765-3715.
        </p>
    </div><!-- end cta -->
    </div>

<?php } else {
    ?>

    <div id="sidebar" class="fourth-column col">

        <h2>
            <?php the_title(); ?></h2>


        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'sub_menu' => true
        ));
        ?>

        <br>
        <h2><a href="<?php echo site_url('contact') ?>">Ready to see results?</a></h2>
        <div class="cta">
            <h3>Find out more.</h3>
            <p>
                <a href="<?php echo site_url('contact') ?>">Contact us</a> or call us at<br>704-765-3715.
            </p>
        </div><!-- end cta -->

    </div>


<?php }
?>
