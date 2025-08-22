<?php
// Allow WebP image uploads in WordPress
function allow_webp_upload($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('mime_types', 'allow_webp_upload');

// Duplicate page
function rd_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('No post to duplicate has been supplied!');
	}
	if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
		return;
	$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
	$post = get_post( $post_id );
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
	if (isset( $post ) && $post != null) {
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
		$new_post_id = wp_insert_post( $args );
		$taxonomies = get_object_taxonomies($post->post_type);
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				if( $meta_key == '_wp_old_slug' ) continue;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Post creation failed, could not find original post: ' . $post_id);
	}
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
function rd_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
	}
	return $actions;
}
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);

// Classic Editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Classic Widgets
function example_theme_support() {
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );

// theme support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'widgets' );
add_theme_support( 'woocommerce' );


// Register menu location
register_nav_menus(array(
	"main_menu" => "Primary Menu",
	"footer_one" => "Footer Menu",
	
));


function mytheme_customize_register( $wp_customize ) {
	// Add a setting for the logo
	$wp_customize->add_setting( 'custom_logo' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );

	// Add a control to upload the logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
		'label'        => __( 'Logo', 'mytheme' ),
		'section'    => 'title_tagline',
		'settings'   => 'custom_logo',
	) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_setup() {
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}

function add_webp_support($mime_types) {
    // Add WebP to the list of allowed mime types
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}
add_filter('upload_mimes', 'add_webp_support');

function enable_webp_display($mime_types) {
    // Ensure WebP images are recognized by the browser
    if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
        $mime_types['webp'] = 'image/webp';
    }
    return $mime_types;
}
add_filter('mime_types', 'enable_webp_display');

function add_svg_support_to_wordpress($mimes) {
    // Add SVG mime type
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_support_to_wordpress');

// Sanitize SVG files on upload
function sanitize_svg_upload($file) {
    if ($file['type'] === 'image/svg+xml') {
        // Check file contents
        $svg_content = file_get_contents($file['tmp_name']);
        
        // Basic SVG sanitization
        if (strpos($svg_content, '<?php') !== false || 
            strpos($svg_content, '<script') !== false) {
            $file['error'] = 'Potentially malicious SVG content detected';
            return $file;
        }
        
        // Optional: Add more sanitization rules
        // Remove potentially dangerous attributes
        $svg_content = preg_replace('/on\w+="[^"]*"/i', '', $svg_content);
        
        // Write sanitized content back to file
        file_put_contents($file['tmp_name'], $svg_content);
    }
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'sanitize_svg_upload');

// Fix SVG display in media library
function fix_svg_display($data, $file, $filename, $mimes) {
    if (!empty($data['ext']) && $data['ext'] === 'svg') {
        $data['type'] = 'image/svg+xml';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_display', 10, 4);

// Add CSS to make SVG thumbnails visible in admin
function svg_admin_css() {
    echo '<style>
        .attachment .thumbnail img[src$=".svg"],
        .media-modal .thumbnail img[src$=".svg"] {
            width: 100%;
            height: auto;
        }
    </style>';
}
add_action('admin_head', 'svg_admin_css');