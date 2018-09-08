<?php
/**
 * Template Name: Main Page
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
		
		<div class="start_quiz">
			<a href="/vote">Start <i></i></a>
		</div>
		</div>
		</div>
	</div>
	</section>
	<?php endwhile; // End of the loop.?>
	<section id="infos">
		<div class="container">			
			<div class="row voz_border">				
					<div class="voz_menu">						
					<i class="sv_list"></i>
					 <span class="menu_header">Additional infos</span>
					<i class="sv_opener float-right"></i>
				    </div>						
			</div>
			<div class="row voz_border" id="menu_content">
				<ul class="menu-childs">
					<li><a href="http://voz.com/how-does-this-tool-work/"><i class="check_icon"></i>How does this tool work?</a></li>
					<li><a href="http://voz.com/insights-about-election/"><i class="step_icon"></i>Insights about election</a></li>
					<li><a href="http://voz.com/how-does-this-election-work/"><i class="copy_icon"></i>How does this election work</a></li>
					<li><a href="http://voz.com/for-media/"><i class="doc_icon"></i>For Media</a></li>					
				</ul>
			</div>
			<div class="row info_link">
				<a href="http://voz.com/imprint/"><i class="info_icon"></i>Imprint</a>
			</div>
		</div>
	</section>
	<section id="social_links">
		<div class="container">			
			<div class="row">
				<ul class="social_list">
					<li><a href="#"><i class="facebook"></i></a></li>
					<li><a href="#"><i class="twitter"></i></a></li>
					<li><a href="#"><i class="email"></i></a></li>
					<li><a href="#"><i class="whatsapp"></i></a></li>
				</ul>
			</div>
		</div>		
	</section>

		

		
<?php
get_sidebar();
get_footer();
