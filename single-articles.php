<?php
/**
*  Template name: Страница статьи
*
* Template Post Type: post, page, product
*/
get_header();
?>

    <section class="article" id="article">
        <div class="container article__container">
            <h2 class="article__title" style="color: <?php echo $malenvet_options['opt-color-titles']; ?>">
                <?php the_title(); ?>
            </h2>
            <div class="article__content">

                <?php
                    while ( have_posts() ) : the_post();

                        the_content();
                        
                    endwhile; 
                ?>

            </div>
        </div>
    </section>
    <section class="articles-inner">
        <div class="container articles-inner__container">
            <h2 class="articles-inner__title">
                Другие статьи
            </h2>
            <ul class="articles-inner__list">

                <?php $postid = get_the_id();

                    $articles = new WP_Query( array(
                        'post_type'     => 'articles',
                        'posts_per_page'=> 4,
                        'post__not_in'  => array($postid),
                        'orderby'       => 'rand',
                    ));
                        while ( $articles->have_posts() ) :  $articles->the_post(); ?>

                            <li class="articles-inner__item">
                                <a href="<?php the_permalink(); ?>" class="articles-inner__link">
                                    <div class="articles-inner__img">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'article-thumb'); ?>
                                    </div>
                                    <h3 class="articles-inner__subtitle">
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                            </li>

                    <?php endwhile; 
                    wp_reset_postdata(); 
                ?>
                
            </ul>
        </div>
    </section>