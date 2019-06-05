<?php

function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function wpintfiscal_config(){
    // Registrando os menus
    register_nav_menus( 
        array (
            'my_main_menu' => 'Main Menu'
        )
    );

    $args = array(
        'height' => 520,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $args );
}

add_action( 'after_setup_theme', 'wpintfiscal_config', 0 );

/* Habilitando Widgets 
function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'Rodape',
		'id' => 'rodape_widgets',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );*/ 
