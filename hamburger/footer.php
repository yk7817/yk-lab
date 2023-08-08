<?php get_sidebar(); ?>
<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__menu">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu',
                        'container' => false,
                    )
                );
            ?>
        </div>
        <div class="l-footer__copyright">
            <small class="l-footer__copyright--content c-copyright">
                Copyright : <?php bloginfo('name'); ?>
            </small>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>