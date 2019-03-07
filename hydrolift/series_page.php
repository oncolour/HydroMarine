<?php 

/*
Template Name: Single Series Page
*/

get_header();
    $your_meta_title = "X–Series Hydrolift – Hydro Marine";
$your_meta_description = "";
?>

<section class="front-page-hero half" style="background-image:url(<?php the_field('hero_image'); ?>);">




    <?php $hero_logo = get_field('hero_logo');
                if($hero_logo) { ?>
    <img src="<?php the_field('hero_logo'); ?>" alt="">
    <?php } ?>

</section>

<section class="product-container container">

    <?php

$category = get_field('category');

$args = array( 'post_type' => 'hydro_new_boat', 'posts_per_page' => 100, 'series' => $category, 'orderby' => 'menu_order', 'order' => 'ASC',  );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

    

    
?>
        <article class="product-teasers fadeIn">

            <header class="product-info">
                <h3>
                    <?php the_field('boat_model'); ?>
                </h3>

                <p>
                    <?php the_field('short_description'); ?>
                </p>
                <?php $link = get_field('page_link');
                if($link) { ?>
                <a class="btn btn-ghost" href="<?php the_field('page_link'); ?>">Läs mer</a>
                <?php } ?>
            </header>
            <div class="rslides-container">
                <ul class="rslides">
                    <?php $rows = get_field('gallery');
                    
                    if($rows) { foreach($rows as $row) {
                        echo '<li><img src="' . $row['gallery_image'] . '"></li>'; } } ?>

                </ul>
            </div>
        </article>

        <?php endwhile; ?>

</section>


<?php get_footer(); ?>
