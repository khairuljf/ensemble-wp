<?php

function slider($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'slider', 'orderby' => 'menu_order', 'order' => 'ASC')
    );
   
    $list = '<div id="banner" class="flexslider">
    <ul class="slides">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $slink = get_post_meta(get_the_ID(), $prefix . 'slink', true);



        $list .= '<li>
            <a href="'.$slink.'"><img src="'.get_the_post_thumbnail_url().'" >
            </a>
        </li>';

    endwhile;
    $list .= '</ul>
</div> ';
    wp_reset_query();
    return $list;
}

add_shortcode('slider', 'slider');




function home_service($atts) {
    extract(shortcode_atts(array(
        'title' => 'Experience that drives sustainable results',
        'img' => get_template_directory_uri().'/images/img_home-collaborative-partnership.jpg',
        'title1' => 'Collaborative Partnership',
        'img1' => get_template_directory_uri().'/images/img_home-beyond-services.jpg',
        'title2' => 'Beyond Support&nbsp;Services',

        'desc' => 'It takes more than theory to drive innovation in revenue cycle management. Leveraging our experience as hospital and physician practice operators, Ensemble Health Partners utilizes a proven operational model, paired with technology, to provide predictable, actionable and solution-driven approaches to the complex issues of revenue cycle. ',
        'desc1' => 'As experienced hospital operators, our leaders will work to understand your current operations to provide tangible, action-oriented solutions. Everything we do, from our end-to-end revenue cycle assessments to our CDM review, is all about partnership and long-term results.',
        'desc2' => 'Each of our revenue cycle support services is uniquely valuable to our clients because in addition to our recovery work, we share our insights and root cause analysis with our clients to help focus on preventing future issues upstream. ',
        
                    ), $atts));

    
   
    $list = '<div class="two-thirds-column col">
        <div class="cushycms">
        <h1>'.$title.'</h1>
            <p class="emphasized">'.$desc.'<a href="'.site_url('products-services').'">Learn more.</a></p>
        </div><!-- end cushy -->

        <div class="half-column col">
            <div class="cushycms"><img alt="" src="'.$img.'" />
                <h2>'.$title1.'</h2>
                <p>'.$desc1.'<br />
                    <a href="'.site_url('consulting').'">Learn more.</a></p>
            </div><!-- end cushy -->
        </div><!-- end half-column -->

        <div class="half-column col">
            <div class="cushycms"><img alt="" src="'.$img1.'" />
                <h2>'.$title2.'</h2>
                <p>'.$desc2.'<a href="'.site_url('revenue-cycle-support-services').'">Learn more.</a></p>
            </div><!-- end cushy -->
        </div><!-- end half-column -->

    </div>';

    



    wp_reset_query();
    return $list;
}

add_shortcode('home-content', 'home_service');



function twitter_post($atts) {
    extract(shortcode_atts(array(
        'title' => 'Latest Tweets',
       
        
                    ), $atts));

    
   
    $list = '<div class="third-column col" id="tweets">
        <h2>'.$title.'</h2>
        <div>
            <a class="twitter-timeline" href="https://twitter.com/EnsembleHealth" data-widget-id="515591903257976832" data-chrome="noheader" data-border-color="#ffffff" data-tweet-limit="3">Tweets by @EnsembleHealth</a>
            <script>!function (d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? "'.http.'" : "'.https.'";
                                                        if (!d.getElementById(id)) {
                                                            js = d.createElement(s);
                                                            js.id = id;
                                                            js.src = p + "://platform.twitter.com/widgets.js";
                                                            fjs.parentNode.insertBefore(js, fjs);
                                                        }
                                                    }(document, "script", "twitter-wjs");</script>
            <script>
                window.setTimeout(function () {
                    $(".twitter-timeline").contents().find(".e-entry-title").css("font-family", "'.Open  .'");
                    $(".twitter-timeline").contents().find(".e-entry-title").css("font-size", "11");
                }, 500);
            </script>
        </div>
        <p style="background: #ebebeb; margin-top: -10px;">Follow us on Twitter <a href="http://twitter.com/EnsembleHealth" target="_blank">@EnsembleHealth</a></p>
    </div>


    ';

    



    wp_reset_query();
    return $list;
}

add_shortcode('twitter-Tweets', 'twitter_post');




