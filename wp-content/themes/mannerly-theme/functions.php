<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	remove_filter( 'the_content', 'wpautop' );
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}

	// Create a function for register_nav_menus()
	function add_wp3menu_support() {
	 
		register_nav_menus(
			array(
			'primary' => __( 'Primary Menu' ),
			'footer-menu' => __( 'Footer Menu' )
			)
		 );

	}
	
	//Add the above function to init hook.
 
	add_action('init', 'add_wp3menu_support');
	
	//Remove more jump link.
	function remove_more_jump_link($link) { 
		$offset = strpos($link, '#more-');
		if ($offset) {
			$end = strpos($link, '"',$offset);
		}
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}
		return $link;
	}
	add_filter('the_content_more_link', 'remove_more_jump_link');
	

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	


	/** page title shortcode **/
	function shortcode_title( ){
   		return get_the_title();
	}
	add_shortcode( 'page_title', 'shortcode_title' );

    
	
	/*add featured image*/	
	
	add_theme_support( 'post-thumbnails' );

    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));


   
	// Show post
	// Use examples:
	/*<?php show_post('about'); ?> // Shows the content of the "About" page.*/
	/*<?php show_post('products/widget1'); ?> // Shows content of the "Products > Widget" page.*/
	function show_post($path) {
		$post = get_page_by_path($path);
		$content = apply_filters('the_content', $post->post_content);
		echo $content;
	}

    include('inc/custom_post_types-inc.php');
?>