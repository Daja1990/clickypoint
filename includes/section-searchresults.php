<!-- If we have a post for the specific page we are on, while we are on that page show the post -->

<?php if( have_posts() ): while( have_posts() ): the_post();?>


    <div class="individual-search">

    <?php if(has_post_thumbnail()):?>
        <a href="<?php the_permalink();?>" class="readmore">
            <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

            <!-- Code under here works if you do not have gd on
            (uncomment "extension=gd" in "xampp/php/php.ini" and restart XAMPP to activate it!) -->
            <!-- <?php the_post_thumbnail(  'blog-small', [ 'class' => 'img-fluid mb-3 img-thumbnail', 'alt' => '<?php the_title();?>'] ); ?> -->

        <?php endif;?>

        <div class="blog-content search-results">

            <h3><?php the_title(); ?></h3>
            <?php the_excerpt();?>
            <!-- Excerpt makes sure not whole text is showing, just a preview. Cuts it off at a given point -->
            <span class="readmore-txt">Read More</span></a>
            <!-- Linking archive to its respective post -->

        </div>

    </div>

<?php endwhile; else: ?> 
    
    There are no results for '<?php echo get_search_query();?>'
    
<?php endif;?>