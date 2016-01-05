<?php
// Template Name: Home Log
get_header(); ?>

<style type="text/css">
	body{
		background: #fff;
	}

	#wrapper{
		width: 100%;
	}

	#main{
		padding: 0;
	}

	#main .avada-row{
		width: 100%;
		max-width: 100%;
	}

	.header-line{
		background: #A30930;
		width: 100%;
		height: 44px;
		border-bottom: 1px solid #000;
	}

	.entry{
		max-width: 1024px;
		margin: auto;
		padding: 20px 2% 0 2%;
	}

	.entry p{
		clear: both;
	}

	#footer{
		margin-top: 30px;
	}

</style>

<div class="header-line"></div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="entry">
 		<?php the_content(); ?>
 	</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>