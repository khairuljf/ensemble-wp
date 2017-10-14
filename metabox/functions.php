<?php 






function coint() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'slider',
		'title'         => esc_html__( 'Slider Target link' ),
		'object_types' => array( 'slider', ), // post type
	
	) );

		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Enter link ', 'cmb2' ),

				'id'         => $prefix . 'slink',
				'type' => 'text',
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );
		
	
	

}

add_action( 'cmb2_admin_init', 'coint' );


function team() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'team_member',
		'title'         => esc_html__( 'Team Member Input Details Section ::' ),
		'object_types' => array( 'team', ), // post type
	
	) );

		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Position Name ', 'cmb2' ),

				'id'         => $prefix . 'position',
				'type' => 'text',
				'desc'    => 'Enter Team member postion',
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );

		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Linkeding link ', 'cmb2' ),

				'id'         => $prefix . 'linkedin',
				'type' => 'text',
				'desc'    => 'Enter the Linkeding profile link',
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );

		
		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Upload vCard', 'cmb2' ),

				'id'         => $prefix . 'vcard',
				'type' => 'file',
				'desc'    => 'Upload Team member vCard file',
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );
		
		
	
	

}

add_action( 'cmb2_admin_init', 'team' );



function inews() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'inews',
		'title'         => esc_html__( 'News Details Link Section::' ),
		'object_types' => array( 'industry_news', ), // post type
	
	) );

		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Read more link ', 'cmb2' ),

				'id'         => $prefix . 'link',
				'type' => 'text',
			
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );

}

add_action( 'cmb2_admin_init', 'inews' );

function press() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'press',
		'title'         => esc_html__( 'News Details Link Section::' ),
		'object_types' => array( 'press', ), // post type
	
	) );

		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Full Article link ', 'cmb2' ),

				'id'         => $prefix . 'link',
				'type' => 'text',
				
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );

		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Upload PDF File', 'cmb2' ),
				'id'         => $prefix . 'pdffile',
				'type' => 'file',
				
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );

}

add_action( 'cmb2_admin_init', 'press' );





function opurtunity() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'opurtinity',
		'title'         => esc_html__( 'Apply Link Section::' ),
		'object_types' => array( 'opportunities', ), // post type
	
	) );

		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Application Link ', 'cmb2' ),

				'id'         => $prefix . 'link',
				'type' => 'text',
				
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );

		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Application Requirement ', 'cmb2' ),

				'id'         => $prefix . 'jobtype',
				'type' => 'radio',
				'options'          => array(
					'standard' =>'Prior Experience',
					'noexperience'   => 'No Prior Experience', 
						),
				'default' => 'standard',

				
				'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a 
			) );


	

}

add_action( 'cmb2_admin_init', 'opurtunity' );



