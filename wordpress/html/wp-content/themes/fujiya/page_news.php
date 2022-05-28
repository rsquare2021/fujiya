<?php
    /* Template Name: お知らせ一覧 */
    get_header();
?>

    <?php get_template_part( 'template-parts/page', 'tit' ); ?>
    <section id="news01">
        <div class="maincontent">
            <div id="news01_tab">
                <ul>
                    <li id="news01_tab01" class="active">すべて</li>
                    <li id="news01_tab02">お知らせ</li>
                    <li id="news01_tab03">重要なお知らせ</li>
                    <li id="news01_tab04">チラシ</li>
                </ul>
            </div><!--news_switch-->

            <!--01-->
            <div id="news01_cont01" class="news01_cont active">
                <ul>
                    <?php foreach (news_lists('all') as $post) : setup_postdata($post); ?>
                        <li><span class="date"><?= get_the_date('Y年m月d日'); ?> </span><a href="<?php the_permalink(); ?>"><?= title(); ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--news01_cont-->

            <!--02-->
            <div id="news01_cont02" class="news01_cont">
                <ul>
                    <?php foreach (news_lists('info') as $post) : setup_postdata($post); ?>
                        <li><span class="date"><?= get_the_date('Y年m月d日'); ?> </span><a href="<?php the_permalink(); ?>"><?= title(); ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--news01_cont-->

            <!--03-->
            <div id="news01_cont03" class="news01_cont">
                <ul>
                    <?php foreach (news_lists('important') as $post) : setup_postdata($post); ?>
                        <li><span class="date"><?= get_the_date('Y年m月d日'); ?> </span><a href="<?php the_permalink(); ?>"><?= title(); ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--news01_cont-->

            <!--04-->
            <div id="news01_cont04" class="news01_cont">
                <ul>
                    <?php foreach (news_lists('paper') as $post) : setup_postdata($post); ?>
                        <li><span class="date"><?= get_the_date('Y年m月d日'); ?> </span><a href="<?php the_permalink(); ?>"><?= title(); ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--news01_cont-->
        </div><!--maincontent-->
    </section>

<?php
get_footer();
