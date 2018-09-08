<?php
/**
 * Template Name: Vote Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

?>	
<style type="text/css">
body{
	background: url("<?php echo get_template_directory_uri(); ?>/img/bgg.jpg") no-repeat center center fixed;
}
</style>
<section id="quiz-block">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

		<h2 class="question_title">Do you support privatizations?</h1>
		<div class="question_text">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	  </div>
	  <div class="questions_control">
	  		<div class="question_numbers">
	  			<span class="current_q">13</span>
	  			/
	  			<span class="total_q">36</span>
	  		</div>
	  	<div class="prev_question"><i></i></div>
	  	<div class="questions_progress">
	  		<span class="progress"></span>
	  	</div>
	  	<div class="next_question"><i></i></div>
	  </div>

	  <div class="info_buttons">
	  	<a href="#"><i class="skip_icon"></i></a>
	  	<a href="#"><i class="info_icn"></i></a>
	  </div>
		
		</div>
		</div>		
	</div>

	</section>
	<div class="answer_controls">
	<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-4">		
				<a href="#" id="yes_a">Concordo</a>			
				</div>
			    <div class="col-xs-12 col-md-12 col-lg-4">	
			    	<a href="#" id="neutral_a">Neutro</a>
			    </div>
			    <div class="col-xs-12 col-md-12 col-lg-4">	
			    	<a href="#" id="no_a">Discordo</a>
			    </div>
			</div>
		</div>
	</div>
			
<?php
get_sidebar();
get_footer();
