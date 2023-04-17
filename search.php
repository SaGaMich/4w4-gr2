<?php
/**
 * Modèle search par défaut
 * 
 */
?>
<?php get_header();?>
<main class="résultat-recherche site_main">
<h2>Résultats de la recherche</h2>

<?php
    if (have_posts()): 
        while (have_posts()) : the_post();
        $category = 'cours';
        get_template_part('template-parts/search', $category);
?>  
    <hr>
    <?php endwhile;
        endif;
    ?>
             
</main>

<?php get_footer(); ?>