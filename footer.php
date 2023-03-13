<footer class="site_footer">
    <section>
            <div class="logo_footer">
                <?php the_custom_logo(); ?>
            </div>
    </section>
    <section class="menu_footer">
        <p>Menu</p>
        <?php wp_nav_menu(array(
                    "menu"=> "entete",
                    "container" => "nav"
                )) ?>
    </section>
    <section class="reseaux">
        <p>Réseaux sociaux </p>
        <div class="logo_reseaux">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32">
        <img src="https://s2.svgbox.net/social.svg?ic=youtube&color=000" width="32" height="32">
        <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32">
        <img src="https://s2.svgbox.net/social.svg?ic=discord&color=000" width="32" height="32">
        </div>
    </section>
    
</footer>
<?php wp_footer(); ?>    
</body>
</html>