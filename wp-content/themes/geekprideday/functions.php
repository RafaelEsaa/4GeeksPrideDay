<?php

if(!defined('ABSPATH')) define('ABSPATH', dirname(__FILE__) . '/');
if(!defined('PUBLICPATH')) define('PUBLICPATH', get_site_url());
require ABSPATH . 'vendor/autoload.php';
use PostTypes\PostType;

//Creacion y registro de menu
function register_my_menus(){
    register_nav_menus(
        array(
            'top-menu' => __('Menu Header'),
        )
    );
}
add_action('init', 'register_my_menus');

// Registro archivo js (scss, js)
function add_theme_scripts() {
    
    wp_register_script('bundle', get_template_directory_uri() . '/public/bundle.js', array(),'1.1', true);
    wp_enqueue_script('bundle');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Creacion de Custom Post Type
$namesAbout = [
    'name' => 'about us',
    'singular' => 'About Us',
    'plural' => 'About Us',
    'slug' => 'about-us'
];
$aboutUs = new PostType($namesAbout);
$aboutUs->register();

$namesContactUs = [
    'name' => 'contact us',
    'singular' => 'Contact Us',
    'plural' => 'Contact Us',
    'slug' => 'contact-us'
];
$contactUs = new PostType($namesContactUs);
$contactUs->register();

$namesFooter = [
    'name' => 'footer',
    'singular' => 'Footer',
    'plural' => 'Footer',
    'slug' => 'footer'
];
$footer = new PostType($namesFooter);
$footer->register();

$namesBanner = [
    'name' => 'bannerprincipal',
    'singular' => 'Banner Principal',
    'plural' => 'Banner Principal',
    'slug' => 'banner-principal'
];
$banner = new PostType($namesBanner);
$banner->register();

$gfManager = new \WPAS\GravityForm\WPASGravityForm([
    // if true you can add CSS classes to the submit form
    'submit-button-class' => true, 
    
    //if true it will prepare the inputs for boptstrap
    'bootstrap4-styles' => false, 
]);