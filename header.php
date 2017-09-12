<?php
/**
   * The template for Header.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <?php if (get_theme_mod("zoo_favicon_img")) : ?>
        <link href="<?php echo esc_url(get_theme_mod("zoo_favicon_img")); ?>" rel="icon" type="image/x-icon" />
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="site" class="hfeed site">
    <?php if ( get_header_image() ) : ?>
        <div class="header">
            <div class="header-top" style="background-image:url(<?php header_image(); ?>);">
    <?php else: ?>
        <div class="header">
            <div class="header-top" style="background-image:url(<?php echo get_template_directory_uri() . '/images/header-bg.png'; ?>)">
    <?php endif; ?>
                <div class="overlay"></div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-img">
                    <?php if ((get_theme_mod("zoo_logo_img"))&&(get_theme_mod('zoo_logo_link'))) : ?>
                        <a class="logo_link" href="<?php echo esc_url(get_theme_mod('zoo_logo_link')); ?>">
                            <img id="logo" src="<?php echo esc_url(get_theme_mod("zoo_logo_img")); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                        </a>
                    <?php endif; ?>
                    <?php if ((get_theme_mod("zoo_logo_img"))&&(!get_theme_mod('zoo_logo_link'))) : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img id="logo" src="<?php echo esc_url(get_theme_mod("zoo_logo_img")); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                        </a>
                    <?php endif; ?>
                    <?php if ((!get_theme_mod("zoo_logo_img"))&&(get_theme_mod('zoo_logo_link'))) : ?>
                        <a class="logo_link" href="<?php echo esc_url(get_theme_mod('zoo_logo_link')); ?>">
                            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                        </a>
                    <?php endif; ?>
                    <?php if ((!get_theme_mod("zoo_logo_img"))&&(!get_theme_mod('zoo_logo_link'))) : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                        </a>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-info">
                            <i class="<?php echo esc_attr(get_theme_mod("zoo_adress_icon"));?>"></i>
                            <p><?php echo esc_attr(get_theme_mod("zoo_adress_text"));?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-info">
                            <i class="<?php echo esc_attr(get_theme_mod("zoo_phone_icon"));?>"></i>
                            <p><?php echo esc_attr(get_theme_mod("zoo_phone_text"));?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-info">
                            <i class="<?php echo esc_attr(get_theme_mod("zoo_email_icon"));?>"></i>
                            <p><?php echo esc_attr(get_theme_mod("zoo_email_text"));?></p>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        <a class="top-up" href="#">
            <span class="up"><?php _e( 'UP', 'zoo' ); ?></span>
        </a>
            <div  class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="navbar" class="navbar">
                        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                            <button class="menu-toggle"><i class="fa fa-bars"></i></button>
                            <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'zoo' ); ?>"><?php _e( 'Skip to content', 'zoo' ); ?></a>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                        </nav><!-- #site-navigation -->
                    </div><!-- #navbar -->
                </div>
            </div>
        </div><!-- header -->