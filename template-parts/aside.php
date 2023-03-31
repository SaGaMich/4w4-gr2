<aside class="site_aside">
        <h3>Menu secondaire</h3>
        <div class="menu_aside">
        <?php
        $ma_categorie = "accueil";
        if(in_category('cours')){
            $ma_categorie = "cours";
        }
        if(in_category('note-4w4')){
            $ma_categorie = "note-4w4";
        }
        wp_nav_menu(array(
            "menu" => $ma_categorie,
            "container" => "nav"
        )); ?>
        </div>
    </aside>