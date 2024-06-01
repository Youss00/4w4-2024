<?php get_header() ?>
<!-- <h1>Front-page </h1> -->
<div id="entete" class="global">
    <section class="entete__header">
        <!-- facebook -->

        <div class="entete__header__texte">
            <h1 class="bgc-text"><?php echo get_bloginfo('name') ?></h1>
            <h2 class="bgc-text"><?php echo get_bloginfo('description') ?></h2>
            <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
        </div>
        <div class="entete__header__button">
            <?php
            // Obtenez l'ID de la page par son chemin
            $page = get_page_by_path('decouverte');

            // Vérifiez si la page existe
            if ($page) {
                // Obtenez l'URL de la page
                $url = get_permalink($page->ID);
            }
            ?>
            <a href="<?php echo $url; ?>"> <button class="entete__button">Découverte</button></a>
        </div>

    </section>
    <?php get_template_part("gabarit/vagues") ?>
</div>
<!-- Pour les categories les plus populaires -->
<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Destination populaire</h2>

        <div class="categorie__cours">

            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();

                    $ma_categorie = "carte";
                    if (in_category('galerie')) {
                        $ma_categorie = "galerie";
                    }

                    get_template_part('gabarit/categorie', $ma_categorie);

            ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>
<div id="galerie" class="global diagonal">
    <section class="galerie__section">
        <!-- <button class="bouton_categorie"></button><button class="bouton_categorie"></button><button class="bouton_categorie"></button><button class="bouton_categorie"></button><button class="bouton_categorie"></button><button class="bouton_categorie"></button><button class="bouton_categorie"></button><button class="bouton_categorie"></button><button class="bouton_categorie"></button> -->
        <?php echo do_shortcode('[ys_destination]') ?>

    </section>
</div>
<!-- Pour les categorie dans le menu -->
<div id="evenement" class="global">
    <section class="evenement__section">
        <h2>Catégorie</h2>
        <div class="section__cours">
            <?php
            $categories = get_categories();
            foreach ($categories as $categorie) : ?>
                <div class="carte">
                    <h4><?php echo $categorie->name; ?></h3>
                        <p><?php echo $categorie->cat_ID; ?></p>
                        <p><?= wp_trim_words($categorie->description, 10, "..."); ?></p>
                        <p>Nombres d'article: <?= $categorie->count; ?></p>

                        <a href="<?= get_category_link($categorie->term_id); ?>">Voir la suite de catégorie</a>

                </div>
            <?php endforeach; ?>

        </div>

    </section>

    <?php get_template_part("gabarit/vagues") ?>
</div>

<?php
get_footer();
?>