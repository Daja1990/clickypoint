<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <div class="search-wrapper">

        <h1>Search Results for '<?php echo get_search_query();?>':</h1>

        <section class="search-flex">

        <?php get_template_part('includes/section', 'searchresults'); ?> 

</section>

<div class="pagination">
        <?php
        global $wp_query;

        $big = 9999999999; // Need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
        ?>
         <!-- Pagination -->
</div>

    </div>
</section>

<?php get_footer(); ?>