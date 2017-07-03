<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="serchform" >
    <div class="search-wrap">
        <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s"  placeholder="Поиск" class="serchform-line" />
        <input type="submit" value="ИСКАТЬ" class="serch-btn">
    </div>
</form>