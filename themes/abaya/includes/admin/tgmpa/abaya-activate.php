<?php
/**
 * Include the TGM_Plugin_Activation class.
 * Register the required plugins for this theme.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'abaya_register_required_plugins' );
function abaya_register_required_plugins() {
	$plugins = array(
	    array(
			'name'     				=> esc_html__('WooCommerce', 'abaya'), // The plugin name
			'slug'     				=> 'woocommerce', // The plugin slug (typically the folder name)
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'force_activation' 		        => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
		
		),
		array(
			'name'     				=> esc_html__('Contact Form 7', 'abaya'), // The plugin name
			'slug'     				=> 'contact-form-7', // The plugin slug (typically the folder name)
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '4.5.3',
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		),array(
			'name'     				=> esc_html__('Color Filters for WooCommerce', 'abaya'), // The plugin name
			'slug'     				=> 'color-filters', // The plugin slug (typically the folder name)
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '4.5.3',
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		)
	);
	$theme_text_domain = 'abaya';
	$config = array(
		'domain'       		=> 'abaya',         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		/*'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins','abaya'),
			'menu_title'                       			=> __( 'Install Plugins','abaya'),
			'installing'                       			=> __( 'Installing Plugin: %s','abaya'), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.','abaya'),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.','abaya'),
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugins, they add extra features to the theme options and content controls: %1$s. enjoy:)', 'This theme recommends the following plugins, they add extra features to the theme options and content controls: %1$s. enjoy:)','abaya'), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' , 'abaya'), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' , 'abaya'), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.','abaya'), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' , 'abaya'), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' , 'abaya'), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' , 'abaya'), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'abaya'),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins','abaya'),
			'return'                           			=> __( 'Return to Required Plugins Installer','abaya'),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.','abaya'),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s','abaya'), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)*/
	);

	tgmpa( $plugins, $config );
}
?>