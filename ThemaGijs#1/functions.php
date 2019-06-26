
<?php 

//connect style.css
function themaGijs_bronnen() {

	wp_enqueue_script('gijs-scripts', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
	wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Montserrat&display=swap');
	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'themaGijs_bronnen');

//registreer menu's van het thema
register_nav_menus(array(
	'hoofdmenu' => __('Hoofd menu'),
	'footermenu' => __('Footer menu'),
));

//registreer/initialiseer widget
function themaGijs_widgets() {

	register_sidebar(array(
		'name' 			=> ('Widget aside'),
		'id'			=> ('widget_aside'),
		'description'	=> ('Here are the widgets for the aside'),
		'before_widget' => '',
		'after_widget'	=> '',
		'before_title'	=> '<h4 class="widgettitle">',
		'after_title'	=> '</h4>'
	));

}
add_action('widgets_init', 'themaGijs_widgets');

?>

