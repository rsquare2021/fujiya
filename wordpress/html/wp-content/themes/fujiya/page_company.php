<?php
    /* Template Name: 会社案内 */
    get_header();
?>

    <?php get_template_part( 'template-parts/page', 'tit' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div id="company_nav">
            <ul>
                <li><a href="#message">社長ご挨拶</a></li>
                <li><a href="#sec01">企業理念</a></li>
                <li><a href="#sec03">環境への取り組み</a></li>
                <li><a href="#sec04">会社概要</a></li>
                <li><a href="#sec05">グループ・関連会社 </a></li>
            </ul>
        </div><!--company_nav-->

        <section id="message">
            <div class="maincontent">
                <h2><span><img src="<?= imgr(); ?>/company/tit_ico0.png" alt=""></span><strong>社長ご挨拶</strong></h2>
                <dl>
                    <dt><img src="<?= imgr(); ?>/company/img0.jpg" alt=""></dt>
                    <dd>
                        <h3>「地元と共に発展する企業として、<br>多くのお客様から喜ばれる<br>スーパーマーケットでありたい！」</h3>
                    </dd>
                </dl>
                <p>お蔭様で当社は創業より60年を数えるスーパーマーケットであります。<br>
                正にご愛顧下さるお客様、ご支援下さるお取引先様のおかげと、深く感謝申し上げます。<br>
                私共の役割は、日々の食卓応援であり、常に地元のお客様に支えられ、“地域を共に”を念頭に、地域の文化・生活の発展向上に少しでも寄与出来ればと考える次第です。<br>
                又、進むべき方向として“感じの良い店づくり”を実践する為、お客様が来店されて良かったと思って頂けるよう、店舗の広い方を環境に合わせて変化する工夫を最大限に進めて参りたいと思います。<br>
                又、当社創業よりの理念である“より良い品をより安く”は、根底に流れる消費生活を、少しでも豊かにしたい、より楽しい食生活を日々過ごして頂きたいという願いの歴史でもあります。<br>
                環境変化が厳しい昨今だからこそ、全ての従業員がその課題をよく理解し、自ら「考え」、問題解決の為に取り組んでいかなければなりません。<br>
                一人一人が与えられた役割の中、自ら進んで知恵を出し、工夫を重ねて厳しい環境でも前向きに進んでいく人を応援する企業でもありたいと思います。<br>
                環境が厳しいからこそ、私たちの役割（ライフラインを守る使命）は大事となります。<br>
                お客様から喜ばれるお店となるよう成長して参りたいと思います。<br>
                皆様からの変わらぬご支援の程、宜しくお願い申し上げます。</p>
                <p class="sign">代表取締役社長　木村明正</p>
            </div><!--maincontent-->
        </section>

        <section id="sec01">
            <div class="maincontent">
                <h2><span><img src="<?= imgr(); ?>/company/tit_ico1.png" alt=""></span><strong>企業理念</strong></h2>
                <dl>
                    <dt><img src="<?= imgr(); ?>/company/img1.jpg" alt=""></dt>
                    <dd>
                        <p>富⼠屋は常に地域に密着したサービスを展開し、⽣鮮⾷品を中⼼に<br class="pc">「より良い品」を「より安く」をモットーに消費者に⽀持される店作りを⽬指して<br class="pc">⽇々努めております。<br>
                    単にモノを売るだけでなく、⽣活⽂化を提案するスーパーマーケットとして成⻑しています。</p>
                    </dd>
                </dl>
                <h4><strong>お役に立って幸せです。</strong><strong>お客様のお役に立って幸せです。</strong><strong>社会のお役に立って幸せです。</strong><strong>社員のお役に立って幸せです。</strong></h4>
                <p>毎日の食卓に必要な新鮮な食材を提供するスーパーマーケットは、現代社会の生活に不可欠な存在です。昨今の流通業界は、大型店、専門店、コンビニエンスストア、通信販売など多様化が進んでいます。しかしどんなに多様化が進もうと、日々の食生活にもっとも深く関わっているのは、常に地域に密着したサービスを提供しているスーパーマーケットです。<br>
                富士屋は静岡県中部地区を中心に８店舗を展開。各地域の特性を熟慮し、各地域のお客様のニーズに合う個性的な店舗、サービスを展開しています。そして高度なマーチャンダイジングのノウハウを生かし、経営、商品、サービスのあらゆる面で、ベストコンディションでお客様のニーズにお応えできるよう、努力を重ねています。<br>
                現代は、私たちの食生活をとりまく環境は大きな転換を迎えています。手軽さ、便利さの重視の時代から、産地、添加物、環境問題など健康や安全を考慮し、食生活の本質を見直す時代へと。それらの変化をいち早くキャッチし、適切に対応していくことが、私たちスーパーマーケットの使命です。そのために、「売る、作る立場」から「使う、買う」立場へと意識をシフトし、お客様の気持ちになって商品、サービスを考えることを何よりも重視しています。毎日の食材の販売に特別な仕掛けは不要です。お客様に、毎日心地よくお買物をしていただくためには、店、商品、スタッフのサービス、すべてにおいて新鮮さ、豊かさ、正確さが必要です。地域のお客様のライフスタイルに自然に溶け込み、日々新鮮なおいしさと情報を提案できる身近なスーパーマーケットとして、富士屋はこれからも前進を続けていきます。</p>
            </div><!--maincontent-->
        </section>

        <section id="sec03">
            <div class="maincontent">
                <h2><span><img src="<?= imgr(); ?>/company/tit_ico3.png" alt=""></span><strong>環境への取り組み</strong></h2>
                <dl>
                    <dt><h3><strong>環境自主行動計画</strong></h3></dt>
                </dl>
                <dl>
                    <dt><h3><span><img src="<?= imgr(); ?>/company/ico_plan.png" alt=""></span><strong>基本理念</strong></h3></dt>
                    <dd>
                        <p>お客様・従業員と共に、環境負担の少ない地域社会の構築を目指します。</p>
                    </dd>
                </dl>
                <dl>
                    <dt><h3><span><img src="<?= imgr(); ?>/company/ico_plan.png" alt=""></span><strong>基本方針</strong></h3></dt>
                    <dd>
                        <ol>
                            <li><span>１.</span>省資源、省エネルギーの取り組みを積極的に行います。</li>
                            <li><span>２.</span>全社従業員を挙げて環境意識向上を目指します。</li>
                        </ol>
                    </dd>
                </dl>
                <dl>
                    <dt><h3><span><img src="<?= imgr(); ?>/company/ico_plan.png" alt=""></span><strong>行動計画</strong></h3></dt>
                    <dd>
                        <p>環境負荷の低減・CO2排出量１％抑制を目指すことを行動計画の指針とする。</p>
                    </dd>
                </dl>
                <dl>
                    <dt><h3><span><img src="<?= imgr(); ?>/company/ico_plan.png" alt=""></span><strong>年間実施項目</strong></h3></dt>
                    <dd>
                        <ul>
                            <li><span>●</span>フードバンクに登録（焼津地区）し、お客様とともに食品資源の有効利用に努める。</li>
                            <li><span>●</span>富士山クリーンプロジェクト（10月）へお客様とともに参加。</li>
                            <li><span>●</span>デマンドコントロールにより、全店の毎月の電力使用量を抑える。</li>
                            <li><span>●</span>毎年6月、全店の冷蔵ケースハニカム清掃を実施。</li>
                            <li><span>●</span>地球温暖化対策への取り組み　オフィス内の冷房温度適正化（室温28℃）を実施。</li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                    <dt><h3><span><img src="<?= imgr(); ?>/company/ico_plan.png" alt=""></span><strong>過去の取り組み</strong></h3></dt>
                    <dd>
                        <ul class="history">
                            <li><span>● 2010年10月</span>焼津三丁目店を高効率店舗としての位置づけで出店。 <br>（オール電化・オールLED・太陽光パネル）</li>
                            <li><span>● 2014年09月</span>静岡中田店に高効率冷蔵・冷凍ショーケース、冷凍機を導入。</li>
                            <li><span>● 2015年09月</span>藤枝五十海店に高効率冷蔵・冷凍ショーケースを導入。</li>
                            <li><span>● 2016年11月</span>藤枝高洲店に高効率冷蔵・冷凍ショーケース・冷凍機を導入。</li>
                            <li><span>● 2016年11月</span>省エネルギーオンラインコンサルタント導入により店全体の電力量を管理。</li>
                            <li><span>● 2017年11月</span>静岡瀬名店に高効率冷蔵・冷凍ショーケース・冷凍機を導入。</li>
                        </ul>
                    </dd>
                </dl>
            </div><!--maincontent-->
        </section>

        <section id="sec02">
            <div class="maincontent">
                <h2><span><img src="<?= imgr(); ?>/company/tit_ico2.png" alt=""></span><strong>ひとに、地球にやさしいお店づくり</strong></h2>
                <ul>
                    <li><dl>
                        <dt><figure><img src="<?= imgr(); ?>/company/ill01.png" alt=""></figure></dt>
                        <dd>
                            <h3>太陽光発電設備<span>(焼津三丁⽬店)</span></h3>
                            <p>環境にやさしい発電システムを<br>取り⼊れています。</p>
                        </dd>
                    </dl></li>
                    <li><dl>
                        <dt><figure><img src="<?= imgr(); ?>/company/ill02.png" alt=""></figure></dt>
                        <dd>
                            <h3>オール電化店<span>(焼津三丁⽬店)</span></h3>
                            <p>オール電化で、環境にやさしい！<br>安全⾯もしっかり確保</p>
                        </dd>
                    </dl></li>
                    <li><dl>
                        <dt><figure><img src="<?= imgr(); ?>/company/ill03.png" alt=""></figure></dt>
                        <dd>
                            <h3>ＬＥＤ照明設備<span class="pc">&nbsp;</span></h3>
                            <p>消費電⼒の少ないＬＥＤ照明設備の<br>採⽤を進めております。</p>
                        </dd>
                    </dl></li>
                    <li><dl>
                        <dt><figure><img src="<?= imgr(); ?>/company/ill04.png" alt=""></figure></dt>
                        <dd>
                            <h3>スカスカ包材の撲滅運動・<br>トレーの削減</h3>
                            <p>精⾁コーナーでは、CO2削減のために<br>「エコトレー」を採⽤しております。</p>
                        </dd>
                    </dl></li>
                    <li><dl>
                        <dt><figure><img src="<?= imgr(); ?>/company/ill05.png" alt=""></figure></dt>
                        <dd>
                            <h3>リサイクル活動<span class="pc">&nbsp;</span></h3>
                            <p>使⽤済みトレー・ペットボトル・<br>⽜乳パックを回収しております。</p>
                        </dd>
                    </dl></li>
                    <li><dl>
                        <dt><figure><img src="<?= imgr(); ?>/company/ill06.png" alt=""></figure></dt>
                        <dd>
                            <h3>レジ袋削減<span class="pc">&nbsp;</span></h3>
                            <p>マイバッグ持参を推進<br>しております。</p>
                        </dd>
                    </dl></li>
                </ul>
            </div><!--maincontent-->
        </section>

        <section id="sec04">
            <div class="maincontent">
                <h2><span><img src="<?= imgr(); ?>/company/tit_ico4.png" alt=""></span><strong>会社概要</strong></h2>
                <div id="sec04_in">
                    <?= do_shortcode('[table id=1 /]'); ?>
                </div><!--sec04_in-->
            </div><!--maincontent-->
        </section>

        <section id="sec05">
            <div class="maincontent">
                <h2><span><img src="<?= imgr(); ?>/company/tit_ico5.png" alt=""></span><strong>関連会社</strong></h2>
                <figure><img src="<?= imgr(); ?>/company/group.png" alt=""></figure>
                <p>富士屋は、水産事業、エネルギー事業、食品加工業で地域をリードするいちまるグループの一員です。<br>
                核となる「いちまる」を中心に「焼津冷凍」、「松友水産」、「ウインウイン」、「いちまるホーミング」、そして富士屋で構成されるグループネットワークは、業種業態の枠を超え各々の事業の可能性を広げています。<br>
                例えば焼津冷凍で生産されている水耕栽培の野菜は、スーパーマーケット富士屋の人気商品となっており、松友水産の仲卸業は、同じくスーパーマケット富士屋に新鮮な商品を仕入れる際の重要なルートとなっています。<br>
                新しいビジネスチャンスの開拓や、新しい商品、サービスの企画において、このグループネットワークは大きな力を発揮しています。創業から60年(令和4年現在)を経て、地域社会に深く関わっている信頼の「いちまる」ブランドを、より大きく確かなブランドに育てるために富士屋はグループを牽引する役割を担っています。</p>
            </div><!--maincontent-->
        </section>

        <section id="sec06">
            <div class="maincontent">
                <h2><span><img src="<?= imgr(); ?>/company/tit_ico6.png" alt=""></span><strong>沿革</strong></h2>
                <div id="sec06_in">
                    <ul>
                        <?php foreach (enkakus() as $post) : setup_postdata($post); ?>
                            <li><span><?php the_field('year_month'); ?></span><strong><?= title(); ?></strong></li>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </ul>
                </div><!--sec06_in-->
            </div><!--maincontent-->
        </section>
    <?php endwhile; ?>

<?php
get_footer();
