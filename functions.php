<?php

function ajouter_styles() {

wp_enqueue_style(   'style-principale', //identificateur du link css
					get_template_directory_uri() . '/style.css', // l'endroit où se trouve le fichier style.css
					array(), // les fichiers css qui dépendent de styles.css
					filemtime(get_template_directory() . '/style.css') // la version de style.css
				);

	/*wp_enqueue_style("style-google-font",
	'https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300&family=Ubuntu&display=swap',
	false);*/
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

/*---------------------Modification des choix de menu "cours"-----*/
function personalisation_menu_item_title($title, $item, $args, $depth) {
    // Remplacer 'cours' par l'identifiant de votre menu
    if($args->menu == 'cours') {
// Modifier la longueur du titre en fonction de vos besoins
$sigle = substr($title,0,7);
$title = substr($title,7);
$title = "<code>" . $sigle . "</code>" . "<p>" .wp_trim_words($title, 3, ' ... ') . "</p>"; // on garde uniquement trois mots pourle titre du choix
}
if($args->menu == '4w4'){//ici??
    if (substr($title,0,1) == "0"){$title = substr($title,1);}
}
return $title;
}
add_filter('nav_menu_item_title', 'personalisation_menu_item_title', 10, 4);

/**
 * Pour ajouter la description des événements dans le menu événement
 */
function ajouter_description_class_menu( $items, $args ) {
    // Vérifier si le menu correspondant est celui que vous souhaitez modifier
    if ( 'evenement' === $args->menu ) {
        foreach ( $items as $item ) {
           // var_dump($item);
            // Récupérer le titre, la description et la classe personnalisée
            $titre = $item->title;
            $description = $item->description;
            //$classe = $item->classes; // Remplacer par le nom de la classe souhaitée

            // Ajouter la description et la classe personnalisée à l'élément de menu
            $item->title .= '<span>' . $description . '</span>';
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'ajouter_description_class_menu', 10, 2 );


/* ------------------------------------- add_theme_support()*/
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', 
					array(
						'height' => 100,
						'width'  => 100,
) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if (    $query->is_home()
            && $query->is_main_query()
            && ! is_admin() ) {
      $query->set( 'category_name', 'accueil' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

/*------------------------- Enregistrer le sidebar ------*/
function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Footer 1', '4w4-michelle-sg' ),
        'id' => 'footer_1',
        'description' => __( 'Une zone pour afficher des widgets dans le footer.', '4w4-michelle-sg' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

	register_sidebar( array(
        'name' => __( 'Footer 2', '4w4-michelle-sg' ),
        'id' => 'footer_2',
        'description' => __( 'Une zone pour afficher des widgets dans le footer.', '4w4-michelle-sg' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

	register_sidebar( array(
        'name' => __( 'Footer 3', '4w4-michelle-sg' ),
        'id' => 'footer_3',
        'description' => __( 'Une zone pour afficher des widgets dans le footer.', '4w4-michelle-sg' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'enregistrer_sidebar' );

?>