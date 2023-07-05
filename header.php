<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo THEME_IMG_PATH; ?>/logo.svg">
    <title>Clickypoint</title>

    <?php wp_head();?> 

</head>
<body>

<header>

<nav>
  <div class="logo">
  <?php 
$image = get_field('logo', 'options');

if( !empty($image) ): ?>
<a href="https://www.clickypoint.com/">
	<img class="svgs svg-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</a>
<?php endif; ?>

  </div>
    <ul class="nav-links">
    <?php

if ( !wp_is_mobile() ) {
  wp_nav_menu(
    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-bar'
    )
);
} else {
  wp_nav_menu(
    array(
        'theme_location' => 'mobile-menu',
        'menu_class' => 'top-bar'
    )
);
}

        ?>
    </ul>  
    <?php get_search_form();?>
<!--   Mobile Navbar -->
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>

</header>


