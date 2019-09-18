<?php 
/**
 * Template name: Статьи
 */

get_header();

?>

<section class="articles" id="articles">
    <div class="container articles__container">
        <h2 class="articles__title">
            Статьи
        </h2>
        <ul class="articles__list">

            <?php $articles = new WP_Query( array(
                    'post_type' => 'articles',
                    'posts_per_page'=> -1
                ));
                if ( $articles->have_posts() ) :
                    while ( $articles->have_posts() ) :  $articles->the_post(); ?>
                    
                    <li class="articles__item">
                        <a href="<?php the_permalink(); ?>" class="articles__link">
                            <div class="articles__img">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'articles-thumb'); ?>
                            </div>
                            <h3 class="articles__subtitle">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                    </li>
                        
                    <?php endwhile;
                    
                    wp_reset_postdata();
                    
                endif;
            ?>
            
        </ul>
    </div>
</section>


<?php get_footer();