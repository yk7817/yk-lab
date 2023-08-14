<form class="p-search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <input class="p-search-form__keyword" name="s" id="s" value="<?php if(is_search()){ echo get_search_query(); } ?>">
    <input class="p-search-form__submit c-button" type="submit" value="検索"/>
</form>