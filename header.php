<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package voz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="logo">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Voz 2018"></a>
					</div>
				</div>
			</div>
		</div>
	</header>

