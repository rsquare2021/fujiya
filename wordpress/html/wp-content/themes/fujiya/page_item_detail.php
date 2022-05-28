<?php
    /* Template Name: おすすめ商品 */
    get_header();
?>

    <?php get_template_part( 'template-parts/page', 'tit' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div id="sort">
            <form>
                <div class="form_select">
                    <select>
                        <option value="">カテゴリ</option>
                    </select>
                </div><!--form_select-->
            </form>
        </div><!--sort-->
        <section id="item_list">
            <div class="maincontent">
                <ul>
                    <?php foreach (bargain_items('all') as $post) : setup_postdata($post); ?>
                        <li class="new">
                            <figure><a href="<?php the_permalink(); ?>"><?= eyecatch(); ?></a></figure>
                            <h4><a href="<?php the_permalink(); ?>"><?= title(); ?></a></h4>
                            <p><?php the_excerpt(); ?></p>
                            <span class="cat"><a href="#">米・レトルトご飯・餅</a></span>
                        </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--maincontent-->
        </section>
    <?php endwhile; ?>

<?php
get_footer();
