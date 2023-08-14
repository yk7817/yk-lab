<!-- header -->
<?php get_header(); ?>
<!-- search result -->
<main class="l-main">
    <div class="l-main__inner">
        <div class="p-search">
            <div class="p-search__mv">
                <h2 class="p-search__heading c-heading-tenth">
                    Search:
                    <span class="p-search__value c-description-first">
                        <?php echo get_search_query(); ?>
                    </span>
                </h2>
            </div>
            <div class="p-search__description">
                <h3 class="p-search__description--headidng c-heading-sixth">
                    小見出しが入ります
                </h3>
                <p class="p-search__description--excerpt c-description-third">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </div>
            <section class="p-search__items">
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                <!-- search item -->
                <article class="p-search__item">
                    <div class="p-search__item--thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="p-search__item--excerpt">
                        <?php the_title(); ?>
                        <?php the_content('詳しく見る'); ?>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php else : ?>
                    <p>検索キーワードに該当する記事がありませんでした</p>
                <?php endif; ?>
                <!-- / search item -->
                <!-- pagenation -->
                <div class="p-pagenation">
                    <div class="p-pagenation__current--number c-description-forth">
                        <?php
                        $current_page = get_query_var( 'paged' );
                        $current_page = $current_page == 0 ? '1': $current_page;
                        echo ' <span class="p-pagenation__heading">page</span> ';
                        echo ' <span class="currentNum"> ' . $current_page . '</span>';
                        echo ' <span class="pagepunctuation">/</span> ';
                        $max_pages = $wp_query -> max_num_pages;
                        echo ' <span class="maxNum"> ' . $max_pages . ' </span> ';
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
        </div>
    </div>
</main>
<!-- / search result -->
<!-- footer -->
<?php get_footer(); ?>