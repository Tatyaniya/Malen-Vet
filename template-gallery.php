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
        <div id="instagram-gallery-box">

        </div>



        <!--<ul class="gallery__list">
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f1.jpg" alt="фото">
                </div>
            </li>
        </ul>-->
    </div>
</section>

<?php get_footer();