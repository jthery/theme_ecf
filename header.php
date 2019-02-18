<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title><?php wp_title(); ?></title>
        <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/icons8-bulle.svg" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <!--banner + button-->
    <header>
        <div class="overlay">
            <h1>BeautyByMarine.com</h1>
            <h3>La beauté n'a pas d'âge !</h3>
            <br>
            <button>Je réserve !</button>
        </div>
    </header>
    <!--end banner + button-->
    <!--navbar-->
    <div class="mainnavbar">
        <div class="navbar">
            <a href="index.html">Accueil</a>
            <a class="transition-prestations" href="#container-prestations">Prestations</a>
            <a href="#">Avis clients</a>
            <a href="contact.html">Contact</a>
        </div>
    </div>
    <!-- end navbar-->
<?php
// configuration du menu WP_Bootstrap_Navwalker
wp_nav_menu([
    'theme_location'    => 'main-menu', // le nom de l'emplacement du menu doit être défini dans le fichier `functions.php`
    'depth'             => 2, // 1 = sans menu déroulant, 2 = avec menu déroulant
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'my-theme-navbar-collapse', // si vous changez ce `container_id`, changez-le aussi change les attributs `data-target` et `aria-controls` de la balise `button` ci-dessus
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
]);
?>
            </div>
        </nav>

        <section class="content">
