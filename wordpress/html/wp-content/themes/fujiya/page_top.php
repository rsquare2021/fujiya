<?php
    /* Template Name: トップページ */
    get_header();
?>
    <?php while ( have_posts() ) : the_post(); ?>
        
    <?php endwhile; ?>

<?php
get_footer();
