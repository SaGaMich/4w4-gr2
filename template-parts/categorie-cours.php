<?php
/*
* Template part pour afficher un blocflex cours du TIM
*/
    $titre = get_the_title();
    $titre_long = substr($titre, 7,-6); 
    $sigle = substr($titre, 0, 7);
    $duree = substr($titre, 1+(strpos($titre, '(')), -1);
    //strpos($titre, '('); //permet de trouver la position du caractère, ')'
?>
<article class="blocflex_article">
<?php
        if (has_post_thumbnail()){
            the_post_thumbnail('medium');
            //echo get_the_ID();
        } else {
            echo get_the_post_thumbnail(38,'thumbnail');
        }
    ?>
<a href="<?php the_permalink(); ?>">

    <h2> <?= $sigle ?></h2>
    <h5><?= $titre_long ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h5><?= $duree ?></h5>
    <!--<p>//?php the_field('enseignant') //ici???></p>
    <p>//?php the_field('domaine') ?></p>-->
    </a>
</article>