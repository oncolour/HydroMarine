<?php 

/*
Template Name: Single Series Page
*/

get_header();
    $your_meta_title = "X–Series Hydrolift – Hydro Marine";
$your_meta_description = "";
?>

<section class="front-page-hero hydro-p xseries half">


</section>

<?php

$category = get_field('category');

$args = array( 'post_type' => 'hydro_new_boat', 'posts_per_page' => 100, 'series' => $category );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

   the_field('boat_model');
   the_field('short_description');
   the_field('page_link');
   the_sub_field('gallery_image');
    
    $rows = get_field('gallery');
    if($rows)
    {
        echo '<ul>';

        foreach($rows as $row)
        {
            echo $row['gallery_image'];
        }

        echo '</ul>';
    }

endwhile; ?>



    <section class="product-container container">

        <article class="product-teasers fadeIn">

            <header class="product-info">
                <h3>Hydrolift X–22</h3>
                <!--<span class="price"></span>-->
                <p>The X—22 is all about making the ordinary exceptional. Featuring smart and flexible design solutions, such as the aft sunbed which doubles as a dedicated storage area with integrated dining table, this is the boat for owners who want power, performance and practical solutions.</p>
                <a class="btn btn-ghost" href="/src/images/x-22/X-22_Hydrolift_X-Series_One_pager_2018_v3_SE.pdf" target="_blank">Läs mer</a>
            </header>
            <div class="rslides-container">
                <ul class="rslides">
                    <li><img src="/images/x-22/x-22_01.jpg" alt=""></li>
                    <li><img src="/images/x-22/x-22_02.jpg" alt=""></li>
                    <li><img src="/images/x-22/x-22_03.jpg" alt=""></li>
                </ul>
            </div>
        </article>

        <article class="product-teasers fadeIn">

            <header class="product-info odd">
                <h3>Hydrolift X–26 S</h3>
                <!--<span class="price"></span>-->

                <p>Fresh, new design and proven performance – get ready for the Hydrolift X—26 S.</p>
                <a class="btn btn-ghost" href="/src/images/x-26s/X-26_S_Hydrolift_X-Series_Prislista_Rev07_SE_Folder.pdf" target="_blank">Läs mer</a>

            </header>
            <div class="rslides-container odd">
                <ul class="rslides">
                    <li><img src="/images/x-26s/x-26S_01.jpg" alt=""></li>

                </ul>
            </div>
        </article>


        <article class="product-teasers fadeIn">

            <header class="product-info">
                <h3>Hydrolift X–26 DC</h3>
                <!--<span class="price"></span>-->
                <p>Fresh, new design and proven performance – get ready for the Hydrolift X—26 DC.</p>
            </header>
            <div class="rslides-container">
                <ul class="rslides">
                    <li><img src="/images/x-26DC/x-26DC_01.jpg" alt=""></li>
                </ul>
            </div>
        </article>


        <article class="product-teasers fadeIn">

            <header class="product-info odd">
                <h3>Hydrolift X–28</h3>
                <!--<span class="price"></span>-->
                <p>The X—28 is a paradigm of performance and pleasure. This model of multifunctionality can be delivered with one or two outboard motors, and has a range of modular solutions that can be configured to meet your requirements.</p>
                <p>
                    A large, social u-shaped sofa group in the aft section and open sunbathing area in the bow make the most of sunny days at sea. The boat can also be delivered with a fully-open or fully-closed cabin.</p>
            </header>
            <div class="rslides-container odd">
                <ul class="rslides">
                    <li><img src="/images/x-28/x-28_01.jpg" alt=""></li>
                    <li><img src="/images/x-28/x-28_02.jpg" alt=""></li>

                </ul>
            </div>
        </article>

    </section>


    <?php get_footer(); ?>
