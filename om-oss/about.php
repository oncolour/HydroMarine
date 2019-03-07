<?php 

/*
Template Name: Om oss
*/

get_header();
    $your_meta_title = "X–Series Hydrolift – Hydro Marine";
$your_meta_description = "";
?>

<section class="about">

    <article class="">
        <section>
            <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_icon_blue.svg" alt="logotype">
            <h2>Hydro Marine</h2>
            <p>Företaget Hydro Marine startades av kusinerna John Rydell och Morgan Tönnesen. Efter tio år utan återförsäljare i Sverige lanserar Hydro Marine nu det prestigefyllda båtmärket Hydrolift på den svenska marknaden. Med ett brinnande intresse för prestandabåtar av hög kvalitet var Hydrolift det självklara valet när de beslutade sig att gå in i båtbranschen.</p>

            <p>“Vi är extremt stolta att få vara med och återlansera Hydrolift på den svenska marknaden efter lång tids frånvaro.”</p>
            <p>
                Hydro Marine erbjuder hela Hydrolifts modellprogram och bedriver även förmedling av begagnade båtar. Hydro Marine är centralt beläget i Stockholm på Biskopsuddens Marina. </p>
            <p>
                Välkomna att boka ett personligt möte med oss!
            </p>
        </section>
    </article>
</section>

<section class="teasers container om-oss fadeIn">

    <article itemscope itemtype="http://schema.org/Person" class="small">
        <div class="img-bg" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/images/john_rydell.jpg) top center/cover;">
        </div>
        <header itemprop="name">
            <h3>John Rydell</h3>

        </header>
        <p>
            <a itemprop="telephone" href="tel:+46-70-380-08-40">070 380 08 40</a><br>
            <a itemprop="email" href="mailto:john@hydromarine.se">john@hydromarine.se</a>
        </p>
    </article>

    <article itemscope itemtype="http://schema.org/Person" class="small">
        <div class="img-bg" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/images/morgan_tonnesen.jpg) top center/cover;">
        </div>
        <header itemprop="name">
            <h3>Morgan Tönnesen</h3>

        </header>
        <p><a itemprop="telephone" href="tel:+46-70-380-09-59">070 380 09 59</a><br>
            <a itemprop="email" href="mailto:morgan@hydromarine.se">morgan@hydromarine.se</a></p>
    </article>

</section>

<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2035.7063567628118!2d18.12131615181956!3d59.32116018156594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f82a728b2238b%3A0x708959bc17a9dcb6!2sBiskopsv%C3%A4gen+7%2C+115+21+Stockholm!5e0!3m2!1ssv!2sse!4v1519675689851" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php get_footer(); ?>
