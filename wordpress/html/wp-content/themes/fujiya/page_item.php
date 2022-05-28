<?php
    /* Template Name: おすすめ商品 */
    get_header();
    $cat = filter_input(INPUT_GET, 'cat');
    if(!$cat) {
        $cat = '';
    }
?>

    <?php get_template_part( 'template-parts/page', 'tit' ); ?>
    <div id="sort">
        <form>
            <div class="form_select">
                <select name="cat">
                    <option value="">カテゴリ</option>
                    <?php
                        $terms = get_terms('item_category');
                        foreach ( $terms as $term ) {
                            echo '<option value="'.item().'?cat='.$term->name.'">'.$term->name.'</option>';
                        }
                    ?>
                </select>
            </div><!--form_select-->
        </form>
    </div><!--sort-->
    <section id="item_list">
        <div class="maincontent">
            <ul>
                <?php
                    foreach (item_items($cat) as $post) : setup_postdata($post);
                    if ($terms = get_the_terms($post->ID, 'item_category')) {
                        foreach ( $terms as $term ) {
                            $term = $term->name;
                        }
                    }
                ?>
                    <li class="new">
                        <figure><a href="<?php the_permalink(); ?>"><?= eyecatch(); ?></a></figure>
                        <h4><a href="<?php the_permalink(); ?>"><?= title(); ?></a></h4>
                        <p><?php the_excerpt(); ?></p>
                        <span class="cat"><a href="<?= item().'?cat='.$term; ?>"><?= $term; ?></a></span>
                    </li>
                <?php endforeach; wp_reset_postdata(); ?>
            </ul>
        </div><!--maincontent-->
    </section>

<?php
get_footer();
