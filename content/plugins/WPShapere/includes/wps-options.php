<?php

	//generate wpshapere options
	$this->wpshapereOptions = TitanFramework::getInstance( 'wpshapere' );
	
	$blog_email = get_option('admin_email');
	$blog_from_name = get_option('blogname');
	$wps_options = unserialize(get_option('wpshapere_options'));
	//get all admin users
	$user_query = new WP_User_Query( array( 'role' => 'Administrator' ) );
	if ( ! empty( $user_query->results ) ) {
		foreach ( $user_query->results as $user ) {
			$admin_users[$user->ID] = $user->display_name;
		}
	}
	
	$wpshapePanel = $this->wpshapereOptions->createAdminPanel( array(
		'name' => 'WPSHAPERE Options',
		'title' => 'WPSHAPERE Plugin',
		'icon' => 'dashicons-art',
		'capability' => 'administrator',
	) );
	
	$generalTab = $wpshapePanel->createTab( array(
		'name' => __( 'General', 'wps' ),
		'id' => 'general_options',
	));
	
	$loginTab = $wpshapePanel->createTab( array(
		'name' => __( 'Login Page', 'wps' ),
		'id' => 'login_options',
	));
	$dashTab = $wpshapePanel->createTab( array(
		'name' => __( 'Dashboard', 'wps' ),
		'id' => 'dash_options',
	));
	$adminbarTab = $wpshapePanel->createTab( array(
		'name' => __( 'Adminbar', 'wps' ),
		'id' => 'adminbar_options',
	));
	$adminTab = $wpshapePanel->createTab( array(
		'name' => __( 'Admin Pages', 'wps' ),
		'id' => 'admin_options',
	));
	$footerTab = $wpshapePanel->createTab( array(
		'name' => __( 'Footer', 'wps' ),
		'id' => 'footer_options',
	));
	$emailsTab = $wpshapePanel->createTab( array(
		'name' => __( 'Email Settings', 'wps' ),
		'id' => 'email_options',
	));
	
	
	
	//AdminTab Options
	$adminTab->createOption( array(
		'name' => __( 'Admin Menu Color options', 'wps' ),
		'type' => 'heading',
	) );

	$adminTab->createOption( array(
		'name' => __( 'Background color', 'wps' ),
		'id' => 'bg_color',
		'type' => 'color',
		'default' => '#e3e7ea',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Left menu wrap color', 'wps' ),
		'id' => 'nav_wrap_color',
		'type' => 'color',
		'default' => '#1b2831',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Submenu wrap color', 'wps' ),
		'id' => 'sub_nav_wrap_color',
		'type' => 'color',
		'default' => '#22303a',
	) );	
	$adminTab->createOption( array(
		'name' => __( 'Menu hover color', 'wps' ),
		'id' => 'hover_menu_color',
		'type' => 'color',
		'default' => '#3f4457',
	) );	
	$adminTab->createOption( array(
		'name' => __( 'Current active Menu color', 'wps' ),
		'id' => 'active_menu_color',
		'type' => 'color',
		'default' => '#6da87a',
	) );	
	$adminTab->createOption( array(
		'name' => __( 'Menu text color', 'wps' ),
		'id' => 'nav_text_color',
		'type' => 'color',
		'default' => '#90a1a8',
	) );	
	$adminTab->createOption( array(
		'name' => __( 'Menu hover text color', 'wps' ),
		'id' => 'menu_hover_text_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Updates Count notification background', 'wps' ),
		'id' => 'menu_updates_count_bg',
		'type' => 'color',
		'default' => '#212121',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Updates Count text color', 'wps' ),
		'id' => 'menu_updates_count_text',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Primary button colors', 'wps' ),
		'type' => 'heading',
	) );	
	$adminTab->createOption( array(
		'name' => __( 'Button background  color', 'wps' ),
		'id' => 'pry_button_color',
		'type' => 'color',
		'default' => '#7ac600',
	) );
	if(isset($wps_options['design_type']) && $wps_options['design_type'] != 1) {
		$adminTab->createOption( array(
			'name' => __( 'Button border color', 'wps' ),
			'id' => 'pry_button_border_color',
			'type' => 'color',
			'default' => '#86b520',
		) );
		$adminTab->createOption( array(
			'name' => __( 'Button shadow color', 'wps' ),
			'id' => 'pry_button_shadow_color',
			'type' => 'color',
			'default' => '#98ce23',
		) );
	}
	$adminTab->createOption( array(
		'name' => __( 'Button text color', 'wps' ),
		'id' => 'pry_button_text_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Button hover background color', 'wps' ),
		'id' => 'pry_button_hover_color',
		'type' => 'color',
		'default' => '#29ac39',
	) );
	if(isset($wps_options['design_type']) && $wps_options['design_type'] != 1) {
		$adminTab->createOption( array(
			'name' => __( 'Button hover border color', 'wps' ),
			'id' => 'pry_button_hover_border_color',
			'type' => 'color',
			'default' => '#259633',
		) );
		$adminTab->createOption( array(
			'name' => __( 'Button hover shadow color', 'wps' ),
			'id' => 'pry_button_hover_shadow_color',
			'type' => 'color',
			'default' => '#3d7a0c',
		) );
	}
	$adminTab->createOption( array(
		'name' => __( 'Button hover text color', 'wps' ),
		'id' => 'pry_button_hover_text_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Secondary button colors', 'wps' ),
		'type' => 'heading',
	) );	
	$adminTab->createOption( array(
		'name' => __( 'Button background color', 'wps' ),
		'id' => 'sec_button_color',
		'type' => 'color',
		'default' => '#ced6c9',
	) );
	if(isset($wps_options['design_type']) && $wps_options['design_type'] != 1) {
		$adminTab->createOption( array(
			'name' => __( 'Button border color', 'wps' ),
			'id' => 'sec_button_border_color',
			'type' => 'color',
			'default' => '#bdc4b8',
		) );
		$adminTab->createOption( array(
			'name' => __( 'Button shadow color', 'wps' ),
			'id' => 'sec_button_shadow_color',
			'type' => 'color',
			'default' => '#dde5d7',
		) );
	}
	$adminTab->createOption( array(
		'name' => __( 'Button text color', 'wps' ),
		'id' => 'sec_button_text_color',
		'type' => 'color',
		'default' => '#7a7a7a',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Button hover background color', 'wps' ),
		'id' => 'sec_button_hover_color',
		'type' => 'color',
		'default' => '#c9c8bf',
	) );
	if(isset($wps_options['design_type']) && $wps_options['design_type'] != 1) {
		$adminTab->createOption( array(
			'name' => __( 'Button hover border color', 'wps' ),
			'id' => 'sec_button_hover_border_color',
			'type' => 'color',
			'default' => '#babab0',
		) );
		$adminTab->createOption( array(
			'name' => __( 'Button hover shadow color', 'wps' ),
			'id' => 'sec_button_hover_shadow_color',
			'type' => 'color',
			'default' => '#9ea59b',
		) );
	}
	$adminTab->createOption( array(
		'name' => __( 'Button hover text color', 'wps' ),
		'id' => 'sec_button_hover_text_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );	
	
	$adminTab->createOption( array(
		'name' => __( 'Add New button', 'wps' ),
		'type' => 'heading',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Button background color', 'wps' ),
		'id' => 'addbtn_bg_color',
		'type' => 'color',
		'default' => '#53D860',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Button hover background color', 'wps' ),
		'id' => 'addbtn_hover_bg_color',
		'type' => 'color',
		'default' => '#5AC565',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Button text color', 'wps' ),
		'id' => 'addbtn_text_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Button hover text color', 'wps' ),
		'id' => 'addbtn_hover_text_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	
	$adminTab->createOption( array(
		'name' => __( 'Metabox Colors', 'wps' ),
		'type' => 'heading',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Metabox header box', 'wps' ),
		'id' => 'metabox_h3_color',
		'type' => 'color',
		'default' => '#bdbdbd',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Metabox header box border', 'wps' ),
		'id' => 'metabox_h3_border_color',
		'type' => 'color',
		'default' => '#9e9e9e',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Metabox header Click button color', 'wps' ),
		'id' => 'metabox_handle_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Metabox header Click button hover color', 'wps' ),
		'id' => 'metabox_handle_hover_color',
		'type' => 'color',
		'default' => '#949494',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Metabox header text color', 'wps' ),
		'id' => 'metabox_text_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	
	$adminTab->createOption( array(
		'name' => __( 'Message box (Post/Page updates)', 'wps' ),
		'type' => 'heading',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Message box color', 'wps' ),
		'id' => 'msg_box_color',
		'type' => 'color',
		'default' => '#02c5cc',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Message text color', 'wps' ),
		'id' => 'msgbox_text_color',
		'type' => 'color',
		'default' => '#ffffff',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Message box border color', 'wps' ),
		'id' => 'msgbox_border_color',
		'type' => 'color',
		'default' => '#007e87',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Message link color', 'wps' ),
		'id' => 'msgbox_link_color',
		'type' => 'color',
		'default' => '#efefef',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Message link hover color', 'wps' ),
		'id' => 'msgbox_link_hover_color',
		'type' => 'color',
		'default' => '#e5e5e5',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Custom CSS', 'wps' ),
		'type' => 'heading',
	) );
	$adminTab->createOption( array(
		'name' => __( 'Custom CSS for Admin pages', 'wps' ),
		'id' => 'admin_page_custom_css',
		'type' => 'textarea',
	) );
	
	
	$adminTab->createOption( array(
		'type' => 'save'
	) );
	
	//AdminBar Options
	$adminbarTab->createOption( array(
		'name' => __( 'Upload Logo', 'wps' ),
		'id' => 'admin_logo',
		'type' => 'upload',
		'desc' => __( 'Image to be displayed in all pages. Maximum size 200x50 pixels.', 'wps' ),
	) );
	
	$adminbarTab->createOption( array(
		'name' => __( 'Move logo Top by', 'wps' ),
		'id' => 'logo_top_margin',
		'type' => 'number',
		'desc' => __( "Can be used in case of logo position haven't matched the menu position.", 'wps' ),
		'default' => '0',
		'max' => '20',
	) );
	
	$adminbarTab->createOption( array(
		'name' => __( 'Move logo Bottom by', 'wps' ),
		'id' => 'logo_bottom_margin',
		'type' => 'number',
		'desc' => __( "Can be used in case of logo position haven't matched the menu position.", 'wps' ),
		'default' => '0',
		'max' => '20',
	) );
	
	$adminbarTab->createOption( array(
		'name' => __( 'Admin bar color', 'wps' ),
		'id' => 'admin_bar_color',
		'type' => 'color',
		'default' => '#fff',
	) );
	
	$adminbarTab->createOption( array(
		'name' => __( 'Admin bar menu color', 'wps' ),
		'id' => 'admin_bar_menu_color',
		'type' => 'color',
		'default' => '#94979B',
	) );
	
	$adminbarTab->createOption( array(
		'name' => __( 'Admin bar menu hover color', 'wps' ),
		'id' => 'admin_bar_menu_hover_color',
		'type' => 'color',
		'default' => '#474747',
	) );
	
	$adminbarTab->createOption( array(
		'name' => __( 'Remove Unwanted Menus', 'wps' ),
		'id' => 'hide_admin_bar_menus',
		'type' => 'multicheck',
		'desc' => __( 'Select menu items to remove.', 'wps' ),
		'options' => array(
			'1' => __( 'Site Name', 'wps' ),
			'2' => __( 'Updates', 'wps' ),					
			'3' => __( 'Comments', 'wps' ),
			'4' => __( 'New Content', 'wps' ),
			'5' => __( 'Edit Profile', 'wps' ),
			'6' => __( 'My account', 'wps' ),
			'7' => __( 'WordPress Logo', 'wps' ),
		),
		'default' => array( '3', '4', '7' ),
	) );
	
	$adminbarTab->createOption( array(
		'type' => 'save'
	) );
	
	//Login Page Options
	$loginTab->createOption( array(
		'name' => __( 'Background color', 'wps' ),
		'id' => 'login_bg_color',
		'type' => 'color',
		'default' => '#292931',
	) );

	$loginTab->createOption( array(
		'name' => __( 'Background image', 'wps' ),
		'id' => 'login_bg_img',
		'type' => 'upload',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Background Repeat', 'wps' ),
		'id' => 'login_bg_img_repeat',
		'type' => 'checkbox',
		'desc' => __( 'Check to repeat', 'wps' ),
		'default' => true,
	) );	
	$loginTab->createOption( array(
		'name' => __( 'Scale background image', 'wps' ),
		'id' => 'login_bg_img_scale',
		'type' => 'checkbox',
		'desc' => __( 'Scale image to fit Screen size.', 'wps' ),
		'default' => true,
	) );
	$loginTab->createOption( array(
		'name' => __( 'Login Form Top margin', 'wps' ),
		'id' => 'login_form_margintop',
		'type' => 'number',
		'default' => '100',
		'min' => '0',
		'max' => '700',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Login Form Width in %', 'wps' ),
		'id' => 'login_form_width',
		'type' => 'number',
		'default' => '30',
		'min' => '20',
		'max' => '100',
	) );

	$loginTab->createOption( array(
	'name' => __( 'Upload Logo', 'wps' ),
	'id' => 'admin_login_logo',
	'type' => 'upload',
	'desc' => __( 'Image to be displayed on login page. Maximum width should be under 450pixels.', 'wps' ),
	) );

	$loginTab->createOption( array(
		'name' => __( 'Resize Logo?', 'wps' ),
		'id' => 'admin_logo_resize',
		'type' => 'checkbox',
		'default' => false,
		'desc' => __( 'Select to resize logo size.', 'wps' ),
	) );
	$loginTab->createOption( array(
		'name' => __( 'Set Logo size in %', 'wps' ),
		'id' => 'admin_logo_size_percent',
		'type' => 'number',
		'default' => '1',
		'max' => '100',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Logo Height', 'wps' ),
		'id' => 'admin_logo_height',
		'type' => 'number',
		'default' => '50',
		'max' => '150',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Logo url', 'wps' ),
		'id' => 'login_logo_url',
		'type' => 'text',
		'default' => get_bloginfo('url'),
	) );
	$loginTab->createOption( array(
		'name' => __( 'Transparent Form', 'wps' ),
		'id' => 'login_divbg_transparent',
		'type' => 'checkbox',
		'default' => false,
		'desc' => __( 'Select to show transparent form background.', 'wps' ),
	) );
	$loginTab->createOption( array(
		'name' => __( 'Login div bacground color', 'wps' ),
		'id' => 'login_divbg_color',
		'type' => 'color',
		'default' => '#f5f5f5',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Login form bacground color', 'wps' ),
		'id' => 'login_formbg_color',
		'type' => 'color',
		'default' => '#423143',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Form border color', 'wps' ),
		'id' => 'form_border_color',
		'type' => 'color',
		'default' => '#e5e5e5',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Form text color', 'wps' ),
		'id' => 'form_text_color',
		'type' => 'color',
		'default' => '#cccccc',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Form link color', 'wps' ),
		'id' => 'form_link_color',
		'type' => 'color',
		'default' => '#777777',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Form link hover color', 'wps' ),
		'id' => 'form_link_hover_color',
		'type' => 'color',
		'default' => '#555555',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Hide Back to blog link', 'wps' ),
		'id' => 'hide_backtoblog',
		'type' => 'checkbox',
		'default' => false,
		'desc' => __( 'select to hide', 'wps' ),
	) );
	$loginTab->createOption( array(
		'name' => __( 'Hide Remember me', 'wps' ),
		'id' => 'hide_remember',
		'type' => 'checkbox',
		'default' => false,
		'desc' => __( 'select to hide', 'wps' ),
	) );
	$loginTab->createOption( array(
		'name' => __( 'Custom Footer content', 'wps' ),
		'id' => 'login_footer_content',
		'type' => 'editor',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Custom CSS', 'wps' ),
		'type' => 'heading',
	) );
	$loginTab->createOption( array(
		'name' => __( 'Custom CSS for Login page', 'wps' ),
		'id' => 'login_custom_css',
		'type' => 'textarea',
	) );
	
	$loginTab->createOption( array(
		'type' => 'save'
	) );
	
	$generalTab->createOption( array(
		'name' => __( 'General options', 'wps' ),
		'type' => 'heading',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Choose design type', 'wps' ),
		'id' => 'design_type',
		'type' => 'radio',
		'options' => array(
			'1' => __( 'Flat design', 'wps' ),
			'2' => __( 'Default design', 'wps' ),
		),
		'default' => '1',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Heading H1 color', 'wps' ),
		'id' => 'h1_color',
		'type' => 'color',
		'default' => '#333333',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Heading H2 color', 'wps' ),
		'id' => 'h2_color',
		'type' => 'color',
		'default' => '#222222',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Heading H3 color', 'wps' ),
		'id' => 'h3_color',
		'type' => 'color',
		'default' => '#222222',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Heading H4 color', 'wps' ),
		'id' => 'h4_color',
		'type' => 'color',
		'default' => '#555555',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Heading H5 color', 'wps' ),
		'id' => 'h5_color',
		'type' => 'color',
		'default' => '#555555',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Heading H6 color', 'wps' ),
		'id' => 'h6_color',
		'type' => 'color',
		'default' => '#555555',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Remove unwanted items', 'wps' ),
		'id' => 'admin_generaloptions',
		'type' => 'multicheck',
		'desc' => __( 'Select whichever you want to remove.', 'wps' ),
		'options' => array(
			'1' => __( 'Wordpress Help tab.', 'wps' ),					
			'2' => __( 'Screen Options.', 'wps' ),
			'3' => __( 'Wordpress update notifications.', 'wps' ),
		),
	) );
	$generalTab->createOption( array(
		'name' => __( 'Disable automatic updates', 'wps' ),
		'id' => 'disable_auto_updates',
		'type' => 'checkbox',
		'desc' => __( 'Select to disable all automatic background updates.', 'wps' ),
		'default' => false,
	) );
	$generalTab->createOption( array(
		'name' => __( 'Disable update emails', 'wps' ),
		'id' => 'disable_update_emails',
		'type' => 'checkbox',
		'desc' => __( 'Select to disable emails regarding automatic updates.', 'wps' ),
		'default' => false,
	) );
	$generalTab->createOption( array(
		'name' => __( 'Hide Admin bar', 'wps' ),
		'id' => 'hide_admin_bar',
		'type' => 'checkbox',
		'desc' => __( 'Select to hideadmin bar on frontend.', 'wps' ),
		'default' => false,
	) );
	$generalTab->createOption( array(
		'name' => __( 'Hide Color picker from user profile', 'wps' ),
		'id' => 'hide_profile_color_picker',
		'type' => 'checkbox',
		'desc' => __( 'Select to hide Color picker from user profile.', 'wps' ),
		'default' => false,
	) );
	
	$generalTab->createOption( array(
		'name' => __( 'Menu Customization options', 'wps' ),
		'type' => 'heading',
	) );
	$generalTab->createOption( array(
		'name' => __( 'Menu display', 'wps' ),
		'id' => 'show_all_menu_to_admin',
		'type' => 'radio',
		'options' => array(
			'1' => __( 'Show all Menu links to all admin users', 'wps' ),
			'2' => __( 'Show all Menu links to specific admin users', 'wps' ),
		),
	) );
	$generalTab->createOption( array(
		'name' => __( 'Select Privilege users', 'wps' ),
		'id' => 'privilege_users',
		'type' => 'multicheck',
		'desc' => __( 'Select admin users who can have access to all menu items.', 'wps' ),
		'options' => $admin_users,
	) );
	$generalTab->createOption( array(
		'type' => 'save'
	) );
	
	$dashTab->createOption( array(
		'name' => __( 'Remove unwanted Widgets', 'wps' ),
		'id' => 'remove_dash_widgets',
		'type' => 'multicheck',
		'desc' => __( 'Select whichever you want to remove.', 'wps' ),
		'options' => array(
			'1' => __( 'Welcome panel', 'wps' ),					
			'2' => __( 'Right now', 'wps' ),
			'3' => __( 'Recent activity', 'wps' ),
			'4' => __( 'Incoming links', 'wps' ),
			'5' => __( 'Plugins', 'wps' ),
			'6' => __( 'Quick press', 'wps' ),
			'7' => __( 'Recent drafts', 'wps' ),
			'8' => __( 'Wordpress news', 'wps' ),
			'9' => __( 'Wordpress blog', 'wps' ),
			'10' => __( 'bbPress', 'wps' ),
			'11' => __( 'Yoast seo', 'wps' ),
			'12' => __( 'Gravity forms', 'wps' ),
		),
		'default' => array( '8', '9' ),
	) );	
	$dashTab->createOption( array(
		'name' => __( 'Create New Widgets', 'wps' ),
		'type' => 'heading',
	) );
	$dashTab->createOption( array(
		'type' => 'note',
		'desc' => __( 'Widget 1', 'wps' ),
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Type', 'wps' ),
		'id' => 'wps_widget_1_type',
		'options' => array(
                                            '1' => __( 'RSS Feed', 'wps' ),
                                            '2' => __( 'Text Content', 'wps' ),
		),
		'type' => 'radio',
		'default' => '1',
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Position', 'wps' ),
		'id' => 'wps_widget_1_position',
		'options' => array(
                                            'normal' => __( 'Left', 'wps' ),
                                            'side' => __( 'Right', 'wps' ),
		),
		'type' => 'select',
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Title', 'wps' ),
		'id' => 'wps_widget_1_title',
		'type' => 'text',
	) );
	$dashTab->createOption( array(
		'name' => __( 'RSS Feed url', 'wps' ),
		'id' => 'wps_widget_1_rss',
		'type' => 'text',
		'desc' => __( 'Put your RSS feed url here if you want to show your own RSS feeds. Otherwise fill your static contents in the below editor.', 'wps' ),
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Content', 'wps' ),
		'id' => 'wps_widget_1_content',
		'type' => 'editor',
	) );
	
	$dashTab->createOption( array(
		'type' => 'note',
		'desc' => __( 'Widget 2', 'wps' ),
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Type', 'wps' ),
		'id' => 'wps_widget_2_type',
		'options' => array(
                                            '1' => __( 'RSS Feed', 'wps' ),
                                            '2' => __( 'Text Content', 'wps' ),
		),
		'type' => 'radio',
		'default' => '1',
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Position', 'wps' ),
		'id' => 'wps_widget_2_position',
		'options' => array(
                                            'normal' => __( 'Left', 'wps' ),
                                            'side' => __( 'Right', 'wps' ),
		),
		'type' => 'select',
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Title', 'wps' ),
		'id' => 'wps_widget_2_title',
		'type' => 'text',
	) );
	$dashTab->createOption( array(
		'name' => __( 'RSS Feed url', 'wps' ),
		'id' => 'wps_widget_2_rss',
		'type' => 'text',
		'desc' => __( 'Put your RSS feed url here if you want to show your own RSS feeds. Otherwise fill your static contents in the below editor.', 'wps' ),
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Content', 'wps' ),
		'id' => 'wps_widget_2_content',
		'type' => 'editor',
	) );
	
	$dashTab->createOption( array(
		'type' => 'note',
		'desc' => __( 'Widget 3', 'wps' ),
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Type', 'wps' ),
		'id' => 'wps_widget_3_type',
		'options' => array(
                                            '1' => __( 'RSS Feed', 'wps' ),
                                            '2' => __( 'Text Content', 'wps' ),
		),
		'type' => 'radio',
		'default' => '1',
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Position', 'wps' ),
		'id' => 'wps_widget_3_position',
		'options' => array(
                                            'normal' => __( 'Left', 'wps' ),
                                            'side' => __( 'Right', 'wps' ),
		),
		'type' => 'select',
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Title', 'wps' ),
		'id' => 'wps_widget_3_title',
		'type' => 'text',
	) );
	$dashTab->createOption( array(
		'name' => __( 'RSS Feed url', 'wps' ),
		'id' => 'wps_widget_3_rss',
		'type' => 'text',
		'desc' => __( 'Put your RSS feed url here if you want to show your own RSS feeds. Otherwise fill your static contents in the below editor.', 'wps' ),
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Content', 'wps' ),
		'id' => 'wps_widget_3_content',
		'type' => 'editor',
	) );
	
	$dashTab->createOption( array(
		'type' => 'note',
		'desc' => __( 'Widget 4', 'wps' ),
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Type', 'wps' ),
		'id' => 'wps_widget_4_type',
		'options' => array(
                                            '1' => __( 'RSS Feed', 'wps' ),
                                            '2' => __( 'Text Content', 'wps' ),
		),
		'type' => 'radio',
		'default' => '1',
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Position', 'wps' ),
		'id' => 'wps_widget_4_position',
		'options' => array(
                                            'normal' => __( 'Left', 'wps' ),
                                            'side' => __( 'Right', 'wps' ),
		),
		'type' => 'select',
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Title', 'wps' ),
		'id' => 'wps_widget_4_title',
		'type' => 'text',
	) );
	$dashTab->createOption( array(
		'name' => __( 'RSS Feed url', 'wps' ),
		'id' => 'wps_widget_4_rss',
		'type' => 'text',
		'desc' => __( 'Put your RSS feed url here if you want to show your own RSS feeds. Otherwise fill your static contents in the below editor.', 'wps' ),
	) );
	$dashTab->createOption( array(
		'name' => __( 'Widget Content', 'wps' ),
		'id' => 'wps_widget_4_content',
		'type' => 'editor',
	) );

	$dashTab->createOption( array(
		'type' => 'save'
	) );
	
	$footerTab->createOption( array(
		'name' => __( 'Footer Text', 'wps' ),
		'id' => 'admin_footer_txt',
		'type' => 'editor',
		'desc' => __( 'Put any text you want to show on admin footer.', 'wps' ),
	) );
	$footerTab->createOption( array(
		'type' => 'save'
	) );

	$emailsTab->createOption( array(
		'name' => __( 'White Label emails', 'wps' ),
		'id' => 'email_settings',
		'options' => array(
		'3' => __( 'Disable White Label emails', 'wps' ),
		'1' => sprintf( __( 'Set Email address as <strong> %1$s </strong> From name as <strong> %2$s', 'wps' ), $blog_email, $blog_from_name ),
		'2' => __( 'Set different', 'wps' ),
		),
		'type' => 'radio',
		'default' => '1',
	) );
	$emailsTab->createOption( array(
		'name' => __( 'Email From address', 'wps' ),
		'id' => 'email_from_addr',
		'type' => 'text',
		'desc' => __( 'Enter valid email address', 'wps' ),
	) );
	$emailsTab->createOption( array(
		'name' => __( 'Email From name', 'wps' ),
		'id' => 'email_from_name',
		'type' => 'text',
	) );
	$emailsTab->createOption( array(
		'type' => 'save',
	) );
	
	
