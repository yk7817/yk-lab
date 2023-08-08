<?php
    // テーマサポート
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // CSS, JSファイル取得
    function add_link_files() {
        // CSS
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', '');
        wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/all.min.css', '');
        wp_enqueue_style( 'main_css' , get_template_directory_uri().'/css/style.css','');
        // JS
        wp_enqueue_script( 'main_js', get_template_directory_uri().'/js/main.js', array() ,'', true);
    }
    add_action( 'wp_enqueue_scripts', 'add_link_files');

    // 管理画面にメニュー編集機能を追加
    function add_register_menu() {
        register_nav_menus(
            array(
                'side_menu' => 'side_menu',
                'footer_menu' => 'footer_menu',
            )
        );
    }
    add_action( 'after_setup_theme', 'add_register_menu' );

    // 記事一覧ページを閲覧可能にする
    function post_has_archive($args, $post_type) {
        if('post' == $post_type) {
            $args['rewrite'] = true;
            $args['label'] = 'Menu';
            $args['has_archive'] = 'menu';
        };
        return $args ;
    }
    add_filter('register_post_type_args', 'post_has_archive', 10, 2);