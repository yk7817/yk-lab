<!-- header -->
<?php get_header(); ?>
<!-- archive -->
<main class="l-main">
    <div class="l-main__inner">
        <div class="p-archive">
            <div class="p-archive__mv">
                <h2 class="p-archive__heading c-heading-tenth">
                    Menu:<span class="p-archive__category--name c-description-first"><?php echo single_cat_title() ?></span>
                </h2>
            </div>
            <div class="p-archive__description">
                <h3 class="p-archive__description--heading c-heading-sixth">
                    小見出しが入ります
                </h3>
                <p class="p-archive__description--excerpt c-description-third">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </div>
            <!-- archive loop -->
            <section class="p-archive__items">
                <?php
                if( have_posts() ):
                    while( have_posts() ):
                        the_post(); ?>
                <article class="p-archive__item">
                    <!-- thumbnail -->
                    <div class="p-archive__item--thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <!-- title -->
                    <div class="p-archive__item--excerpt">
                        <?php the_title(); ?>
                        <?php the_content('詳しく見る'); ?>
                    </div>
                </article>
                <?php endwhile;
                else :
                    ?>
                    <p>表示する記事がありません</p>
                <?php endif; ?>
                <!-- pagenation -->
                <div class="p-pagenation">
                    <div class="p-pagenation__current--number c-description-forth">
                        <?php
                        $current_page = get_query_var( 'paged' );
                        $current_page = $current_page == 0 ? '1' : $current_page;
                        echo ' <span class="p-pagenation__heading">page</span> ';
                        echo ' <span class="currnetNum">'. $current_page . '</span>';
                        echo ' <span class="pagepunctuation">/</span> ';
                        $max_pages = $wp_query -> max_num_pages;
                        echo ' <span class="maxNum"> ' . $max_pages . '</span>';
                        ?>
                    </div>
                    <div class="p-pagenation__content c-description-forth">
                        <?php
                        $args = array(
                            'mid_size' => 10,
                            'prev_text' => '<<',
                            'next_text' => '>>',
                            'screen_reader_text' => 'page-nation',
                        );
                        the_posts_pagination($args);
                        ?>
                    </div>
                    <!-- sp pagenation -->
                    <div class="p-pagenation__sp">
                        <?php
                        $args = array(
                            'prev_text' => '<span class="c-description-fifth"><< 前へ</span>',
                            'next_text' => '<span class="c-description-fifth">次へ >></span>',
                            'screen_reader_text' => 'p-pagenation__sp--number',
                        );
                        the_posts_pagination($args);
                        ?>
                    </div>
                    <!-- / sp pagenation -->
                </div>
                <!-- / pagenation -->
            </section>
            <!-- / archive loop -->
        </div>
    </div>
</main>
<!-- / archive -->
<!-- footer -->
<?php get_footer(); ?>