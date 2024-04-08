<?php get_header(); ?>

<div id="accueil" class="global">
    <section>
        <h2>Accueil</h2>
        <div class="cours">
            <!-- Séparation des composants du sigle, titre du cours et durée -->
            <?php if (have_posts()) : the_post(); ?>
                <div class="carte">
                    <?php the_post_thumbnail('medium') ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            <?php endif; ?>
        </div>

    </section>
</div>

<?php get_footer(); ?>