<!-- header -->
<?php get_header(); ?>
<!--　 fixed page maincontents -->
<main class="l-main">
    <div class="l-main__inner">
        <div class="p-page">
            <?php if( have_posts() ):
                while( have_posts() ):
                    the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="p-page__heading c-heading-tenth">
                        <?php the_title(); ?>
                    </h2>
                <?php the_post_thumbnail(); ?>
                <div class="p-page__contents">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile;
            else:
                ?>
                <p>表示する記事がありません。</p>
            <?php endif; ?>
        </div>
    </div>
</main>
<!-- / fixed page maincontents -->
<!-- footer -->
<?php get_footer(); ?>