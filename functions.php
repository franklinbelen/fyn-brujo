<?php
/**
 * FyN-Portafolio WordPress Theme functions and denitions
 * 
 * @link htttps://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package WordPress
 * @subpackage FyN-Portafolio
 * @since 1.0.0
 * @version 1.0.0
 */


 // Evalua si la función esiste - Buena practica 
 if( !function_exists('fyn_brujo_scripts')):
    function fyn_brujo_scripts (){
        // wp_register_style('fontello-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'all');
        wp_register_style('font-Fjalla-One', 'https://fonts.googleapis.com/css?family=Fjalla+One', array(), '1.0.0', 'all');
        wp_register_style('font-Roboto-Condensed', 'https://fonts.googleapis.com/css?family=Roboto+Condensed', array(), '1.0.0', 'all');        
        wp_register_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
        // wp_enqueue_style('fontello-icons');
        wp_enqueue_style('font-Fjalla-One');
        wp_enqueue_style('font-Roboto-Condensed');
        wp_enqueue_style('style');
        
        wp_register_script('script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('script');
    }
 endif;
 add_action('wp_enqueue_scripts', 'fyn_brujo_scripts');




 //  Activando Imagen Destacada
 if( !function_exists('fyn_brujo_setup') ):
    function fyn_brujo_setup(){
        // https://developer.wordpress.org/reference/functions/add_theme_support
        add_theme_support('post-thumbnails');

        // Activando HTML5
        add_theme_support( 'html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        ));

        // Logo personalizable
        add_theme_support( 'custom-logo', array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true
        ) );
    }
 endif;
 add_action( 'after_setup_theme', 'fyn_brujo_setup' );


  //  Activando Menu de Navegación Principal
  if( !function_exists('fyn_brujo_menus')):
    function fyn_brujo_menus(){
        register_nav_menus( array(
            'main_menu' => __('Menú Principal', 'fyn-portafolio')
        ) );
    }
  endif;
  add_action('init', 'fyn_brujo_menus');