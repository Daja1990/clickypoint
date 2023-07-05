<?php get_header(); ?>

<div class="nopage-container">

<!-- <div class="gameheader"><h1 class="about-header">Oops... The page does not exist!</h1></div> -->


<!-- <img class="notfoundimg" src="<?php echo THEME_IMG_PATH; ?>/notfoundimg.jpg" alt="Game Over Screen"/> -->

<div class="notfoundimg"><h2 class="errorheader">404</h2><h2 class="about-header">Oops... The page does not exist!</h2></div>

<form>
 <input class="returnbtn" type="button" value="« Return to Last Page" onclick="history.back()">
</form>

</div>

<?php get_footer(); ?>