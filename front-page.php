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
        ?>
        <article>
        <a href="<?php echo get_permalink();?>">
            <h2><?php echo get_the_title(); ?></h2>
            <?php //the_content(); // affiche le contenu complet de l'article?>
            <?php //the_excerpt(); // affiche une résumé de l'article ?> 
            <p><?= wp_trim_words(get_the_excerpt(), 10, "...") ?></p>
        </a>
        </article>
        <?php 
            endwhile;
            endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>