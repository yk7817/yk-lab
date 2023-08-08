<aside class="l-sidebar" id="js-sidebar">
    <div class="l-sidebar__heading">
        <h2 class="c-heading-eighth">
            Menu
        </h2>
    </div>
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'side_menu',
                'container' => false,
                'menu_class' => 'l-sidebar__inner',
            )
        );
    ?>
</aside>
