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
<?php endif;?>
</main>
<?php
get_footer();