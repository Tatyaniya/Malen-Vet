<?php 
/**
 * Template name: Галерея
 */

get_header();

?>

<section class="gallery" id="gallery">
    <div class="container gallery__container">
        <h2 class="gallery__title">
            <?php the_title(); ?>
        </h2>
        <ul class="gallery__list">
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f1.jpg" alt="фото">
                </div>
            </li>
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f2.jpg" alt="фото">
                </div>
            </li>
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f3.jpg" alt="фото">
                </div>
            </li>
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f4.jpg" alt="фото">
                </div>
            </li>
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f5.jpg" alt="фото">
                </div>
            </li>
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f6.jpg" alt="фото">
                </div>
            </li>
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f7.jpg" alt="фото">
                </div>
            </li>
            <li class="gallery__item">
                <div class="gallery__img">
                    <img src="img/f8.jpg" alt="фото">
                </div>
            </li>
        </ul>
    </div>
</section>

<?php get_footer();