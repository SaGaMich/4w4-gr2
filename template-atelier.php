<?php
/**
* template name: Atelier
*/
get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('thumbnail') ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<div class="info_atelier"></div>
<p>Formateur: <?php the_field('formateur'); ?></p>
<p>Date de début de l'atelier: <?php the_field('date_atelier'); ?></p>
<p>Heure de début: <?php the_field('heure_debut'); ?></p>
<p>Durée d'une séance d'atelier: <?php the_field('duree_seance_atelier'); ?></p>
<p>Local ou se déroulera l'atelier: <?php the_field('local_deroulera_atelier'); ?></p>
<?php endif;?>
</main>
<?php
get_footer();