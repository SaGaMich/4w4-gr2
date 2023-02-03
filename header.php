<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h3> <?= bloginfo('name') ?> </h3>
        <h3> <?= bloginfo('description') ?> </h3>
        <h3> <?= bloginfo('url') ?> </h3>
        <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?> - <?= bloginfo('description') ?></a></h1>
    </header>