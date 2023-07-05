<!-- Used to overwrite the basic WP search form. search.php is the result of your search -->

<form action="<?php echo home_url('/'); ?>" method="get">
    <input type="hidden">
    <input placeholder="Search Games" type="text" name="s" id="search" value="<?php the_search_query();?>" required>
    <button type="submit">Search</button>
</form>