<?php

function ajouter_styles() {

wp_enqueue_style(   'style-principale', //identificateur du link css
					get_template_directory_uri() . '/style.css', // l'endroit où se trouve le fichier style.css
					array(), // les fichiers css qui dépendent de styles.css
					filemtime(get_template_directory() . '/style.css') // la version de style.css
				);	
}

add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

/*------------------enregistrement des menus---------------*/ 



	function enregistrement_nav_manu(){
		register_nav_menus( array(
	    	'principal' => 'Menu Principal',
	    	'footer'  => 'Menu Pied De Page',
		) );
	}
	add_action( 'after_setup_theme', 'enregistrement_nav_manu', 0 );

/* ------------------------------------- ???*/
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', 
					array(
						'height' => 150,
						'width'  => 150,
) );
add_theme_support( 'post-thumbnails' );

?>