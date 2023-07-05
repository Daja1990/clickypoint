<!-- <div class="example">
<img class="heroimg" src="<?php echo THEME_IMG_PATH; ?>/Image 4.png" alt=""/>
  <div class="overlay">
    Multi-line <br/>text
  </div>
</div> -->

<section class="first-section">

    <section class='hero-header'>
        <h1 class="first-h1">Welcome to ClickyPoint</h1>
        <p>My thoughts about the vast Point and Click Adventure games I play!</p>
        <a href="https://clickypoint.com/games/"><button class="cta">Game Reviews</button></a>
        <a href="https://clickypoint.com/reports/"><button class="cta">Game News</button></a>
    </section>

<div class="center">

<h2 class="first-h">Newest Blog Entries</h2>

<section class="classmain">


<?php
// $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
$args = array( 'post_type' => 'Reviews', 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
$postslist = get_posts( $args );
foreach ($postslist as $index => $post) :  setup_postdata($post); ?> 
    <div id="post-<?php the_ID(); ?>" class="testrun post<?= $index ?>">
        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">
        <br />
        <!-- <?php the_date(); ?> -->
        <br />
        <h2><?php the_title(); ?></h2>
        <br />
        <p><?php the_excerpt(); ?></p>
        <br />
        <a href="<?= the_permalink();?>"><button>Read More</button></a>
    </div>
<?php endforeach; ?>

</section>
</div>

<div class="classmain2">
        <div class="flex-item">
        <a href="https://clickypoint.com/games/">
        <img class="svgs" src="<?php echo THEME_IMG_PATH; ?>/gamepad-solid.svg" alt="Gamepad Icon"/>
          <p>Review Subgenres</p>
        </a>
        </div>
        <div class="flex-item">
          <a href="https://clickypoint.com/reviews/">
        <img class="svgs" src="<?php echo THEME_IMG_PATH; ?>/save-regular.svg" alt="Floppy Disk Icon"/>
          <p>View Archived Posts</p>
          </a>
        </div>
        <div class="flex-item">
          <a href="https://clickypoint.com/top-games/">
        <img class="svgs" src="<?php echo THEME_IMG_PATH; ?>/trophy-solid.svg" alt="Trophy Icon"/>
          <p>Top 5 Games</p>
        </a>
        </div>

</div>

</section>

<section>
<?php 
$post_id = 15;
?>

<?php if ( get_field( 'special_post', $post_id ) ): ?>

<div class="specialpost" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('special_cover', $post_id); ?>);">
    <h3 class="specialhero"><?php the_field('special_header', $post_id);?></h3>
    <p class="specialp"><?php the_field('special_text', $post_id);?></p>
    <a href="<?php the_field('special_link', $post_id);?>"><button class="specialbutton">Click me</button></a>
</div>
	
<?php else: // field_name returned false ?>

<?php endif; // end of if field_name logic ?>
	
</section>

<section class="second-section">
  <div class="newgames" id="newgames" onclick="switchVisible();">Newest Game Reviews</div>
  <div class="upcominggames" id="upcominggames" onclick="switchVisible2();"><p>Latest News</p></div>
  <div class="news-box">

    <div class="games1" id="games1">
      <h2 class="newgames-h2">Here are the newest game reviews!</h2>
    <?php


// Posts by tag name
$args = array( 'post_type' => 'Reviews', 'numberposts' => 6 );
$query = new WP_Query( $args );
$postslist = get_posts( $args );
foreach ($postslist as $index => $post) :  setup_postdata($post); ?> 
    <div id="post-<?php the_ID(); ?>" class="testrun2 newpost<?= $index ?>">
    <a href="<?= the_permalink();?>">
    <div class="img-wrapper">
        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">
        </div>
        <br />
        <h2><?php the_title(); ?></h2>
        <br />
    </a>
    </div>

<?php endforeach; ?>
    </div>

    <div class="games2" id="games2">
    <h2 class="newgames-h2">Here are some of the latest news from the adventure genre!</h2>
    <?php

$args = array( 'post_type' => 'Reports', 'numberposts' => 6 );
$query = new WP_Query( $args );
$postslist = get_posts( $args );
foreach ($postslist as $index => $post) :  setup_postdata($post); ?> 
    <div id="post-<?php the_ID(); ?>" class="testrun2 newpost<?= $index ?>">
    <a href="<?= the_permalink();?>">
    <div class="img-wrapper">
        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">
        </div>
        <br />
        <h2><?php the_title(); ?></h2>
        <br />
    </a>
    </div>

<?php endforeach; ?>
    </div>
  </div>

</section>