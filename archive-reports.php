<?php get_header(); ?>

<div class="gameheader">Reports Archive</div>

<section class="games-wrapper reviewsarchive">

        <?php get_template_part('includes/section', 'archive'); ?> 

    <div class="paginate">
        <?php
        global $wp_query;

        $big = 9999999999;

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
        ?>

         </div>
         </section>
<?php get_footer(); ?>