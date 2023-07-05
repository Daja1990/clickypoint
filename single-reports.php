<?php get_header(); ?>
<section class="review-wrap">
    <div class="container">

	<div class="singlehero" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo the_post_thumbnail_url(); ?>);"><h1 class="heroh1-report"><?php the_title(); ?><span class="whitetxt"> Report</span></h1>
</div>


<?php if(have_rows('contents_img_text') ):?>

<?php while( have_rows('contents_img_text') ): the_row();?>


<?php if(get_row_layout() == 'textarea_with_image'):

	$header = get_sub_field('header');
	$content = get_sub_field('content');
	$image = get_sub_field('image');
	$picture = $image['sizes']['blog-large'];
?>

		<h3 class="singleh3"><?php echo $header;?></h3>
		<div class="article-p">
		<?php echo $content;?>
		</div>
		<div class="gallery mb-5">
		<a href="<?php echo $image['sizes']['blog-extralarge'];?>">
			<img src="<?php echo $picture;?>" class="img-fluid img-thumbnail singleimg">
		</a>
	</div>

<?php endif;?>

<?php endwhile;?>

<?php endif ;?>

<?php 
$images = get_field('gallery');
if( $images ): ?>

<h3 class="singleh3">Gallery</h3>

<div class="gallery mb-5 bot-gallery">
        <?php foreach( $images as $image ): ?>
			<a class="post-img" href="<?php echo $image['sizes']['blog-large'];?>">
                    <img src="<?php echo $image['sizes']['blog-small'];?>" class="img-fluid img-thumbnail">
                </a>
				
				<?php endforeach; ?>
			</div>

<?php endif; ?>

<form>
 <input class="returnbtn" type="button" value="« Return to Last Page" onclick="history.back()">
</form>

</div>


<?php get_footer(); ?>