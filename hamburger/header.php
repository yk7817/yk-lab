<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="l-container">
        <!-- overlay -->
        <div class="c-overlay" id="js-overlay"></div>
        <!-- / overlay -->
        <header class="l-header">
            <div class="l-header__inner">
                <div class="l-header__menu--button c-heading-eighth" id="js-menu">
                    Menu
                </div>
                <div class="l-header__logo">
                    <a class="l-header__logo-link" href="<?php echo esc_url( home_url('/') ); ?>">
                        <img class="l-header__logo--img" src="<?php echo get_template_directory_uri(); ?>/images/pc/pc_logo.png">
                    </a>
                </div>
                <div class="l-header__search-form">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </header>