<?php
    get_header();
?>
 
    <?php
        while ( have_posts() ) : the_post();
        if ($terms = get_the_terms($post->ID, 'item_category')) {
            foreach ( $terms as $term ) {
                $term = $term->name;
            }
        }
    ?>
        <section id="mv">
            <h1>おすすめ商品</h1>
        </section>
        <?php $terms = get_the_terms($post->ID, 'tax_news'); ?>
        <section id="item_detail">
            <div class="maincontent new">
                <h2><?= title(); ?></h2>
                <p><?php the_content(); ?></p>
                <div class="cat">
                    <a href="<?= item().'?cat='.$term; ?>"><?= $term; ?></a>
                </div><!--cat-->
                <figure class="img"><?= eyecatch(); ?></figure>
                <figure class="btn_back">
                    <a href="<?= item(); ?>"><span></span>一覧ページへ戻る</a>
                </figure>
            </div><!--maincontent-->
        </section>
    <?php endwhile; ?>
 
<?php
get_footer();