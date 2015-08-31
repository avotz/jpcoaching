<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jpcoach
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="top" class="top">
    <div class="inner">
        <div class="top__email">
            <a href="mailto::jcortes@jpcoachgroup.com">jcortes@jpcoachgroup.com</a>
        </div>
        <div class="top__social">

             <a href="https://www.facebook.com/gestiondeproyectosjp?fref=ts" class="top__social__link" target="_blank"><i class="icon-facebook"></i></a>
             <a href="https://twitter.com/JPCoachGroup" class="top__social__link" target="_blank"><i class="icon-twitter"></i></a>
             <a href="https://plus.google.com/u/0/115784436326464294306/posts" class="top__social__link" target="_blank"><i class="icon-google-plus"></i></a>
             <a href="skype:jpcoachgroup" class="top__social__link"><i class="icon-skype"></i></a>
                     
        </div>
    </div>
</div>
<header class="header">
                
        <div class="inner">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="J&P Coach Group" class="header__logo__img" /></a>
            
            
            <?php wp_nav_menu( array( 
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
                'container'       => 'nav',
                'container_class' => 'header__menu',
                'container_id'    => '',
                'menu_class'      => 'header__menu__ul',
                 )
            ); ?>
            
           
             <button id="btn-menu" class="header__btn-menu"><i class="icon-menu"></i> Menu</button>
           
        </div>
       
    
</header>
<main class="main">


