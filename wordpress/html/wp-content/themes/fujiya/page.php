<?php
	get_header();
?>

	<h1 class="tmpN_tit-h1"><?php the_title(); ?></h1>
    <?php // get_template_part( 'template-parts/content/content', 'nav' ); ?>

    <?php while ( have_posts() ) : the_post(); ?>

	

    <?php endwhile; ?>

<?php
get_footer();
