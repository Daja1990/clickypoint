<!-- If we have a post for the specific page we are on, while we are on that page show the post -->

<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="archive-min-post">

    <?php if(has_post_thumbnail()):?>
        <a href="<?php the_permalink();?>">
<!--             <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>> -->
			<?php the_post_thumbnail(  'blog-small', [ 'class' => 'img-fluid mb-3 img-thumbnail', 'alt' => '<?php the_title();?>'] ); ?>
			
            <!-- Code under here works if you do not have gd on
            (uncomment "extension=gd" in "xampp/php/php.ini" and restart XAMPP to activate it!) -->
            <!-- <?php the_post_thumbnail(  'blog-small', [ 'class' => 'img-fluid mb-3 img-thumbnail', 'alt' => '<?php the_title();?>'] ); ?> -->

        <?php endif;?>

        <div class="blog-content">

            <h3 class="h3-style"><?php the_title(); ?></h3>
        
            <span class="excerpt-style"><?php the_excerpt();?></span>
        
            <!-- Excerpt makes sure not whole text is showing, just a preview. Cuts it off at a given point -->
            <p class="p-style">Read More</p>
           
        </a>
            <!-- Linking archive to its respective post -->

        </div>
</div>

<?php endwhile; else: echo "<h2 class='empty-h2'>" . "This archive is empty" . "</h2>";
 endif;?>