
<?php 

//connect style.css
function themaGijs_bronnen() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'themaGijs_bronnen');

//registreer menu's van het thema
register_nav_menus(array(
	'hoofdmenu' => __('Hoofd menu'),
	'footermenu' => __('Footer menu'),
));

?>

