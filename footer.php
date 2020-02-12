<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malen-vet
 */

global $malenvet_options;

?>

    <section class="for-arrow">
        <a href="#header" class="for-arrow__link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/upup.png" alt="наверх">
        </a>
    </section>
    <footer class="footer" id="footer" style="background: <?php echo $malenvet_options['opt-color-footer']; ?>">
        <div class="container footer__container">
            <div class="footer__row">
                <a href="<?php echo get_option("siteurl"); ?>" class="logo footer__logo">
                    <div class="logo__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-f.png" alt="Логотип">
                    </div>
                    <div class="logo__desc">
                        <p class="logo__name">
                            <?php bloginfo( 'name' ); ?>
                        </p>
                    </div>
                </a>
                <div class="social">
                    <a href="https://www.instagram.com/vetclinik_malenvet/" class="social__link" target="_blank">
                        <div class="social__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/in.png" alt="instagram">
                        </div>
                        <div class="social__text">
                            Мы в Instagram
                        </div>
                    </a>
                </div>
                <?php if($malenvet_options['mode-f']) { ?>
                    <div class="mode">
                        <p class="mode__text">
                            <?php echo $malenvet_options['mode-f']; ?>
                            
                        </p>
                    </div>
                <?php } ?>
                <div class="phone footer__phone">
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
            <div class="footer__row">
                <div class="dev">
                    Разработка сайта 
                    <a href="http://tatyaniya.com/" class="dev__link" target="_blank">tatyaniya.com</a>
                </div>
                <nav class="footer-menu">

                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-footer',
                            'menu_id'        => 'footer-menu',
                            'menu_class'	 => 'footer-menu__list',
                            'container'		 => ''
                        ) );
                    ?>
                    
                </nav>
                <a href="#header" class="up">
                    <p class="up__text">
                        Наверх
                    </p>
                    <div class="up__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/up.png" alt="Наверх">
                    </div>
                </a>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
