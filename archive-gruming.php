<?php

 get_header();

?>

<section class="serv">
    <div class="container serv__container">

        <?php if($malenvet_options['titlegrum']) { ?>
            <h2 class="service__title">
                <?php echo $malenvet_options['titlegrum']; ?>
            </h2>
        <?php } ?>
        
        <?php if($malenvet_options['descgrum']) { ?>
            <div class="service__descs">
                <?php echo $malenvet_options['descgrum']; ?>
            </div>
        <?php } ?>

        <div class="table service__table">

            <?php $gruming = new WP_Query( array(
                    'post_type'     => 'gruming',
                    'posts_per_page'=> -1,
                    'order'   => 'ASC',
                ));

                    while ( $gruming->have_posts() ) :  $gruming->the_post(); ?>

                        <div class="table__box">
                            <div class="table__row">
                                <div class="table__name">
                                    <?php the_content(); ?>
                                </div>
                                <?php if(get_metadata('post', get_the_ID(),'malenvet_gruming_cost',true)) { ?>
                                    <div class="table__cost">
                                        <?php echo get_metadata('post', get_the_ID(),'malenvet_gruming_cost',true); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    
                    <?php endwhile; 

                wp_reset_postdata(); 
            ?>

         </div>
    </div>
</section>



<?php get_footer();