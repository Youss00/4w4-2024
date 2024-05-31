<?php get_header(); ?>

<div id="accueil" class="global">
    <section>
        <h2></h2>
        <div class="cours">
            <!-- Séparation des composants du sigle, titre du cours et durée -->
            <?php if (have_posts()) : the_post(); ?>
                <div class="carte">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <div class="infos-ville">
                        <h4>Informations :</h4>
                        <p><span>Température minimim: </span><?php the_field('temperature_minimum') ?>°C</p>
                        <p><span>Température maximim:</span> <?php the_field('temperature_maximum') ?>°C</p>
                        <p><span>Ville avoisinante: </span><?php the_field('ville_avoisinante') ?></p>
                        <p><span>Humidité:</span> <?php the_field('humidite') ?> %</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </section>
</div>

<?php get_footer(); ?>