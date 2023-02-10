<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site_header">

        <section class="site_header_logo">
            <?php the_custom_logo(); ?>
            <?php wp_nav_menu(array(
                "menu"=> "entete",
                "container" => "nav"
            )) ?>
        </section>
        <h1><?= bloginfo('name') ?>   <?= bloginfo('description') ?></h1>    
        
    </header>