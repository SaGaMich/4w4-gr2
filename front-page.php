<?php
/*
* Modèle par défaut
*
*/
?>
<?php get_header(); ?>
<main>
    <h1>Bienvenue au cours de 4w4</h1>
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
    </section>

</main>
<?php get_footer(); ?>