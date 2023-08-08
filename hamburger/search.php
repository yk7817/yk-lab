<!-- header -->
<?php get_header(); ?>
<!-- search result -->
<main class="l-main">
    <div class="l-main__inner">
        <div class="p-search">
            <div class="p-search__mv">
                <h2 class="p-search__heading c-heading-tenth">
                    Search
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
            <section class="p-search__items u-mt70">
                <?php
                if ( have_posts() && get_search_query() ):
                    while ( have_posts() ):
                        the_post();
                        get_template_part( 'template-parts/post/content', 'excerpt' );
                    endwhile;
                ?>
                <?php query_posts($query_string, '&posts_per_page=10'); ?>
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
                </div>
                <!-- / pagenation -->
            </section>
        </div>
    </div>
</main>
<!-- / search result -->
<!-- footer -->
<?php get_footer(); ?>