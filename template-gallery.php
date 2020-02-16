<?php 
/**
 * Template name: Галерея
 */

get_header();

?>

<section class="gallery" id="gallery">
    <div class="container gallery__container">
        <h2 class="gallery__title" style="color: <?php echo $malenvet_options['opt-color-titles']; ?>">
            <?php the_title(); ?>
        </h2>

        <?php while( have_posts() ) : the_post(); ?>

            <div class="gallery__subtitle">
                <?php the_content(); ?>
            </div>
            
        <?php endwhile; ?>

        <div id="instagram-gallery-box">

        </div>

    </div>
</section>

<?php get_footer();