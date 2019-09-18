<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package malen-vet
 */

get_header();
?>

<section class="serv">
    <div class="container serv__container">

    <h2>Страница не найдена.</h2>

    <div class="error-subtitle">Зато, у нас есть много других страниц:</div>

    <div class="error-menu">
        
        <nav class="error-nav">

            <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-header',
                    'menu_id'        => 'primary-menu',
                    'menu_class'	 => 'menu__list',
                    'container'		 => ''
                ) );
            ?>
            
        </nav>
    </div>

    </div>
</section>

<?php
get_footer();
