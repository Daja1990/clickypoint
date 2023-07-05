<?php

/*
Template Name: Top Games
*/

?>

<?php get_header(); ?>

<setion class="topgames-wrapper">

<div class="gameheader">Top 5 games</div>
<article class="top-game">

    <?php 

        $pagelink = get_field('first_place_link');
        $image = get_field('first_place_thumbnail');
        $preview = get_field('first_place_preview');
        $first_place_overall_rating = get_field( 'first_place_overall_rating' );
            if (get_field('first_place_link')) {
            ?><a href="<?php the_field('first_place_link'); ?>" class="topgamelink">
			<section class="topgamegrid">
            <div class="topgrid-1"><img src="<?php echo $image['sizes']['blog-large'];?>" class="img-fluid img-thumbnail"></div>
            <div class="text topgrid-2"><h2 class="topheader">#1 - <?php the_field('first_place_name');?></h2>
				
				<div class="topgrid-3"><p>Overall Rating:</p>
			
    <?php

	if ( $first_place_overall_rating ) {
		$average_stars = round( $first_place_overall_rating * 2 ) / 2;
		$drawn = 5;
		echo '<div class="star-rating">';
		// full stars.
		for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>';
		}

		// half stars.
		if ( $first_place_overall_rating - floor( $average_stars ) === 0.5 ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star-half-alt" class="svg-inline--fa fa-star-half-alt fa-w-17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512"><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"/></svg>';
		}

		// empty stars.
		for ( $i = 0; $i < $drawn; $i++ ) {
			echo '<svg aria-hidden="true" data-prefix="far" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>';
		}
		echo '</div>';
	    }
    ?>
</div>	
			<p><?php echo $preview;?></p></div>
            <div class="topgrid-3">
	<p class="underline">Read More</p>
</div>
	</section>
    </a><?php 
    } else {
        echo "<p id = 'id_name'>" . "Does not exist" . "</p>";
    }
    ?>

</article>

<section class="double-grid">

<article class="second-game">

    <?php 

        $pagelink = get_field('second_place_link');
        $image = get_field('second_place_thumbnail');
        $preview = get_field('second_place_preview');
        $second_place_overall_rating = get_field( 'second_place_overall_rating' );
            if (get_field('second_place_link')) {
            ?>
			<section class="secondgamegrid">
			<a href="<?php the_field('second_place_link'); ?>" class="topgamelink">
            <div class="topgrid-1"><img src="<?php echo $image['sizes']['blog-large'];?>" class="img-fluid img-thumbnail"></div>
            <div class="text topgrid-2"><h2 class="topheader">#2 - <?php the_field('second_place_name');?></h2>
				
				 <div class="topgrid-3"><p>Overall Rating:</p>
			
    <?php

	if ( $second_place_overall_rating ) {
		$average_stars = round( $second_place_overall_rating * 2 ) / 2;
		$drawn = 5;
		echo '<div class="star-rating">';
		// full stars.
		for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>';
		}

		// half stars.
		if ( $second_place_overall_rating - floor( $average_stars ) === 0.5 ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star-half-alt" class="svg-inline--fa fa-star-half-alt fa-w-17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512"><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"/></svg>';
		}

		// empty stars.
		for ( $i = 0; $i < $drawn; $i++ ) {
			echo '<svg aria-hidden="true" data-prefix="far" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>';
		}
		echo '</div>';
	    }
    ?>
</div>
				
			<p><?php echo $preview;?></p></div>
            <div class="topgrid-3">
				
	<p class="underline">Read More</p>
</div>
	</section>
    </a><?php 
    } else {
        echo "<p id = 'id_name'>" . "Does not exist" . "</p>";
    }
    ?>

</article>

<article class="second-game">

    <?php 

        $pagelink = get_field('third_place_link');
        $image = get_field('third_place_thumbnail');
        $preview = get_field('third_place_preview');
        $third_place_overall_rating = get_field( 'third_place_overall_rating' );
            if (get_field('third_place_link')) {
            ?>
			<section class="secondgamegrid">
			<a href="<?php the_field('third_place_link'); ?>" class="topgamelink">
            <div class="topgrid-1"><img src="<?php echo $image['sizes']['blog-large'];?>" class="img-fluid img-thumbnail"></div>
            <div class="text topgrid-2"><h2 class="topheader">#3 - <?php the_field('third_place_name');?></h2>
				
			<div class="topgrid-3">
				<p>Overall Rating:</p>
			
    <?php

	if ( $third_place_overall_rating ) {
		$average_stars = round( $third_place_overall_rating * 2 ) / 2;
		$drawn = 5;
		echo '<div class="star-rating">';
		// full stars.
		for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>';
		}

		// half stars.
		if ( $third_place_overall_rating - floor( $average_stars ) === 0.5 ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star-half-alt" class="svg-inline--fa fa-star-half-alt fa-w-17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512"><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"/></svg>';
		}

		// empty stars.
		for ( $i = 0; $i < $drawn; $i++ ) {
			echo '<svg aria-hidden="true" data-prefix="far" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>';
		}
		echo '</div>';
	    }
    ?>
			</div>
				
			<p><?php echo $preview;?></p></div>
            <div class="topgrid-3">
	<p class="underline">Read More</p>
