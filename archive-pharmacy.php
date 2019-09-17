<?php

 get_header();

?>

<section class="serv">
    <div class="container serv__container">

        <?php if($malenvet_options['titlepharm']) { ?>
            <h2 class="service__title">
                <?php echo $malenvet_options['titlepharm']; ?>
            </h2>
        <?php } ?>
        
        <?php if($malenvet_options['descpharm']) { ?>
            <div class="service__descs">
                <?php echo $malenvet_options['descpharm']; ?>
            </div>
        <?php } ?>

        <div class="table service__table">

            <?php $pharmacy = new WP_Query( array(
                    'post_type'     => 'pharmacy',
                    'posts_per_page'=> -1,
                    'order'   => 'ASC',
                ));

                    while ( $pharmacy->have_posts() ) :  $pharmacy->the_post(); ?>

                        <div class="table__box">
                            <div class="table__row">
                                <div class="table__name">
                                    <?php the_content(); ?>
                                </div>
                                <?php if(get_metadata('post', get_the_ID(),'malenvet_pharmacy_cost',true)) { ?>
                                    <div class="table__cost">
                                        <?php echo get_metadata('post', get_the_ID(),'malenvet_pharmacy_cost',true); ?>
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