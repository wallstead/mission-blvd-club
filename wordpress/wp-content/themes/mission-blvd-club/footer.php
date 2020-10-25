    <?php
    require_once(get_stylesheet_directory() . '/inc/custom/MenuBuilder.class.php');
    $menuBuilder = new MenuBuilder();
    $primaryNav = $menuBuilder->buildNav('Footer Primary');
    ?>

    <footer class="footer js-footer">
        <p>footer</p>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>