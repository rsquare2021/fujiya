<?php
    /* Template Name: トップページ */
    get_header();
?>

    <?php while ( have_posts() ) : the_post(); ?>
        <section id="home_mv">
            <div id="home_slide01">
                <ul>
                    <?php foreach (slides() as $post) : setup_postdata($post); ?>
                        <li><a href="#"><?= eyecatch(); ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--home_slide01-->
        </section>

        <section id="home_news">
            <div class="maincontent">
                <div id="home_news01">
                    <h2><span><img src="<?= imgr(); ?>/home/ico_news.png" alt=""></span><strong>新着情報</strong></h2>
                    <div id="home_news01_tab">
                        <ul>
                            <li id="home_news01_tab01" class="active">すべて</li>
                            <li id="home_news01_tab02">お知らせ</li>
                            <li id="home_news01_tab03">重要なお知らせ</li>
                            <li id="home_news01_tab04">チラシ</li>
                        </ul>
                    </div><!--home_news01_tab-->

                    <!--01-->
                    <div id="home_news01_cont01" class="home_news01_cont active">
                        <ul>
                            <?php foreach (news_lists('all') as $post) : setup_postdata($post); ?>
                                <li><span class="date"><?= get_the_date('Y年m月d日'); ?></span><a href="<?php the_permalink(); ?>"><?= title(); ?></a></li>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                        <figure class="btn_more"><a href="news01.html"><span></span>一覧を見る</a></figure>
                    </div><!--home_news01_cont-->

                    <!--02-->
                    <div id="home_news01_cont02" class="home_news01_cont">
                        <ul>
                            <?php foreach (news_lists('info') as $post) : setup_postdata($post); ?>
                                <li><span class="date"><?= get_the_date('Y年m月d日'); ?></span><a href="<?php the_permalink(); ?>"><?= title(); ?></a></li>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                        <figure class="btn_more"><a href="news01.html"><span></span>一覧を見る</a></figure>
                    </div><!--home_news02_cont-->

                    <!--03-->
                    <div id="home_news01_cont03" class="home_news01_cont">
                        <ul>
                            <?php foreach (news_lists('important') as $post) : setup_postdata($post); ?>
                                <li><span class="date"><?= get_the_date('Y年m月d日'); ?></span><a href="<?php the_permalink(); ?>"><?= title(); ?></a></li>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                        <figure class="btn_more"><a href="news01.html"><span></span>一覧を見る</a></figure>
                    </div><!--home_news02_cont-->

                    <!--04-->
                    <div id="home_news01_cont04" class="home_news01_cont">
                        <ul>
                            <?php foreach (news_lists('paper') as $post) : setup_postdata($post); ?>
                                <li><span class="date"><?= get_the_date('Y年m月d日'); ?></span><a href="<?php the_permalink(); ?>"><?= title(); ?></a></li>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                        <figure class="btn_more"><a href="news01.html"><span></span>一覧を見る</a></figure>
                    </div><!--home_news02_cont-->
                </div><!--home_news01-->

                <div id="home_news02">
                    <h2><span><img src="<?= imgr(); ?>/home/ico_info.png" alt=""></span><strong>お買い得！チラシ情報</strong></h2>
                    <ul>
                        <li><a href="https://tokubai.co.jp/%E5%AF%8C%E5%A3%AB%E5%B1%8B/42584/leaflets/27558511/show_for_widget?from=leaflet_navigation&origin_shop_id=42584" target="_blank"><dl>
                        <dt><img src="<?= imgr(); ?>/home/info_thum.jpg" alt=""></dt>
                        <dd>
                        <p class="date">2022年2月28日</p>
                        <p class="tit">ウルトラ一の市★3/1(火)～3/2(水)</p>
                        </dd>
                        </dl></a></li>
                        <li><a href="https://tokubai.co.jp/%E5%AF%8C%E5%A3%AB%E5%B1%8B/42584/leaflets/27558511/show_for_widget?from=leaflet_navigation&origin_shop_id=42584" target="_blank"><dl>
                        <dt><img src="<?= imgr(); ?>/home/info_thum.jpg" alt=""></dt>
                        <dd>
                        <p class="date">2022年2月28日</p>
                        <p class="tit">ウルトラ一の市★3/1(火)～3/2(水)ルトラ一の市</p>
                        </dd>
                        </dl></a></li>
                    </ul>
                    <p class="att">右記トクバイ店舗一覧ページからお気に入り店舗を登録できます。</p>
                    <figure class="btn_more"><a href="news02.html"><span></span>一覧を見る</a></figure>
                </div><!--home_news02-->
            </div><!--maincontent-->
        </section>

        <section id="home_choice">
            <div class="maincontent">
                <h2><strong>Fujiyaʼs Choice</strong><span>富⼠屋 商品・お買得情報</span></h2>
            </div><!--maincontent-->
            <div id="home_slide02">
                <ul>
                    <?php foreach (bargain_lists() as $post) : setup_postdata($post); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <dl>
                                <dt><?= eyecatch(); ?></dt>
                                <dd>
                                    <h4><?= title(); ?></h4>
                                    <p><?php the_content(); ?></p>
                                </dd>
                            </dl>
                            </a>
                        </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--home_slide02-->
            <div class="maincontent">
                <figure class="btn_more"><a href="#"><span></span>一覧ページへ戻る</a></figure>
            </div><!--maincontent-->
        </section>

        <section id="home_shop">
            <div class="maincontent">
                <h2><strong>Shop</strong><span>店舗</span></h2>
                <ul>
                    <?php foreach (shop_name_lists() as $post) : setup_postdata($post); ?>
                        <li><a href="<?= shoplist(); ?>#<?= $post->post_name; ?>"><?= title(); ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--maincontent-->
        </section>

        <section id="home_ban">
            <div class="maincontent">
                <ul>
                    <?php foreach (banner_lists() as $post) : setup_postdata($post); ?>
                        <li><a href=""><?= eyecatch(); ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!--maincontent-->
        </section>

        <section id="home_group">
            <div class="maincontent">
                <h2><span><img src="<?= imgr(); ?>/home/ico_group.png" alt=""></span><strong>関連企業/グループ</strong></h2>
                <ul>
                    <li><a href="http://www.ichimaru-grp.co.jp/"><img src="<?= imgr(); ?>/home/group01.jpg" alt="いちまるグループ"></a></li>
                    <li><a href="https://ichimaruhoming.jp/"><img src="<?= imgr(); ?>/home/group02.jpg" alt="いちまるホーミング"></a></li>
                    <li><a href="http://www.yaizureito.co.jp/"><img src="<?= imgr(); ?>/home/group03.jpg" alt="焼津冷凍"></a></li>
                    <li><a href="http://www.peaterpan.jp/"><img src="<?= imgr(); ?>/home/group04.jpg" alt="ピーターパン"></a></li>
                    <li><a href="https://www.cgcjapan.co.jp/"><img src="<?= imgr(); ?>/home/group05.jpg" alt="CGCジャパン"></a></li>
                </ul>
            </div><!--maincontent-->
        </section>

    <?php endwhile; ?>

<?php
get_footer();
