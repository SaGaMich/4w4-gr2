<?php
/*
* Modèle catégory par défaut
*
*/
?>
<?php get_header(); ?>
<main>
<h6><?php echo category_description(); ?></h6>
    <section class="blocflex">
        <?php
            if(have_posts()):
                while (have_posts()) : the_post(); 
        ?>
        <article>
        <a href="<?php echo get_permalink();?>">
            <h3><?php echo get_the_title(); ?></h3>
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