<?php get_header(); ?>

<div id="accueil" class="global ">
    <section class="accueil__section">
        <h2>Résultats de la recherche: (<?php echo $wp_query->found_posts; ?>)</h2>
        <div class="categorie__cours">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="carte">
                        <?= the_category();  ?>
                        <h3><?= get_the_title() ?></h3>
                        <p><?= wp_trim_words(get_the_content(), 50); ?></p>

                        <button class="bouton-carte "><a href="<?php the_permalink(); ?>">Voir l'article -></a></button>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e('No results found.'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>