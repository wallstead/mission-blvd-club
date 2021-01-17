    <?php
    require_once(get_stylesheet_directory() . '/inc/custom/MenuBuilder.class.php');
    $menuBuilder = new MenuBuilder();
    $footerNav = $menuBuilder->buildNav('Footer Navigation');
    ?>

    <footer class="footer js-footer">
        <div class="footer__container container">
            <div class="footer__section">
                <p class="footer__section-title">Stay Connected</p>
                <p class="footer__section-intro-text">We'll let you know when we're dropping something special.</p>
                <div class="footer__section-content">
                    <form action="https://gmail.us7.list-manage.com/subscribe/post" method="POST" class="footer__newsletter-form">
                        <input type="hidden" name="u" value="4aec738100ad880560c0275a8">
                        <input type="hidden" name="id" value="55b38f257c">
                        <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="" placeholder="you@example.com" class="footer__email-input">
                        <button type="submit" name="submit"class="footer__submit-input">Subscribe <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
            <div class="footer__section">
                <p class="footer__section-title">Our Socials</p>
                <div class="footer__section-content">
                        <a href="#" class="footer__external-link">
                            <div class="footer__external-link-item">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </a>
                        <a href="#" class="footer__external-link">
                            <div class="footer__external-link-item">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </a>
                        <a href="#" class="footer__external-link">
                            <div class="footer__external-link-item">
                                <i class="fab fa-mixcloud"></i>
                            </div>
                        </a>
                </div>
                <?php if (isset($footerNav) && !empty($footerNav)) : ?>
                    <p class="footer__section-title">More Links</p>
                    <div class="footer__section-content">
                        <div class="footer__nav">
                            <?php foreach ($footerNav as $link): ?>
                                <a href="<?= $link->url; ?>" class="footer__nav-link"><?= $link->title; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://public.radio.co/playerapi/jquery.radiocoplayer.min.js"></script>

    <?php wp_footer(); ?>

    </body>
</html>
