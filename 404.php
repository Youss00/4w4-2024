<?php
?>
<!--  permet de prendre le header  du fichier principal -->
<?php get_header() ?>
<!-- Page d accueil  -->
<div id="accueil" class="global">
    <section class="accueil__section">
        <!--  Titre et sous-titre de l erreur -->
        <h2>ERREUR 404</h2>
        <br>
        <br>
        <div class="flexbox">
            <h3>La page que vous cherchez n'existe pas ou a été déplacée. Vous pouvez :</h3>
            <br>
            <ul ">
                <!-- retour a la page d accueil -->
                <h4 class=" bouton-retour"> <a href="<?= get_home_url('/') ?>">Retourner à l'accueil</a></h4>
            </ul>
        </div>

        <div class="search-accueil">
            <?php get_search_form(); ?>

        </div>
        <div class="categories-accueil">
            <?php wp_nav_menu(array("menu" => "principal", "container" => "nav")) ?>
        </div>

    </section>

</div>

<?php get_footer() ?>