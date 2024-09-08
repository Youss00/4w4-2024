<?php
?>
<!--  permet de prendre le header  du fichier principal -->
<?php get_header() ?>
<!-- Page d accueil  -->
<div id="accueil" class="global">
    <section class="accueil__section">
        <!--  Titre et sous-titre de l erreur -->
        <div class="erreur-page">
            <div class="flexbox">
                <h2>ERREUR 404</h2>
                <br>
                <br>
                <h4>La page que vous cherchez n'existe pas ou a été déplacée. Vous pouvez :</h4>
                <br>
                <button class=" bouton-retour"> <a href="<?= get_home_url('/') ?>">Retourner à l'accueil</a></button>
            </div>

            <div class="image-erreur">

                <img src="https://gftnth00.mywhc.ca/tim47/wp-content/uploads/2024/04/GGSF.jpg">

            </div>
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