</div>
	</section>
    </a><?php 
    } else {
        echo "<p id = 'id_name'>" . "Does not exist" . "</p>";
    }
    ?>

</article>
</section>

<section class="double-grid">

<article class="second-game">

    <?php 

        $pagelink = get_field('fourth_place_link');
        $image = get_field('fourth_place_thumbnail');
        $preview = get_field('fourth_place_preview');
        $fourth_place_overall_rating = get_field( 'fourth_place_overall_rating' );
            if (get_field('fourth_place_link')) {
            ?>
			<section class="secondgamegrid">
			<a href="<?php the_field('fourth_place_link'); ?>" class="topgamelink">
            <div class="topgrid-1"><img src="<?php echo $image['sizes']['blog-large'];?>" class="img-fluid img-thumbnail"></div>
            <div class="text topgrid-2"><h2 class="topheader">#4 - <?php the_field('fourth_place_name');?></h2>
			<div class="topgrid-3">
				<p>Overall Rating:</p>
			
    <?php

	if ( $fourth_place_overall_rating ) {
		$average_stars = round( $fourth_place_overall_rating * 2 ) / 2;
		$drawn = 5;
		echo '<div class="star-rating">';
		// full stars.
		for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>';
		}

		// half stars.
		if ( $fourth_place_overall_rating - floor( $average_stars ) === 0.5 ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star-half-alt" class="svg-inline--fa fa-star-half-alt fa-w-17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512"><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"/></svg>';
		}

		// empty stars.
		for ( $i = 0; $i < $drawn; $i++ ) {
			echo '<svg aria-hidden="true" data-prefix="far" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>';
		}
		echo '</div>';
	    }
    ?>
			</div>
				
			<p><?php echo $preview;?></p></div>
            <div class="topgrid-3">
	<p class="underline">Read More</p>
</div>
	</section>
    </a><?php 
    } else {
        echo "<p id = 'id_name'>" . "Does not exist" . "</p>";
    }
    ?>

</article>

<article class="second-game">

    <?php 

        $pagelink = get_field('fifth_place_link');
        $image = get_field('fifth_place_thumbnail');
        $preview = get_field('fifth_place_preview');
        $fifth_place_overall_rating = get_field( 'fifth_place_overall_rating' );
            if (get_field('fifth_place_link')) {
            ?>
			<section class="secondgamegrid">
			<a href="<?php the_field('fifth_place_link'); ?>" class="topgamelink">
            <div class="topgrid-1"><img src="<?php echo $image['sizes']['blog-large'];?>" class="img-fluid img-thumbnail"></div>
            <div class="text topgrid-2"><h2 class="topheader">#5 - <?php the_field('fifth_place_name');?></h2>
			<div class="topgrid-3">
				<p>Overall Rating:</p>
			
    <?php

	if ( $fifth_place_overall_rating ) {
		$average_stars = round( $fifth_place_overall_rating * 2 ) / 2;
		$drawn = 5;
		echo '<div class="star-rating">';
		// full stars.
		for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>';
		}

		// half stars.
		if ( $fifth_place_overall_rating - floor( $average_stars ) === 0.5 ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star-half-alt" class="svg-inline--fa fa-star-half-alt fa-w-17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512"><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"/></svg>';
		}

		// empty stars.
		for ( $i = 0; $i < $drawn; $i++ ) {
			echo '<svg aria-hidden="true" data-prefix="far" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>';
		}
		echo '</div>';
	    }
    ?>
			</div>
				
			<p><?php echo $preview;?></p></div>
            <div class="topgrid-3">
	<p class="underline">Read More</p>
</div>
	</section>
    </a><?php 
    } else {
        echo "<p id = 'id_name'>" . "Does not exist" . "</p>";
    }
    ?>

</article>
</section>

</setion>

<?php get_footer(); ?>