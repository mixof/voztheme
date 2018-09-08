<?php
/**
 * Template Name: Info Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>

		<?php
		while ( have_posts() ) : the_post();
?>	


		

<section id="questions-block">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
		<h1><?php the_title() ?></h1>
		
			<?php the_content(); ?>
		
		</div>
		<div class="back_page">
			<a href="/"><i></i>  Back</a>
		</div>
		</div>
	</div>
	</section>
	<?php endwhile; // End of the loop.?>
			
<?php
get_sidebar();
get_footer();
