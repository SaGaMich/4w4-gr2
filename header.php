<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="site">
    <header class="site_header">
    <h1><a href="<?= bloginfo('url') ?>"> <?= bloginfo('name') ?> <?= bloginfo('description') ?> </a></h1>  
        <section class="site_header_logo">
            <div class="logomenu">
                <?php the_custom_logo(); ?>
                <?php wp_nav_menu(array(
                    "menu"=> "entete",
                    "container" => "nav"
                )) ?>
            </div>
            <div class="recherche">
            <?php  get_search_form(); ?>
            </div>
        </section>       
    </header>
    <aside class="site_aside">
        <h3>menu test aside</h3>
        <?php wp_nav_menu(array(
            "menu" => "aside",
            "container" => "nav"
        )); ?>
    </aside>