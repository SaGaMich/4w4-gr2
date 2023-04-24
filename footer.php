<?php
/*
* Modèle footer par défaut
*
*/
?>
<footer class="site_footer">
    <section>
    <div>
        <?php dynamic_sidebar( 'footer_1' ); ?>
    </div>
    </section>
    <section>
    <div class="menu_footer">
        <?php dynamic_sidebar( 'footer_2' ); ?>
    </div>
    </section>
    <section>
    <div>
        <?php dynamic_sidebar( 'footer_3' ); ?>
    </div>
    </section>
    
</footer>
<?php wp_footer(); ?>    
</body>
</html>