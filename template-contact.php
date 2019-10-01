<?php 
/**
 * Template name: Контакты
 */

get_header();

?>

<section class="contacts" id="contacts">
    <div class="container contacts__container">
        <h2 class="contacts__title" style="color: <?php echo $malenvet_options['opt-color-titles']; ?>">
            <?php the_title(); ?>
        </h2>
        <div class="contacts__content">
            <div class="contacts__info">
                <?php if($malenvet_options['addr']) { ?>
                    <div class="addrs contacts__addr">
                        <div class="addrs__name">
                            Наш адрес: 
                        </div>
                        <address class="addrs__text">
                            <?php echo $malenvet_options['addr']; ?>
                        </address>
                    </div>
                <?php } ?>
                <?php if($malenvet_options['mode']) { ?>
                    <div class="operating contacts__operating">
                        <div class="operating__name">
                            Режим работы:
                        </div>
                        <p class="operating__text">
                            <?php echo $malenvet_options['mode']; ?>
                        </p>
                    </div>
                <?php } ?>
                <?php if($malenvet_options['mail']) { ?>
                    <div class="mail contacts__mail">
                        <div class="mail__name">
                            E-mail:
                        </div>
                        <a href="mailto:<?php echo $malenvet_options['mail']; ?>" class="mail__text">
                            <?php echo $malenvet_options['mail']; ?>
                        </a>
                    </div>
                <?php } ?>
                <div class="ph">
                    <div class="ph__name">
                        Телефоны:
                    </div>
                    <div class="phone contacts__phone">
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
            <div class="map">
                
                <?php
                    while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer();