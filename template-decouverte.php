<?php

/**
 * Template name: Decouverte
 *
 */
get_header(); ?>
<main class="site__main">
    <?php
    if (have_posts()) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_content(); ?>
        <h5>Pour découvrir les nouvelles destinations, incrivez-vous à notre infolettre pour avoir toutes les nouvelles destinations sans chercher loins</h5>

    <?php endif; ?>
    <div class="inscription">
        <form action="/submit_registration" method="post">
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmez le mot de passe:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>

</main><!-- #main -->
<?php
get_footer();
