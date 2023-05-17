<?php
    $titre = get_the_title();
    if (substr($titre,0,1) == '0'){
        $titre = substr($titre, 1);
    }
?>
<article class="blocflex_article_recherche">
<?php 
    if (has_post_thumbnail()){
        the_post_thumbnail('thumbnail');
        echo get_the_ID();
    }
    else
    {
       echo get_the_post_thumbnail(37,'thumbnail');
    }

     ?>  
<a href="<?php the_permalink(); ?>">
    <h3> <?= $titre ?></h3>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    </a>
</article>