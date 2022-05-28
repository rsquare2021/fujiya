<?php
    /* Template Name: コジカポイントカード */
    get_header();
?>

    <?php get_template_part( 'template-parts/page', 'tit' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <section id="sec01">
            <div class="maincontent">
                <div id="cogca_tit">
                    <div id="cogca_tit_in">
                        <div id="cogca_tit_top"><span>年</span><span>会</span><span>費</span><span>無</span><span>料</span><span>！</span></div><!--cogca_tit_top-->
                        <h2><strong>電⼦マネー付き</strong>で<br class="smp">お⽀払いラクラク！</h2>
                    </div>
                </div><!--cogca_tit-->
                <div class="card">
                    <ul>
                        <li><img src="images/cogca/card01.png" alt=""></li>
                        <li><img src="images/cogca/card02.png" alt=""></li>
                    </ul>
                    <p class="att">※発⾏⼿数料200円(税込) ※クレジットカードではありません。</p>
                </div><!--card-->
                <div id="cogca_tokuten">
                    <dl>
                        <dt><h3>5つのお得な特典</h3></dt>
                        <dd>
                            <ul>
                                <li><span>1</span>お買い物200円(税抜)ごとに<br class="smp">1ポイント贈呈！</li>
                                <li><span>2</span>必要な時にいつでも500ポイント単位で<br class="smp">500円分のお買い物にご利⽤いただけます！</li>
                                <li><span>3</span>素敵なカタログ商品と<br class="smp">交換していただけます！</li>
                                <li><span>4</span>会員様特典として、各種ポイント企画や<br class="smp">ご優待が盛りだくさん！</li>
                                <li><span>5</span>ポイントのご利⽤に<br class="smp">有効期限はございません！</li>
                            </ul>
                        </dd>
                    </dl>
                </div><!--cogca_tokuten-->
                </div><!--maincontent-->
            </section>

            <section id="sec02">
                <div class="maincontent">
                    <h2><span><img src="images/cogca/tit_ico1.png" alt=""></span><strong>カタログ商品の交換⽅法</strong></h2>
                    <ul>
                        <li><p>カタログからご希望の商品を⾒て<br class="smp">ポイントを確認してください。</p></li>
                        <li><p>交換に必要なポイントを<br class="smp">サービスカウンターで出してもらいます。<br>
                        この際、<strong class="red">「ポイントの書かれた紙」</strong>を<br class="smp">お渡しします。</p></li>
                        <li><p>お店に備え付けのカタログ商品の<br class="smp"><strong class="red">「商品交換申込書」</strong>に<br class="pc">ご希望商品名ほか<br class="smp">必要事項を記⼊してください。</p></li>
                        <li><p><strong class="red">「ポイントの書かれた紙」</strong>と、<br class="smp">カタログ商品の<strong class="red">「商品交換申込書」</strong>を<br>サービスカウンターにお出しください。<br class="smp">（必ず控えをお預かりください。）</p></li>
                        <li><p>1〜2週間後にご⾃宅に商品が届きます。</p></li>
                    </ul>
                </div><!--maincontent-->
            </section>

            <section id="sec03">
                <div class="maincontent">
                    <h2><span><img src="images/cogca/tit_ico2.png" alt=""></span><strong>街中で使える！<br class="smp">わくわくカード提携店</strong></h2>
                    <div id="sec03_tab">
                        <ul>
                            <li id="sec03_tab01" class="active">東名店周辺</li>
                            <li id="sec03_tab02">焼津三丁⽬店周辺</li>
                            <li id="sec03_tab03">焼津南店周辺</li>
                            <li id="sec03_tab04">⽥尻北店周辺</li>
                            <li id="sec03_tab05">五⼗海店周辺</li>
                            <li id="sec03_tab06">⾼洲店周辺</li>
                            <li id="sec03_tab07">瀬名店周辺</li>
                        </ul>
                    </div><!--sec03_tab-->
                    <!--01-->
                    <div class="sec03_cont active" id="sec03_cont01">
                        <?= do_shortcode('[table id=3 /]'); ?>
                    </div><!--sec03_cont-->
                    <!--02-->
                    <div class="sec03_cont" id="sec03_cont02">
                        <?= do_shortcode('[table id=4 /]'); ?>
                    </div><!--sec03_cont-->
                    <!--03-->
                    <div class="sec03_cont" id="sec03_cont03">
                        <?= do_shortcode('[table id=5 /]'); ?>
                    </div><!--sec03_cont-->
                    <!--04-->
                    <div class="sec03_cont" id="sec03_cont04">
                        <?= do_shortcode('[table id=6 /]'); ?>
                    </div><!--sec03_cont-->
                    <!--05-->
                    <div class="sec03_cont" id="sec03_cont05">
                        <?= do_shortcode('[table id=7 /]'); ?>
                    </div><!--sec03_cont-->
                    <!--06-->
                    <div class="sec03_cont" id="sec03_cont06">
                        <?= do_shortcode('[table id=8 /]'); ?>
                    </div><!--sec03_cont-->
                    <!--07-->
                    <div class="sec03_cont" id="sec03_cont07">
                        <?= do_shortcode('[table id=9 /]'); ?>
                    </div><!--sec03_cont-->
                </div><!--maincontent-->
            </section>
    <?php endwhile; ?>

<?php
get_footer();
