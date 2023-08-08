<!-- header -->
<?php get_header(); ?>
<!-- article -->
<main class="l-main">
    <div class="l-main__inner">
        <div class="p-single">
            <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post(); ?>
            <div class="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="p-single__mv">
                    <h1 class="p-single__heading c-heading-tenth">
                        <?php the_title(); ?>
                    </h1>
                </div>
                <div class="p-single__contents">
                    <?php the_content('', true); ?>
                </div>
            </div>
            <?php endwhile;
            else:
            ?>
            <p>表示する記事がありません</p>
            <?php endif; ?>
        </div>
    </div>
</main>
<!-- / article -->
<!-- footer -->
<?php get_footer(); ?>