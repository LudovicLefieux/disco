<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="header section">
        <div class="header__container container">
            <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_horizontal.png" class="header__logo" alt="Logo">
            </a>

            <?php wp_nav_menu( 
                array( 
                    'theme_location' => 'main',
                    'container' => 'ul', // afin d'éviter d'avoir une div autour
                    'menu_class' => 'header__menu' // ma classe personnalisée
                    )
                ); 
            ?>

            <?php wp_nav_menu( 
                array( 
                    'theme_location' => 'connexion',
                    'container' => 'ul', // afin d'éviter d'avoir une div autour
                    'menu_class' => 'header__menu header__menu--connexion' // ma classe personnalisée
                    )
                ); 
            ?>
        </div>
    </header>