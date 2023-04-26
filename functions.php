<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
?>

<?php
function register_sidebartop() {
    register_sidebar(
	    array(
		    'id'	=> 'sidebartop',
		    'name'	=> __( 'Primary Sidebar' ),
		    'description'=> __( 'xxx'),
		    'before_widget'=> '<div id="%1$s" class="widget %2$s">',
		    'after_widget'=> '</div>',
		    'before_title'=> '<h3 class="sidebar">',
		    'after_title' => '</h3>',
	    )
    );
}
add_action( 'widgets_init', 'register_sidebartop' );
?>

<?php
function register_sidebarbot() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'sidebarbottom',
            'name'          => __( 'Secondary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="sidebar">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'register_sidebarbot' );
?>

<?php
add_filter( 'comment_form_default_fields', 'wc_comment_form_change_cookies' );
function wc_comment_form_change_cookies( $fields ) {
	$commenter = wp_get_current_commenter();

	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	$fields['cookies'] = '<p class="comment-form-cookies-consent form-check"><input class="form-check-input" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label class="form-check-label" for="wp-comment-cookies-consent">'.__('Remember me in this browser.', 'textdomain').'</label></p>';
	return $fields;
}
?>