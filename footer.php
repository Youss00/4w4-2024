<div id="footer" class="global">
    <footer class="footer__section">
        <div class="recherche">
            <?php get_search_form(); ?>
        </div>
        <div class="sociaux">

            <a href="https://www.youtube.com/"><svg width="32px" height="32px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000">
                    <title>YouTube icon</title>
                    <path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path>
                </svg></a>
            <a href="https://github.com/Youss00/4w4-2024/tree/tp2"><svg width="32px" height="32px" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000000" xmlns="http://www.w3.org/2000/svg">
                    <title>GitHub icon</title>
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                </svg></a>
            <a href="#"><svg width="32px" height="32px" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000000" xmlns="http://www.w3.org/2000/svg">
                    <title>Facebook icon</title>
                    <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"></path>
                </svg></a>
        </div>
        <div class="liens">
            <h4>Compagnies partenaires</h4>
            <!-- Prendre le menu dans le wordpress et en faire un menu footer -->
            <?php wp_nav_menu(array("menu" => "footer", "container" => "nav")) ?>
        </div>
        <div class="description">
            <div class="information-perso">
                <h3>Collège De Maisonneuve</h3>
                <p>3800, rue Sherbrooke Est</p>
                <p>Montréal, Québec</p>
                <p>H1X 2A2</p>
                <p>514 254-7131</p>
            </div>
            <div class="desc-tp">
                <h3>Description du TP</h3>
                <h5>Youssra Seghier</h5>
                <p>
                    Le TP2 a pour objectif d'améliorer notre site de voyage en intégrant un carrousel d'images, des champs personnalisés pour les descriptions des destinations, des filtres utilisant la REST API de WordPress, des animations interactives et de nouveaux gabarits pour une organisation efficace du contenu.</p>
                <a href="https://github.com/Youss00/4w4-2024/tree/tp2">GitHub TP2</a>
            </div>
        </div>
        <div>&copy;TIM 2024 || Conception d'interface Web || Youssra Seghier</div>

</div>
<?php wp_footer(); ?>
</footer>
</div>
</body>

</html>

<!--

https://svgbox.net/


https://icodethis.com/


-->