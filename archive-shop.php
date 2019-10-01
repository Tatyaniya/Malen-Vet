<?php

 get_header();

?>

<section class="serv">
    <div class="container serv__container">

        <?php if($malenvet_options['titleshop']) { ?>
            <h2 class="service__title" style="color: <?php echo $malenvet_options['opt-color-titles']; ?>">
                <?php echo $malenvet_options['titleshop']; ?>
            </h2>
        <?php } ?>
        
        <?php if($malenvet_options['descshop']) { ?>
            <div class="service__descs">
                <?php echo $malenvet_options['descshop']; ?>
            </div>
        <?php } ?>

        <div class="table service__table">

            <?php $shop = new WP_Query( array(
                    'post_type'     => 'shop',
                    'posts_per_page'=> -1,
                    'order'   => 'ASC',
                ));

                    while ( $shop->have_posts() ) :  $shop->the_post(); ?>

                        <div class="table__box">
                            <div class="table__row">
                                <div class="table__name">
                                    <?php the_content(); ?>
                                </div>
                                <?php if(get_metadata('post', get_the_ID(),'malenvet_shop_cost',true)) { ?>
                                    <div class="table__cost">
                                        <?php echo get_metadata('post', get_the_ID(),'malenvet_shop_cost',true); ?>
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