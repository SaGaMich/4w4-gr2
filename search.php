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
      /*$category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post();*/ ?>
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
         <?php
         /*$category->slug peut avoir une de ces deux valeur : "cours" ou "note-4w4"*/
        /* get_template_part('template-parts/search', $category->slug);*/?>
             
</main>

<?php get_footer(); ?>