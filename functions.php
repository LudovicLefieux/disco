<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

function disco_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script('jquery' );

    // Déclarer Lottie
    wp_enqueue_script(
        'Lottie',
        'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js',
        array(),
        true
    );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'disco', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

	wp_enqueue_script( 
        'tabs', 
        get_template_directory_uri() . '/js/tabs.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'video modal', 
        get_template_directory_uri() . '/js/video-modal.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'disco',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'reset', 
        get_template_directory_uri() . '/css/reset.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'disco_register_assets' );

// CPT

function disco_register_post_types() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici

    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-portfolio',
	);

	register_post_type( 'portfolio', $args );

    // Déclaration de la Taxonomie
    $labels = array(
        'name' => 'Type de projets',
        'new_item_name' => 'Nom du nouveau Projet',
    	'parent_item' => 'Type de projet parent',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );

    register_taxonomy( 'type-projet', 'portfolio', $args );
}
add_action( 'init', 'disco_register_post_types' );

register_nav_menus( array(
	'main' => 'Menu Principal',
    'connexion' => 'Menu de connexion',
	'footer' => 'Bas de page',
) );