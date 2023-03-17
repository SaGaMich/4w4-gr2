<?php
/**
 * Modèle search par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="résultat-recherche">
<h2>Résultats de la recherche</h2>
<?php
    if (have_posts()): 
        while (have_posts()) : the_post();?>  
            
    <div>    
    <a href="<?php the_permalink(); ?>">
    <h2> <?= get_the_title(); ?></h2>
        <?= wp_trim_words(get_the_excerpt(), 50, "..."); ?>
    </a>
    </div>
    <?php endwhile;
        endif;
    ?>
</main>

<?php get_footer(); ?>