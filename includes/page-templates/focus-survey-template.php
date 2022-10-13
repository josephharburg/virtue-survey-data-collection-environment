<?php
/**
 * Template Name: Focus Survey Template
 *
 */
?>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<!-- style="background:linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)),url(https://restoredinchrist.openlightmedia.com/wp-content/uploads/2022/02/virtue-survey-bg.png)"> -->
<body <?php body_class(); ?> style="background:url(https://restoredinchrist.openlightmedia.com/wp-content/uploads/2022/07/new-better-bg-resized.png)">
<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<?php	the_content(); ?>
							</div>
					</div>
					<?php	endwhile;// End of the loop.?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- #content -->
	</div><!-- #page -->
	<footer>
	<?php wp_footer(); ?>
	</footer>
</body>
</html>
