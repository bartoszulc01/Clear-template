<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Navigations
 * ------------------------------------------------------------------------
 * This file is for registering your theme's custom navigation areas
 * where various menus can be assigned by site administrators.
 */

if ( ! function_exists( 'wpg_register_navigations' ) ) {
	/**
	 * Registers theme's navigation menus.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function wpg_register_navigations() {
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'wpg' ),
				'footer-general' => esc_html__( 'Footer Menu General', 'wpg' ),
				'footer-about' => esc_html__( 'Footer Menu About', 'wpg' ),
				'footer-legal' => esc_html__( 'Footer Menu Legal', 'wpg' ),
				'sidebar' => esc_html__( 'Sidebar Documents', 'wpg' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'wpg_register_navigations' );

function wootpress_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wootpress' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wootpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'wootpress' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'wootpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'blog-sidebar', 'wootpress' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Add widgets here to appear in your footer.', 'wootpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wootpress_widgets_init' );