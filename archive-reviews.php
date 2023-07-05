<?php get_header(); ?>

<div class="gameheader ">Reviews Archive</div>

<section class="games-wrapper reviewsarchive">

    <div class="sidebar">
        <?php if( is_active_sidebar('blog-sidebar') ):?>
            <?php dynamic_sidebar('blog-sidebar');?>
        <?php endif;?>
    </div>

        <?php get_template_part('includes/section', 'archive'); ?> 

    <div class="paginate">
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
         </section>
<?php get_footer(); ?>