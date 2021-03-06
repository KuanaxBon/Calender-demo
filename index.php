<?php

include 'creds.php';

get_header();
?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<h1><?php echo $API_key;?></h1>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
