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
        <div class="entete__header__button"><button class="entete__button">Découverte</button></div>

    </section>
    <?php get_template_part("gabarit/vagues") ?>
</div>
<!-- Pour les categories les plus populaires -->
<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil</h2>
        <div class="categorie__cours">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="carte">
                        <?php has_post_thumbnail('thumbnail') ?>
                        <?php the_category() ?>
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        <p><a href="<?php echo get_permalink() ?>">La suite</a></p>


                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>
<div id="galerie" class="global diagonal">
    <section class="galerie__section">
        <h2>Galerie (h2)</h2>
        <p>Lorem ipsum dolor sit amet,<a href="#">Lorem, ipsum.</a> consectetur adipisicing elit. Minima <a href="#">Lorem, ipsum.</a> velit qui unde odit quae, magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
        <blockquote>Galerie ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
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