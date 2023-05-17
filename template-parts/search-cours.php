<?php
    $titre = get_the_title();
    $sigle = substr($titre, 0, 7);
    $duree = substr($titre, 1+(strpos($titre, '(')), -1);
    $domaine = 'bd';
    $enseignant ='bd';
?>
<article class="blocflex_article_recherche">
    <div>
    <h2><a href="<?php the_permalink(); ?>"><?= $titre ?></a></h2>
    <h5>Single: <?= $sigle ?></h5>
    <h5>Durée:<?= $duree ?></h5>
    <h5>Enseignant:<?= $enseignant ?></h5>
    <h5>Domaine:<?= $domaine ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    </div>
    
    
</article>