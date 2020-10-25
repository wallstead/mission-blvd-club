    <?php
        require_once(get_stylesheet_directory().'/inc/custom/MenuBuilder.class.php');
        $menuBuilder = new MenuBuilder();
        $primaryNav = $menuBuilder->buildNav('Footer Primary');
        $secondaryNav = $menuBuilder->buildNav('Footer Secondary');
    ?>

    <div class="app-cta js-app-cta">
        <div class="app-cta__inner-container container">
            <picture class="app-cta__featured-image-container">
                <img class="app-cta__featured-image" src="https://images.unsplash.com/flagged/photo-1571060426446-874801b9b026?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1949&q=80" alt="">
            </picture>
            <div class="app-cta__content">
                <p class="app-cta__subtitle">Start Planning</p>
                <p class="app-cta__title">Download the Tahoe South App</p>
                <p class="app-cta__description">Make planning easy with this guide to all the must-see vistas, must-eat dishes and must-experience attractions.</p>
                <a href="#" target="" class="button --primary">
                    Plan Your Trip
                </a>
            </div>
        </div>
    </div>

    <footer class="footer js-site-footer">
        <div class="footer__inner-container container">
            <div class="footer__top">
                <div class="footer__newsletter-cta">
                    <a class="footer__newsletter-cta-link" href="#">Sign up for Our Newsletter</a>
                </div>
                <div class="footer__more-info">
                    <nav class="footer__nav">
                        <ul class="footer__nav-links">
                            <?php if (isset($primaryNav) && !empty($primaryNav)) : ?>
                                <?php foreach ($primaryNav as $key => $navItem) : ?>
                                    <li class="footer__nav-link">
                                        <a href="<?= $navItem->url; ?>"><?= $navItem->title; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </nav>
                    <div class="footer__accessory-info">
                        <div class="footer__logo-links">
                            <a href="https://travelnevada.com" class="footer__logo-link">
                                <img class="footer__logo" src="<?= nsGetImageUrl('logos/travel-nevada-logo.svg'); ?>" alt="Travel Nevada">
                            </a>
                            <a href="https://www.visitcalifornia.com/" class="footer__logo-link">
                                <img class="footer__logo" src="<?= nsGetImageUrl('logos/visit-california-logo.svg'); ?>" alt="Visit California">
                            </a>
                            <a href="https://www.visittheusa.com/" class="footer__logo-link">
                                <img class="footer__logo" src="<?= nsGetImageUrl('logos/brand-usa-logo.svg'); ?>" alt="Visit The USA">
                            </a>
                        </div>
                        <form class="footer__language">
                            <div class="footer__language-select select">
                                <select name="language" class="select__input">
                                    <option value="english" selected>English</option>
                                    <option value="spanish">Spanish</option>
                                </select>
                                <svg width="12" height="22" viewBox="0 0 12 22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-1.144 3.357L2.052.144l7.845 7.804.051-.048 3.196 3.213-.034.032.034.03-3.196 3.212-.05-.045-7.846 7.802-3.196-3.214 7.83-7.785z"
                                        fill="#242726" fill-rule="evenodd"/>
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__info">
                    <div class="footer__legal-info">
                        <p class="footer__copyright">&copy; 2020 Lake Tahoe Visitors Authority</p>
                        <a href="#" class="footer__legal-link">Privacy Policy</a>
                        <a href="#" class="footer__legal-link">Legal Disclaimer</a>
                    </div>
                    <p class="footer__noble-info"><a href="https://noblestudios.com/">Destination website design</a> by Noble Studios</p>
                </div>
                <div class="footer__social">
                   <a href="#" class="footer__social-link">
                        <div class="footer__social-icon-container">
                            <img class="footer__social-icon" src="<?= nsGetImageUrl('social/facebook.svg'); ?>" alt="Facebook"/>
                        </div>
                   </a>
                   <a href="#" class="footer__social-link">
                        <div class="footer__social-icon-container">
                            <img class="footer__social-icon" src="<?= nsGetImageUrl('social/twitter.svg'); ?>" alt="Twitter"/>
                        </div>
                   </a>
                   <a href="#" class="footer__social-link">
                        <div class="footer__social-icon-container">
                            <img class="footer__social-icon" src="<?= nsGetImageUrl('social/instagram.svg'); ?>" alt="Instagram"/>
                        </div>
                   </a>
                   <a href="#" class="footer__social-link">
                        <div class="footer__social-icon-container">
                            <img class="footer__social-icon" src="<?= nsGetImageUrl('social/pinterest.svg'); ?>" alt="Pinterest"/>
                        </div>
                   </a>
                   <a href="#" class="footer__social-link">
                        <div class="footer__social-icon-container">
                            <img class="footer__social-icon" src="<?= nsGetImageUrl('social/youtube.svg'); ?>" alt="Youtube"/>
                        </div>
                   </a>
                   <a href="#" class="footer__social-link">
                        <div class="footer__social-icon-container">
                            <img class="footer__social-icon" src="<?= nsGetImageUrl('social/tripadvisor.svg'); ?>" alt="Tripadvisor"/>
                        </div>
                   </a>
                   <a href="#" class="footer__social-link">
                        <div class="footer__social-icon-container">
                            <img class="footer__social-icon" src="<?= nsGetImageUrl('social/rss.svg'); ?>" alt="RSS Feed"/>
                        </div>
                   </a>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer__remaining" role="complementary">
        <?php wp_footer(); ?>
    </div>
    </body>
</html>
<?php
