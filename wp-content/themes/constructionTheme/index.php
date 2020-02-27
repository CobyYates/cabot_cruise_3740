<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>  
	<div class="row">
		<div class="column">
			<?php the_title('<h1>','</h1>'); ?>
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>