<?php

/*
Template Name: Front Page HydroWP
*/

get_header();
    $your_meta_title = "Hydro Marine – Hydrolift båtförmedling";
$your_meta_description = "Förmedling av Hydrolift och begagnade båtar i Stockholm. Själ er båt med oss.";
?>


    <?php if( get_field('hero_image') ): ?>
    <section class="front-page-hero start" style="background-image: url('<?php the_field('hero_image'); ?>');">

        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/symbols_and_logos/hydrolift_shield_1000px.png" alt="">
        <br>

        <br>
        <a href="hydrolift/" class="btn btn-ghost">Läs mer</a>

    </section>
    <?php endif; ?>

    <section class="teasers container">

        <div class="large fadeIn">
            <a class="las-mer" href="hydrolift/x-series">
                <?php if( get_field('large_image_teaser') ): ?>

                <img src="<?php the_field('large_image_teaser'); ?>" />

                <?php endif; ?>



            </a>
        </div>



        <?php

// check if the repeater field has rows of data
if( have_rows('small_teaser_repeater') ):

 	// loop through the rows of data
    while ( have_rows('small_teaser_repeater') ) : the_row(); ?>


            <article class="small fadeIn">
                <div class="img-bg" style="background-image: url(<?php the_sub_field('small_teaser_image'); ?>);">
                </div>
                <header>
                    <h3>
                        <?php the_sub_field('small_teaser_heading'); ?>
                    </h3>
                    <span></span>
                </header>
                <p>
                    <?php the_sub_field('small_teaser_text'); ?>
                    <br>
                    <br>

                    <?php if( get_sub_field('small_teaser_link') ): ?>

                    <a class="btn btn-ghost" href="<?php the_sub_field('small_teaser_link'); ?>">
                        <?php the_sub_field('small_teaser_link_label'); ?>
                    </a>

                    <?php endif; ?>
                </p>

            </article>

            <?php endwhile;
else :
    // no rows found
endif; ?>


    </section>

    <a href="hydrolift" class="big-link">Se alla båtar från hydrolift</a>

    <section class="about">

        <article class="">
            <section>
                <h2>Båtförmedling</h2>
                <p>Går du i säljtankar? Utöver försäljning av Hydrolift erbjuder vi även båtförmedling. Vi tar hand om hela affären, allt från besiktning till kontraktskrivning.</p>

                <p>Med vårt unika sjöläge vid Biskopsuddens marina ger vi er de bästa förutsättningarna för att sälja er båt.</p>

                <p>Kontakta oss för en kostnadsfri värdering så hjälper vi er!

                </p>
            </section>
        </article>
        <!--
<div class="container1400">
    <img src="/images/Hydrolift-C-28-IMG_6988-02.jpg" alt="båt, hamn, hydrolift, verkstad">
</div>
-->
    </section>


    <?php get_footer(); ?>
