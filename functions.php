<?php 

add_theme_support( 'title-tag' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );



/* menu register */



register_nav_menus(array(
    'header-menu' => 'Header Menu',
    'footer-menu' => 'Footer Menu',

));

/* default menu when menu not register  */
function default_menu() {
    echo '<ul class="nav navbar-nav navbar-right">';
    if (is_user_logged_in()) {
        echo '<li><a href="' . home_url() . '/wp-admin/nav-menus.php">Create a menu</a></li>';
    } else {
        echo '<li><a href="' . home_url() . '">Home</a></li>';
    }
    echo '</ul>';
}


/* customizer */


function mycustomize($customize) {
    $customize->add_section('heading-section', array(
        'title' => 'Header Option',
        'priority' => '10',
    ));

   
    $customize->add_setting('logo_upload', array(
        'default' => get_template_directory_uri(). '/images/logo_ensemble-health-partners.png',
        'transport' => 'refresh',
    ));
    $customize->add_control(
            new WP_Customize_Image_Control($customize, 'logo_upload', array(
        'section' => 'heading-section',
        'label' => 'Upload Logo',
        'settings' => 'logo_upload',
            ))
    );





$customize->add_section('footer-section', array(
        'title' => 'Footer Option',
        'priority' => '120',
    ));


    $customize->add_setting('copyright', array(
        'default' => 'Copyright © 2017 Ensemble Health Partners. All Rights Reserved.',
        'transport' => 'refresh',
    ));
    $customize->add_control('copyright', array(
        'section' => 'footer-section',
        'label' => 'Copyright Text',
        'type' => 'text',
    ));


     $customize->add_setting('lkding', array(
        'default' => 'https://www.linkedin.com/company/ensemble-health-partners',
        'transport' => 'refresh',
    ));
    $customize->add_control('lkding', array(
        'section' => 'footer-section',
        'label' => 'Instagram Profile link',
        'type' => 'text',
    ));
     $customize->add_setting('twitter', array(
        'default' => 'https://twitter.com/ensemblehp',
        'transport' => 'refresh',
    ));
    $customize->add_control('twitter', array(
        'section' => 'footer-section',
        'label' => 'Twitter Profile link',
        'type' => 'text',
    ));




}
add_action('customize_register', 'mycustomize');



/* Include CMB2 meta box */
include 'metabox/init.php';
include 'metabox/functions.php';

// inlcuding shortcode

include 'inc/shortcode.php';




/*Custom Post register*/



 register_post_type('slider', array(
        'labels' => array(
            'name' => 'Slider',
            'all_items'=>'All Slider'
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title'),
        'menu_icon'=>'dashicons-slides',
            )
    );

  register_post_type('team', array(
        'labels' => array(
            'name' => 'Our Team',
            'all_items'=>'All Team Member'
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title','editor'),
        'menu_icon'=>'https://cdn2.iconfinder.com/data/icons/business-and-economy/256/business_economic_finance_interprise_company_team_work-20.png',
            )
    );

  register_post_type('industry_news', array(
        'labels' => array(
            'name' => 'Industry News',
            'all_items'=>'All News'
        ),
        'public' => true,
        'supports' => array( 'title','editor'),
        'menu_icon'=>'dashicons-editor-kitchensink',
            )
    );

   register_taxonomy( 'icategory', 'industry_news', array(
    'labels'=>array(
        'name'=>'Category',
        'add_new_item'=>'Add New Category',
    ),
    'public'=>true,
    'hierarchical'=>true,
) );



  register_post_type('press', array(
        'labels' => array(
            'name' => 'Ensemble News',
            'all_items'=>'All News'
        ),
        'public' => true,
        'supports' => array( 'title','editor'),
        'menu_icon'=>'dashicons-editor-kitchensink',
            )
    );


    register_taxonomy( 'presssite', 'press', array(
    'labels'=>array(
        'name'=>'Ref Website',
        'add_new_item'=>'Add New Website',
    ),
    'public'=>true,
    'hierarchical'=>true,
) );



 register_post_type('opportunities', array(
        'labels' => array(
            'name' => 'Opportunities',
            'all_items'=>'All Opportunities'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon'=>'dashicons-visibility',
            )
    );




/*This code for show only Dropdown Menu */
 // add hook
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );

// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
  if ( isset( $args->sub_menu ) ) {
    $root_id = 0;
    // find the current menu item
    foreach ( $sorted_menu_items as $menu_item ) {
      if ( $menu_item->current ) {
        // set the root id based on whether the current menu item has a parent or not
      $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
      break;
    }
  }
  // find the top level parent
  if ( ! isset( $args->direct_parent ) ) {
    $prev_root_id = $root_id;
    while ( $prev_root_id != 0 ) {
      foreach ( $sorted_menu_items as $menu_item ) {
        if ( $menu_item->ID == $prev_root_id ) {
          $prev_root_id = $menu_item->menu_item_parent;
          // don't set the root_id to 0 if we've reached the top of the menu
          if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
            break;
          }
        }
      }
    }

    $menu_item_parents = array();
    foreach ( $sorted_menu_items as $key => $item ) {
      // init menu_item_parents
      if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;

      if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
      // part of sub-tree: keep!
        $menu_item_parents[] = $item->ID;
      } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
      // not part of sub-tree: away with it!
      unset( $sorted_menu_items[$key] );
    }
  }
return $sorted_menu_items;
} else {
  return $sorted_menu_items;
}
}




// Allow .vcf files to upload to the media library
 add_filter('upload_mimes', 'custom_upload_mimes');
 function custom_upload_mimes ( $existing_mimes=array() ){
 // add your extension to the array
 $existing_mimes['vcf'] = 'text/x-vcard'; return $existing_mimes;
 }




