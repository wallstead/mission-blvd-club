<form class="mini-search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="mini-search__inner-container">
        <input type="text" class="mini-search__field" name="s" placeholder="Search" value="<?php the_search_query(); ?>">
        <button class="search-submit" type="submit">
            <svg class="search-icon"  width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg"><path d="M5.199 9.197c0-4.05 3.295-7.345 7.345-7.345s7.345 3.295 7.345 7.345-3.295 7.346-7.345 7.346-7.345-3.296-7.345-7.346zM1.309 22l5.57-5.571a9.144 9.144 0 005.665 1.966c5.071 0 9.198-4.126 9.198-9.198S17.616 0 12.544 0C7.473 0 3.346 4.125 3.346 9.197c0 2.268.83 4.344 2.196 5.95L0 20.69 1.31 22z" fill="#242726" fill-rule="evenodd"/></svg>
        </button>
    </div>
</form>
