<div id="sidebar" class="fourth-column col">

<!-- ABOUT -->
	<?php  if($section == 'about-us') { ?>
        <h2>About Us</h2>
        <ul>
            <li><a href="/about-us/our-story.php" <?php  if($pagename == 'our-story') { echo 'class="active"'; } ?>>Our Story</a></li>
            <li><a href="/about-us/our-team.php" <?php  if($pagename == 'our-team') { echo 'class="active"'; } ?>>Our Team</a></li>
        </ul>
    <?php  } ?>

<!-- PRODUCTS -->
	<?php  if($section == 'products-and-services') { ?>
        <h2>Products &amp; Services</h2>
        <ul>
            <li><a href="/products-and-services/consulting.php" <?php  if($pagename == 'consulting') { echo 'class="active"'; } ?>>Consulting</a></li>
            <li><a href="/products-and-services/integrated-support-services.php" <?php  if($pagename == 'back-end-services') { echo 'class="active"'; } ?>>Revenue Cycle Support Services</a></li>
        </ul>
    <?php  } ?>

<!-- NEWS -->
	<?php  if($section == 'news') { ?>
    	<h2>News</h2>
    	<ul>
            <li><a href="/news/industry-news.php" <?php  if($pagename == 'industry-news') { echo 'class="active"'; } ?>>Industry News</a></li>
            <li><a href="/news/press.php" <?php  if($pagename == 'press') { echo 'class="active"'; } ?>>Ensemble News</a></li>
        </ul>
	<?php  } ?>
    
<!-- CAREERS -->
    <?php  if($section == 'careers') { ?>
        <h2>Careers</h2>
        <ul>
            <li><a href="/careers/culture.php" <?php  if($pagename == 'culture') { echo 'class="active"'; } ?>>Culture</a></li>
            <li><a href="/careers/benefits.php" <?php  if($pagename == 'benefits') { echo 'class="active"'; } ?>>Benefits</a></li>
            <li><a href="/careers/events.php" <?php  if($pagename == 'events') { echo 'class="active"'; } ?>>Events</a></li>
        </ul>
    <?php  } ?>

<!-- GLOBAL CTA -->
	<br>
    <h2><a href="/contact/">Ready to see results?</a></h2>
    <div class="cta">
        <h3>Find out more.</h3>
        <p>
            <a href="/contact/">Contact us</a> or call us at<br>704-765-3715.
        </p>
    </div><!-- end cta -->

</div><!-- end fourth-column -->