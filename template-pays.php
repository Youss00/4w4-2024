<?php

/**
 * Template name: Pays
 *
 */
get_header(); ?>
<div id="accueil" class="globale">
    <section class="accueil__section">
        <h1>Les plus beaux pays</h1>
        <p>Voyager est une aventure qui enrichit l'âme, ouvre l'esprit et permet de découvrir des cultures, des paysages et des expériences inoubliables. Que vous soyez un explorateur chevronné ou un novice en quête de nouveaux horizons, notre club voyage vous propose une sélection des plus beaux pays à visiter. Préparez-vous à être émerveillé !</p>
        <?php
        if (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endif; ?>


    </section>
    <?php get_template_part("gabarit/vagues") ?>
</div>

<div id="galerie" class="globale api">

    <section class="galerie__section">
        <?php echo do_shortcode('[wtp_country_menu]'); ?>
    </section>
    <?php get_template_part("gabarit/vagues") ?>
</div>
<?php
get_footer();
?>