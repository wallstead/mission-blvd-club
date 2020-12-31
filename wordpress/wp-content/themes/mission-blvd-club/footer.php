    <?php
    require_once(get_stylesheet_directory() . '/inc/custom/MenuBuilder.class.php');
    $menuBuilder = new MenuBuilder();
    $primaryNav = $menuBuilder->buildNav('Footer Primary');
    ?>

    <footer class="footer js-footer">
        <div class="footer__container container">
            <div class="footer__section">
                <p class="footer__section-title">Mission Boulevard Club</p>
                <div class="footer__section-links">
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                </div>
            </div>
            <div class="footer__section">
                <p class="footer__section-title">Boulevard Heights Radio</p>
                <div class="footer__section-links">
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                        <div class="footer__external-link-item">
                            test
                        </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://public.radio.co/playerapi/jquery.radiocoplayer.min.js"></script>

    <?php wp_footer(); ?>

    </body>
</html>