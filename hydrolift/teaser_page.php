<?php

/*
Template Name: Series Page
*/
get_header();
    $your_meta_title = "Hydrolift båtar – Hydro Marine";
$your_meta_description = "Välj bland våra tre series – X–Series, Signature och Professional";
?>

    <section class="front-page-hero hydro-p txt half">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hydrolift_logo_light_logotype_fixed_header.png" width="250px" alt="">
        <p>"Designed and built in Norway, our boat range gives our customers a lifetime of exceptional performance and efficiency. We are committed to continuous product improvement and evolution, delivering only the highest quality boats and unmatchable design to the premium segment. In short, we are satisfied with nothing less than the best – design, function and performance." – Hydrolift
        </p>

        <p>
            <a target="_blank" href="https://www.facebook.com/HydroliftSverige">Följ oss på Facebook!</a>
        </p>

    </section>


    <section class="teasers container">

        <?php if( have_rows('large_teaser_repeater') ):
            while ( have_rows('large_teaser_repeater') ) : the_row(); ?>

        <div class="large fadeIn">
            <a class="las-mer" href="<?php the_sub_field('large_teaser_link'); ?>">
        <img src="<?php the_sub_field('large_teaser_image'); ?>" alt="">
        </a>
        </div>

        <?php endwhile;
        else :
        // no rows found
        endif;
         
        if( have_rows('small_teaser_repeater') ):
            while ( have_rows('small_teaser_repeater') ) : the_row(); ?>


        <article class="small no-border fadeIn">
            <a class="las-mer" href="<?php the_sub_field('small_teaser_link'); ?>">
                <div class="img-bg" style="background-image: url(<?php the_sub_field('small_teaser_image'); ?>);">
                </div>
            </a>

        </article>
        <?php endwhile;
        else :
        // no rows found
        endif; ?>

    </section>

    <?php get_footer(); ?>
