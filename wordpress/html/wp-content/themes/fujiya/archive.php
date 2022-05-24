<?php
	get_header();
?>

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();

				// 使わない場合は削除対象ファイル

			endwhile;

			// Previous/next page navigation.
			// ナビゲーション未設定

		else :

		endif;
		?>

<?php
get_footer();
