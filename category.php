<?php
/*
* Modèle catégory par défaut
*
*/
?>
<?php get_header(); ?>
<main class="site_main">
<h6><?php echo category_description(); ?></h6>
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
               <?php
                  $titre = get_the_title();
                  if( $category->slug == 'cours-tim'){
                     $titre = substr($titre,7,65);
                  }
               ?>
               <h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
            </article>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>

<?php get_footer(); ?>