
<?php get_header(); ?>


<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="main_contents">
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<div class="entry-content">
			<?php the_content(); ?>
		</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>