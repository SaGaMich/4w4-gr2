<?php
/*
* Template part pour afficher un blocflex note de cours 4w4
*/
    $titre = get_the_title();
    if (substr($titre,0,1) == '0'){
        $titre = substr($titre, 1);
    }
?>
<article class="blocflex_article">
<a href="<?php the_permalink(); ?>">
    <h3> <?= $titre ?></h3>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    </a>
</article>