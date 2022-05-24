<?php
    /* Template Name: 採用情報 */
    get_header();
?>

    <?php get_template_part( 'template-parts/page', 'tit' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div id="recruit_nav">
            <ul>
                <li><a href="#recruit01">求める人材像</a></li>
                <li><a href="#recruit02">先輩社員の声</a></li>
                <li><a href="#recruit03">募集要項</a></li>
            </ul>
        </div><!--recruit_nav-->

        <section id="recruit01">
            <div class="maincontent">
                <h2>求める人材像</h2>
                <ul>
                    <li><span><img src="<?= imgr(); ?>/recruit/ico_list.png" alt="icon"></span>小売業として創意工夫できる</li>
                    <li><span><img src="<?= imgr(); ?>/recruit/ico_list.png" alt="icon"></span>食品を扱うものとして責任感が強い</li>
                    <li><span><img src="<?= imgr(); ?>/recruit/ico_list.png" alt="icon"></span>接客業として顧客第一主義を理解し行動できる</li>
                </ul>
            </div><!--maincontent-->
        </section>

        <section id="recruit02">
            <div class="maincontent">
                <h2>先輩社員の声</h2>
                <div id="voice">
                    <dl>
                        <dt><img src="<?= imgr(); ?>/recruit/senpai01.jpg" alt=""></dt>
                        <dd>
                            <h3>富士屋 太郎さん<span>○○○店 ○○部門 店長</span></h3>
                            <p>当社のような地域密着型の企業でも全国展開の大手でも、流通業に共通する事ですが、新人で入社しても現場に配属となれば、自分の親かそれ以上の年齢のパートさん達が部下になります。何人もの人を使って目標を達成していくのがメインともいえる仕事ですから、学生時代とは違ったコミュニケーション能力が必要です。お客様に対してもスタッフに対しても、きちんとあいさつができるか、マナーが身に付いているかという事は社会人として大切な要素ですし、それらに加えて、上を目指していける上昇志向のある方に期待をしています。大きな企業の中で埋もれているよりは、早く店長になって采配を振るいたい、そういう思いのある人には当社は絶好のステージになると思います。</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt><img src="<?= imgr(); ?>/recruit/senpai02.jpg" alt=""></dt>
                        <dd>
                            <h3>富士屋 花さん<span>○○○店 ○○部門 店長</span></h3>
                            <p>当社のような地域密着型の企業でも全国展開の大手でも、流通業に共通する事ですが、新人で入社しても現場に配属となれば、自分の親かそれ以上の年齢のパートさん達が部下になります。何人もの人を使って目標を達成していくのがメインともいえる仕事ですから、学生時代とは違ったコミュニケーション能力が必要です。お客様に対してもスタッフに対しても、きちんとあいさつができるか、マナーが身に付いているかという事は社会人として大切な要素ですし、それらに加えて、上を目指していける上昇志向のある方に期待をしています。大きな企業の中で埋もれているよりは、早く店長になって采配を振るいたい、そういう思いのある人には当社は絶好のステージになると思います。</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt><img src="<?= imgr(); ?>/recruit/senpai03.jpg" alt=""></dt>
                        <dd>
                            <h3>富士屋 太郎さん<span>○○○店 ○○部門 店長</span></h3>
                            <p>当社のような地域密着型の企業でも全国展開の大手でも、流通業に共通する事ですが、新人で入社しても現場に配属となれば、自分の親かそれ以上の年齢のパートさん達が部下になります。何人もの人を使って目標を達成していくのがメインともいえる仕事ですから、学生時代とは違ったコミュニケーション能力が必要です。お客様に対してもスタッフに対しても、きちんとあいさつができるか、マナーが身に付いているかという事は社会人として大切な要素ですし、それらに加えて、上を目指していける上昇志向のある方に期待をしています。大きな企業の中で埋もれているよりは、早く店長になって采配を振るいたい、そういう思いのある人には当社は絶好のステージになると思います。</p>
                        </dd>
                    </dl>
                </div><!--voice-->
            </div><!--maincontent-->
        </section>

        <section id="recruit03">
            <div class="maincontent">
                <h2>募集要項</h2>
                <div id="guide">
                    <?= do_shortcode('[table id=2 /]'); ?>
                    <h3>マイナビ２０２２からエントリーをお願いします。</h3>
                    <figure class="ban"><a href="#"><img src="<?= imgr(); ?>/recruit/mynavi.png" alt="マイナビ2022"></a></figure>
                </div><!--guide-->
            </div><!--maincontent-->
        </section>
    <?php endwhile; ?>

<?php
get_footer();
