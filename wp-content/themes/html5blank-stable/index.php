
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<!--<p>wow</p>-->
			<!--<p>not sure why</p>-->

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