function bio_history($atts) {
    extract(shortcode_atts(array(
        'count' => -1,
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'team',  'order' => 'ASC')
    );
   
    $list = '';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $position = get_post_meta(get_the_ID(), $prefix . 'position', true);
        $linkedin = get_post_meta(get_the_ID(), $prefix . 'linkedin', true);
        $vcard = get_post_meta(get_the_ID(), $prefix . 'vcard', true);



        $list .= '
        <div class="bio"><a href="'.get_the_permalink().'"><img alt="'.get_the_title().'" src="'.get_the_post_thumbnail_url().'"  style="width: 200px; height: 230px;"  /> </a>

                        <div class="title">
                            <h2><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>

                            <h3><a href="'.get_the_permalink().'">'.$position.'</a></h3>
                        </div>
                    </div>';

    endwhile;
    $list .= ' ';
    wp_reset_query();
    return $list;
}

add_shortcode('team-bio', 'bio_history');




function inews_set($atts) {
    extract(shortcode_atts(array(
        'count' => -1,
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'industry_news',  'order' => 'ASC')
    );
   
    $list = ' <div class="cushycms"> <h1>Industry News</h1>';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $readmore = get_post_meta(get_the_ID(), $prefix . 'link', true);
        $cats = get_the_terms(get_the_ID(), 'icategory');


        if(!empty( $cats)){

            foreach ($cats as $cat) {

            $list .= '<h2><a href="'. $readmore.'">'.get_the_title().'</a></h2>
                        <strong>'. get_the_time('F d, Y') .', &nbsp; '.$cat->name.'</strong><br />
                        '.get_the_content().'
                        <br />
                        <a href="'. $readmore.'">Read More</a>';

            
                }

        }

        else {


            $list .= '<h2><a href="'. $readmore.'">'.get_the_title().'</a></h2>
                        <strong>'. get_the_time('F d, Y') .', &nbsp; </strong><br />
                       
                        '.get_the_content().'
                        <br />
                        <a href="'. $readmore.'">Read More</a>';
            
        }


        
        

    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('industry-news', 'inews_set');



function press_news($atts) {
    extract(shortcode_atts(array(
        'count' => -1,
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'press',  'order' => 'ASC')
    );
   
    $list = '<div class="cushycms"> <h1>Industry News</h1>';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $readmore = get_post_meta(get_the_ID(), $prefix . 'link', true); 
        $pdf = get_post_meta(get_the_ID(), $prefix . 'pdffile', true);
        $web = get_the_terms(get_the_ID(), 'presssite');


         if(!empty($web)){
            foreach ($web as $link) {


                $list .= '<h2><strong>'.get_the_title().'</strong></h2>

                        <p><strong>'. get_the_time('F d, Y') .',&nbsp;'.$link->name.'</strong><br />
                             '.get_the_content().'<br />

                        
                            ';

            }

            if(!empty($readmore)){

                $list .= ' <a href="'.$readmore.'" target="_blank">Read full article</a><br />';
            }

            if(!empty($pdf)){

                 $list .= '<a href="'. $pdf.'" target="_blank">Download PDF now</a></p>
                                        &nbsp;</p>';
                            
                        }

       

         }

         else {

            $list .= '<h2><strong>'.get_the_title().'</strong></h2>

                        <p><strong>'. get_the_time('F d, Y') .',&nbsp;</strong><br />
                             '.get_the_content().'<br />

                            ';

           if(!empty($readmore)){

                $list .= ' <a href="'.$readmore.'" target="_blank">Read full article</a><br />';
            }

            if(!empty($pdf)){

                 $list .= '<a href="'. $pdf.'" target="_blank">Download PDF now</a></p>
                                        &nbsp;</p>';
                            
                        }






             
         }



        

    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('press-news', 'press_news');



function opurtu($atts) {
    extract(shortcode_atts(array(
        'count' => -1,
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'opportunities',  'order' => 'DESC')
    );
   
    $list = '
         <h2 class="cushycms" title="Secondary Header">Opportunities:</h2>
    ';
    $new_con=1;
    $modal_con=1;

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $applylink = get_post_meta(get_the_ID(), $prefix . 'link', true);
        $jobrequrie = get_post_meta(get_the_ID(), $prefix . 'jobtype', true);
        


        if($jobrequrie=="standard"){

                $list .= '<h3 class="career-heading"><a href="#job'.$modal_con.'" rel="modal:open">'.get_the_title().'</a></h3>
                    <!-- Modal HTML -->

                    <div class="modal" id="job'.$modal_con.'" style="display:none;">
                        <div class="modal_descrip">
                            <h3>'.get_the_title().'</h3>

                            '.get_the_content().'

                            <p class="cta">
                                <a href="'.$applylink.'" target="_blank">Apply now</a>
                            </p>
                        </div>
                    </div>

        ';


        }

        elseif ($jobrequrie=="new") {
            if($new_con==1){

                $list .= '<p class="emphasized">
                <large>No prior experience? Theres an option for you too:</large>
                </p>';

            }
            

            $list .= '<h3><a href="#job'.$modal_con.'" rel="modal:open">'.get_the_title().'</a></h3>
                    <!-- Modal HTML -->

                    <div class="modal" id="job'.$modal_con.'" style="display:none;">
                        <div class="modal_descrip">
                            <h3>'.get_the_title().'</h3>

                            '.get_the_content().'

                            <p class="cta">
                                <a href="'.$applylink.'" target="_blank">Apply now</a>
                            </p>
                        </div>
                    </div>
        ';

            $new_con++;
            
        }

        


$modal_con++;
    endwhile;
    $list .= ' ';
    wp_reset_query();
    return $list;
}

add_shortcode('opurtunities-list', 'opurtu');
