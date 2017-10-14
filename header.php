<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="Revenue Cycle Consulting, Revenue Cycle Solutions, Revenue Cycle Assessments, Revenue Cycle Support Services, Back-end Revenue Cycle Services, Integrated Revenue Cycle Services"/>
    <meta name="description" content="Ensemble Health Partners provides revenue cycle consulting and innovative revenue cycle solutions to hospitals and health systems. Services include HIM optimization and centralization, RCM process optimization, vendor management, ICD-10 preparation, EMR integration support, revenue cycle gap analysis and integrated support services such as coding review, denial and underpayment recovery and more."/>
    <meta http-equiv="Content-Language" content="en-us"/>
    <meta name="page-topic" content="Revenue Cycle Consulting and revenue cycle support services"/>
    <meta name="page-type" content="Revenue Cycle Consulting"/>
    <meta name="audience" content="all"/>
    <meta name="Classification" content="revenue cycle consulting"/>
    <meta name="category" content="revenue cycle consulting, denial and underpayment recovery, revenue integrity, coding review, managed care, commercial payor contract analysis, charge capture, CDM services, cash flow acceleration, root cause analysis" />
    <meta name="copyright" content="Copyright &copy; 2014 All Rights Reserved. Judson Ivy, Managing Partner @ http://www.ensembleHP.com &ndash; It is not ok to copy any content from this website without written permission." />
    <meta name="Publisher" content="Ensemble Health Partners. - http://www.EnsembleHP.com"/>
    <meta name="Author" CONTENT="Judson Ivy, Managing Partner and Revenue Cycle Consultant -  http://www.EnsembleHP.com"/>
    <meta http-equiv="Content-Language" content="english"/>
    <META NAME="DISTRIBUTION" CONTENT="GLOBAL"/>
    <META NAME="REVISIT-AFTER" CONTENT="7 days"/>
    <meta name="robots" content="index,follow"/>
    <meta name="country" content="United States of America"/>
    <meta name="geo.placename" content="Huntersville"/>
    <meta name="geo.country" content="US"/>
    <meta name="geo.region" content="US-NC"/>
    <meta name="geo.position" content="35.4106940; -80.84285043"/>
    <meta name="DC.title" content="Innovation in Revenue Cycle"/>
    <META name="DC.type" CONTENT="Revenue Cycle Consulting"/>
    <META name="DC.publisher" CONTENT="Ensemble Health Partners http://www.EnsembleHP.com/">
    <META name="DC.creator" CONTENT="Ensemble Health Partners http://www.EnsembleHP.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.modal.css" type="text/css" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,400italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
    <?php wp_head(); ?>
</head>


<?php if(!is_front_page()){ ?>
   <body class="sub" <?php body_class(); ?>>

   <?php  }
    else{ ?>

    <body <?php body_class(); ?>>

      <?php  } ?>

	<div id="container">

    	<div id="masthead-container">
        	<div id="masthead">
                <div id="logo">
                    <a href="<?php bloginfo('home'); ?>" title="Ensemble Health Partners Home">
                    <img src="<?php echo get_theme_mod('logo_upload') ?>" alt="Ensemble Health Partners"></a>
                </div><!-- end logo -->

                <nav id="navigation">
                       


                         <?php

                                wp_nav_menu(array(
                                    'theme_location'=>'header-menu',
                                    'menu_class'=>'',/* add class in ul*/
                                    'container'=>'', /* when you no need class  id or div before ul  */
                                    'container_class'=>'', /* add div with class before ul*/
                                    'container_ud'=>'', /* add div with id before ul */
                                    'fallback_cb'=>'default_menu', /* when menu not selected it will work from default_menu functon functions.php */
                                    
                                ));
                            ?>

                        <div class="clear"></div>
                    </nav><!-- end navigation -->
            </div><!-- end masthead -->
        </div><!-- end masthead-container -->     

           
   