<?php
/*
* Modèle front-page par défaut
*
*/
?>
<?php get_header(); ?>
<main class="accueil_main">
    <h1>Bienvenue au cours de 4w4</h1>
    <section class="blocflex">
        <?php
        wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav"
        ));
        ?>
    </section>
     <section class="blocflex">
        <?php
        wp_nav_menu(array(
            "menu"=>"atelier",
            "container"=>"nav"
        ));
        ?>
    </section>
    <section class="blocflex">
        <?php
            if(have_posts()):
                while (have_posts()) : the_post();

                $la_categorie = 'accueil';
                if(in_category('galerie')){
                    $la_categorie = 'galerie';
                }

                get_template_part('template-parts/categorie', $la_categorie);

            endwhile;
            endif;
        ?>
        <?php
            wp_nav_menu(array(
                "menu"=>"bloc-archive",
                "container"=>"nav"
            ));
        ?>
           
    </section>

</main>
<?php get_footer(); ?>