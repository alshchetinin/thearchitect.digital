<?php
function wordpressify_resources()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false);
	wp_enqueue_script('footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true);
}

add_action('wp_enqueue_scripts', 'wordpressify_resources');

// Customize excerpt word count length
function custom_excerpt_length()
{
	return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function wordpressify_setup()
{
	// Handle Titles
	add_theme_support('title-tag');

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 720, 720, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-image', 1024, 1024, true);
}

add_action('after_setup_theme', 'wordpressify_setup');

show_admin_bar(false);





## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function ($title) {
	return preg_replace('~^[^:]+: ~', '', $title);
});


add_filter('body_class', 'my_neat_body_class');
function my_neat_body_class($classes)
{
	if (is_page('project'))
		$classes[] = 'nav-white';
	if (is_page('team'))
		$classes[] = 'nav-white gray';
	if (is_singular('project'))
		$classes[] = 'nav-def';
	return $classes;
}


function awesome_acf_responsive_image($image_id, $image_size, $max_width)
{

	// check the image ID is not blank
	if ($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url($image_id, $image_size);

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset($image_id, $image_size);

		// generate the markup for the responsive image
		echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
	}
}

function add_class_the_tags($html)
{
	$postid = get_the_ID();
	$html = str_replace('<a', '<a class="tag"', $html);
	return $html;
}
add_filter('the_tags', 'add_class_the_tags');

add_filter('excerpt_more', function ($more) {
	return '...';
});

function text30inm70()
{
	if (!function_exists('acf_register_block'))
		return;
	acf_register_block(array(
		'name'			=> 'text30-img70',
		'title'			=> __('30% текста 70% картинка', 'clientname'),
		'render_template'	=> 'blocks/text30img70.php',
		'category'		=> 'common',
		'icon'			=> 'admin-users',
		'mode'			=> 'Edit',
		'keywords'		=> array('profile', 'user', 'author')
	));
}
add_action('acf/init', 'text30inm70');


function text50img50()
{
	if (!function_exists('acf_register_block'))
		return;
	acf_register_block(array(
		'name'			=> 'text50-img50',
		'title'			=> __('50% текста 50% картинка', 'clientname'),
		'render_template'	=> 'blocks/text50img50.php',
		'category'		=> 'common',
		'icon'			=> 'admin-users',
		'mode'			=> 'Edit',
		'keywords'		=> array('profile', 'user', 'author')
	));
}
add_action('acf/init', 'text50img50');


function flextextandimg()
{
	if (!function_exists('acf_register_block'))
		return;
	acf_register_block(array(
		'name'			=> 'flextextandimg',
		'title'			=> __('flextextandimg', 'clientname'),
		'render_template'	=> 'blocks/flextextandimg.php',
		'category'		=> 'common',
		'icon'			=> 'admin-users',
		'mode'			=> 'Edit',
		'keywords'		=> array('profile', 'user', 'author')
	));
}
add_action('acf/init', 'flextextandimg');