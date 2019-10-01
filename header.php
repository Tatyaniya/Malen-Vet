<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malen-vet
 */

global $malenvet_options;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="header" id="header">
        <div class="info header__info">
            <div class="container header__container">
                <a href="<?php echo get_option("siteurl"); ?>" class="logo header__logo">
                    <div class="logo__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-h.png" alt="Логотип">
                    </div>
                    <div class="logo__desc">
                        <p class="logo__name">
                            <?php bloginfo( 'name' ); ?>
                        </p>
                        <p class="logo__text">
                            <?php bloginfo( 'description' ); ?>
                        </p>
                    </div>
                </a>
                <?php if($malenvet_options['addr']) { ?>
                    <div class="addr header__addr">
                        <div class="addr__box">
                            <div class="addr__icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-address.png" alt="Иконка">
                            </div>
                            <address class="addr__text">
                                <?php echo $malenvet_options['addr']; ?>
                            </address>
                        </div>
                        <p class="addr__mode">
                            <?php echo $malenvet_options['mode']; ?>
                        </p>
                    </div>
                <?php } ?>
                <div class="phone header__phone">
                    <?php if($malenvet_options['phone11']) { ?>
                        <a href="tel:+38<?php echo $malenvet_options['phone11']; ?>" class="phone__number"><?php echo $malenvet_options['phone11']; ?></a>
                    <?php } ?>
                    <?php if($malenvet_options['phone22']) { ?>
                        <a href="tel:+38<?php echo $malenvet_options['phone22']; ?>" class="phone__number"><?php echo $malenvet_options['phone22']; ?></a>
                    <?php } ?>
                    <?php if($malenvet_options['phone33']) { ?>
                        <a href="tel:+38<?php echo $malenvet_options['phone33']; ?>" class="phone__number"><?php echo $malenvet_options['phone33']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <nav class="menu header__menu" style="background: <?php echo $malenvet_options['opt-color-header']; ?>">
            <div class="humburger">
                <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                    <path
                        class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                    <path
                        class="line middle" d="m 70,50 h -40" />
                    <path
                        class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                </svg>
            </div>
            <div class="menu__vizible">

                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-header',
                        'menu_id'        => 'primary-menu',
                        'menu_class'	 => 'menu__list',
                        'container'		 => ''
                    ) );
                ?>

            </div>
        </nav>
    </header>




