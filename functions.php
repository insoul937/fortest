<?php

add_action( 'after_setup_theme', 'marhi_theme_setup' );
add_theme_support( 'post-thumbnails' );


if ( ! function_exists( 'marhi_theme_setup' ) ) {

	function marhi_theme_setup() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
        add_image_size('news-thumb-alt', 70, 70, true);
        add_image_size('s-img', 280, 300, true);
        add_image_size('team-thumb', 260, 350, true);
        add_image_size('team-thumb2', 350, 171, true);
        add_image_size('p-gallery-top', 1170, 490, true);
        add_image_size('p-gallery-list', 585, 345, true);
        add_image_size('p-gallery-sing', 637, 425, true);
        add_image_size('bg-image', 1920, 840, true);

		register_nav_menus(
			array(
				'top_menu' => esc_html__( 'Главная Навигация', 'fap' ),
				'footer_first_menu' => esc_html__( 'Первою меню подвал', 'fap' ),
				'footer_second_menu' => esc_html__( 'Второе меню подвал', 'fap' ),
				'footer_third_menu' => esc_html__( 'Третье меню подвал', 'fap' ),
                )
		);
		
		register_sidebar(
			array(
				'name'          => esc_html__( 'Подвал Первый Виджет', 'fap' ),
				'id'            => 'footer_sidebar_first',
				'description'   => '',
				'before_widget' => '<aside id="%1$s" class="widget %2$s primary_widget">',
				'after_widget'  => '</aside>',
				'before_title'  => '<div class="widget_title"><h5>',
				'after_title'   => '</h5></div>',
			)
		);
        register_sidebar(
            array(
                'name'          => esc_html__( 'Подвал Второй Виджет', 'fap' ),
                'id'            => 'footer_sidebar_second',
                'description'   => '',
                'before_widget' => '<aside id="%1$s" class="widget %2$s primary_widget">',
                'after_widget'  => '</aside>',
                'before_title'  => '<div class="widget_title"><h5>',
                'after_title'   => '</h5></div>',
            )
        );
		
		register_sidebar(
			array(
				'name'          => esc_html__( 'Подвал Третий Виджет', 'fap' ),
				'id'            => 'footer_sidebar_third',
				'description'   => '',
				'before_widget' => '<aside id="%1$s" class="widget %2$s secondary_widget">',
				'after_widget'  => '</aside>',
				'before_title'  => '<div class="widget_title"><h5>',
				'after_title'   => '</h5></div>',
			)
		);

	}

}

require_once get_template_directory() . '/inc/scripts-styles.php';
require_once get_template_directory() . '/inc/post_types.php';



if ( ! function_exists( 'splash_pagination' ) ) {
 function splash_pagination() {
  echo paginate_links( array(
   'type'      => 'list',
   'prev_text' => '<i class="fa fa-angle-left"></i>',
   'next_text' => '<i class="fa fa-angle-right"></i>',
  ) );
 }
}




add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
	global $post;

	if (isset($attr['orderby'])) {
		$attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
		if (!$attr['orderby'])
			unset($attr['orderby']);
	}

	extract(shortcode_atts(array(
		'order' => 'ASC',
		'orderby' => 'menu_order ID',
		'id' => $post->ID,
		'itemtag' => 'dl',
		'icontag' => 'dt',
		'captiontag' => 'dd',
		'columns' => 3,
		'size' => 'thumbnail',
		'include' => '',
		'exclude' => ''
	), $attr));

	$id = intval($id);
	if ('RAND' == $order) $orderby = 'none';

	if (!empty($include)) {
		$include = preg_replace('/[^0-9,]+/', '', $include);
		$_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

		$attachments = array();
		foreach ($_attachments as $key => $val) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	}

	if (empty($attachments)) return '';

	// Here's your actual output, you may customize it to your need
	$output = "<div class=\"gallery-container row mb-20px\">\n";

	// Now you loop through each attachment
	foreach ($attachments as $id => $attachment) {
		// Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
		$img = wp_get_attachment_image_src($id, 'full');

		$output .= "<div class=\"gallery-item col-sm-4\">\n";
		$output .= "<a data-lightbox=\"roadtrip\" class=\"fancy\" href=\"{$img[0]}\" >\n";
		$output .= "<img src=\"{$img[0]}\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" />\n";
		$output .= "</a>\n";
		$output .= "</div>\n";
	}

	$output .= "</div>\n";

	return $output;
}
function ono_customize_css() {
	global $zor_option;
	if(isset($zor_option['css_editor'])) {
		echo '<style type="text/css">'.$zor_option['css_editor'].'</style>';} }
add_action( 'wp_head', 'ono_customize_css');
function new_excerpt_more( $more ) {
    $perm = get_the_permalink();
    return "<a href='$perm' class='read-more'><i class='fa fa-play' aria-hidden='true'></i></a>";
}
add_filter('excerpt_more', 'new_excerpt_more');

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
