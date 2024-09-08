
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
                        <br>
                        <button class="bouton-carte "><a href="<?php the_permalink(); ?>">Voir l'article -></a></button>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e('No results found.'); ?></p>
            <?php endif; ?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème gr2</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>" >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div id="entete" class="global">
        <header class="entete__header">  
                        <!-- facebook -->

            <div class="entete__header__texte">    
                <h1>Thème du groupe #2</h1>
                <h2>4W4 - Conception d'interface <br> et développement Web</h2>
                <h3>TIM - Collège de Maisonneuve</h3>
            </div>   
            <div class="entete__header__button"><button class="entete__button">Événements</button></div>

        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style="fill:var(--couleur-arriere-accueil)"></path>
            </svg>
        </div>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Accueil (h2)</h2>
        <div class="section__cours">  
 <?php
  /*
        if (have_posts()){
            while(have_posts()){
                the_post();
                the_title('<p>','</p>');
                $contenu = get_the_content();
                $contenu = wp_trim_words($contenu, 10);
                echo $contenu;
            }
        }
  */
  ?> <?php
            $title = get_the_title();
            $sigle =substr($title, 0, 7);
            $nomCours = substr($title,8, -6);
            $dureeCours =substr($title, -6);  
  ?>   
  <?php if (have_posts()):
        while(have_posts()): the_post(); ?>
        <div class="carte">
            <h4><?php the_title(); ?></h4>
            <h5><?php  echo $sigle ?></h5>
            <h4><?php echo $nomCours ?></h4>
            <h3><?php echo $dureeCours?></h3>
            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
        </div>
       <?php endwhile; ?>
    <?php endif; ?>
  </div>



    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie  (h2)</h2>
            <p>Lorem ipsum dolor sit amet,<a href="#">Lorem, ipsum.</a>  consectetur adipisicing elit. Minima <a href="#">Lorem, ipsum.</a>  velit qui unde odit quae, magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
            <blockquote>Galerie ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Événement</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Lorem, ipsum.</a>  Minima velit qui unde odit quae, <a href="#">Lorem, ipsum.</a>  magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
             <blockquote>Événement ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
        </section>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style="fill:var(--couleur-arriere-footer)"></path>
            </svg>

        </div>
    </section>
</div>

<?php get_footer(); ?>