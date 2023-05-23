<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<?php
    $nouvelle_classe = "";
    if  (is_front_page() || 
      (! in_category("cours") && ! in_category("note-4w4")) ){
        $nouvelle_classe = 'no-aside';
      }
    if (is_page_template('template-atelier.php')) {
        $nouvelle_classe = '';
    }
?>
<body class="site <?php $nouvelle_classe ?>">
    <header class="site_header">
    <h1><a href="<?= bloginfo('url') ?>"> <?= bloginfo('name') ?> <?= bloginfo('description') ?> </a></h1>  
        <section class="site_header_logo">
        <?php the_custom_logo(); ?>
            <div class="menu_recherche">
                <input type="checkbox" id="checkMenu">
                <?php wp_nav_menu(array(
                    "menu"=> "entete",
                    "container" => "nav"
                )) ?>
                <label class="burger" for="checkMenu">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
                </label>
                <?php get_search_form(); ?>
                
            </div>
        </section>
    </header>
    <?php 
    if (! is_front_page()){
    get_template_part('template-parts/aside');} ?>