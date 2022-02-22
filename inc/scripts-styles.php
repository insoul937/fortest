<?php

global $theme_info;
$theme_info = wp_get_theme();
define( 'MARHI_THEME_VERSION', ( WP_DEBUG ) ? time() : $theme_info->get( 'Version' ) );

add_action( 'wp_enqueue_scripts', 'marhi_load_scripts_and_styles' );

if ( ! function_exists( 'marhi_load_scripts_and_styles' ) ) {
	function marhi_load_scripts_and_styles() {

		/* Register Styles */
		wp_register_style( 'marhi_bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_awesome.css', get_template_directory_uri() . '/assets/css/font-awesome.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_youtube.css', get_template_directory_uri() . '/assets/css/YouTubePopUp.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_lightbox.css', get_template_directory_uri() . '/assets/css/lightbox.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_animate.css', get_template_directory_uri() . '/assets/css/animate.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_iconmoon.css', get_template_directory_uri() . '/assets/css/iconmoon.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_style.css', get_template_directory_uri() . '/assets/css/style.min.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_jkit.css', get_template_directory_uri() . '/assets/css/jkit.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_popuplayer.css', get_template_directory_uri() . '/assets/css/slide-out-panel.css', null, MARHI_THEME_VERSION, 'all' );
		wp_register_style( 'marhi_transition.css', get_template_directory_uri() . '/assets/css/transition.css', null, MARHI_THEME_VERSION, 'all' );


		/* Register Scripts */
		wp_register_script( 'marhi_bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_jquery.js', get_template_directory_uri() . '/assets/js/jquery.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_youtube.js', get_template_directory_uri() . '/assets/js/YouTubePopUp.jquery.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_owl.carousel.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_lightbox.js', get_template_directory_uri() . '/assets/js/lightbox.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_jkit.js', get_template_directory_uri() . '/assets/js/jquery.jkit.1.2.16.min.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_fancybox.js', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_popuplayer.js', get_template_directory_uri() . '/assets/js/slide-out-panel.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_masked.js', get_template_directory_uri() . '/assets/js/maskedinput.js', array( 'jquery' ), MARHI_THEME_VERSION, true );
		wp_register_script( 'marhi_scripts.js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), MARHI_THEME_VERSION, true );

		/* Enqueue Styles */
		wp_enqueue_style( 'marhi_bootstrap.min.css' );
		wp_enqueue_style( 'marhi_awesome.css' );
		wp_enqueue_style( 'marhi_youtube.css' );
		wp_enqueue_style( 'marhi_animate.css' );
		wp_enqueue_style( 'marhi_lightbox.css' );
		wp_enqueue_style( 'marhi_jkit.css' );
		wp_enqueue_style( 'marhi_iconmoon.css' );
		wp_enqueue_style( 'marhi_owl.carousel.css' );
		wp_enqueue_style( 'marhi_transition.css' );
		wp_enqueue_style( 'marhi_popuplayer.css' );
        wp_enqueue_style( 'marhi_style.css' );
		wp_enqueue_style( 'marhi_responsive.css' );

		/* Enqueue Scripts */
		wp_enqueue_script( 'marhi_bootstrap.min.js' );
		wp_enqueue_script( 'marhi_youtube.js' );
		wp_enqueue_script( 'marhi_lightbox.js' );
		wp_enqueue_script( 'marhi_jkit.js' );
		wp_enqueue_script( 'marhi_fancybox.js' );
		wp_enqueue_script( 'marhi_owl.carousel.js' );
		wp_enqueue_script( 'marhi_popuplayer.js' );
		wp_enqueue_script( 'marhi_masked.js' );
		wp_enqueue_script( 'marhi_scripts.js' );

	}
}

if ( ! function_exists( 'marhi_load_admin_scripts' ) ) {
	function marhi_load_admin_scripts() {

		// Load Admin Styles
		wp_enqueue_style( 'marhi-admin.css', get_template_directory_uri() . '/assets/css/admin.css', array(), MARHI_THEME_VERSION, 'all' );

	}
}
add_action( 'admin_enqueue_scripts', 'marhi_load_admin_scripts' );
