<aside class="l-sidebar" id="js-sidebar">
    <div class="l-sidebar__heading">
        <h2 class="c-heading-eighth">
            Menu
        </h2>
    </div>
    <!-- responsive menu close icon -->
    <div class="l-sidebar__close" id="js-menuClose-icon">
        <span class="l-sidebar__close--icon"></span>
    </div>
    <!-- / responsive menu close icon -->
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
