<?php

/*
Template Name: About Page
*/

?>

<?php 

$abouttext = get_field('about_text');
$image = get_field('about_image');

?>

<?php get_header(); ?>
<section class="page-wrap">
    <div class="about-container">
 
        <div class="gameheader"><h1 class="about-header">About Page</h1></div>

        <div class="main">
    <div class="child child-one">
        <div class="content">
            <div class="content-child">

            <p><?php echo $abouttext;?></p>

            </div>
        </div>
    </div>
    <div class="child child-two">

    <?php 
        $image = get_field('about_image');
        if( !empty( $image ) ): ?>
            <img class="aboutimg" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    </div>
</div>

    </div>
</section>

<?php get_footer(); ?>

