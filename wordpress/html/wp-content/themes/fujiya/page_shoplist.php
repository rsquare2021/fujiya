<?php
    /* Template Name: 店舗 ・チラシ情報 */
    get_header();
?>

    <?php get_template_part( 'template-parts/page', 'tit' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <section id="sec01">
            <div class="maincontent">
                <div id="shop_nav">
                    <dl>
                        <dt>焼津地区</dt>
                        <dd>
                            <ul>
                                <?php foreach (shop_lists('yaizu') as $post) : setup_postdata($post); ?>
                                    <li><a href="#<?= $post->post_name; ?>"><?= title(); ?></a></li>
                                <?php endforeach; wp_reset_postdata(); ?>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>藤枝地区</dt>
                        <dd>
                            <ul>
                                <?php foreach (shop_lists('fujieda') as $post) : setup_postdata($post); ?>
                                    <li><a href="#<?= $post->post_name; ?>"><?= title(); ?></a></li>
                                <?php endforeach; wp_reset_postdata(); ?>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                    <dt>静岡地区</dt>
                        <dd>
                            <ul>
                                <?php foreach (shop_lists('shizuoka') as $post) : setup_postdata($post); ?>
                                    <li><a href="#<?= $post->post_name; ?>"><?= title(); ?></a></li>
                                <?php endforeach; wp_reset_postdata(); ?>
                            </ul>
                        </dd>
                    </dl>
                </div><!--shop_nav-->

                <div id="shop_service">
                    <h3>サービス一覧</h3>
                    <ul>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service01.png" alt=""></figure><p>ATM</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service02.png" alt=""></figure><p>コピー</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service03.png" alt=""></figure><p>イオン⽔</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service04.png" alt=""></figure><p>トレイ回収</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service05.png" alt=""></figure><p>ペットボトル回収</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service06.png" alt=""></figure><p>⽔素⽔</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service07.png" alt=""></figure><p>クレジットカード</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service08.png" alt=""></figure><p>⽜乳パック回収</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service09.png" alt=""></figure><p>プレイロット</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service10.png" alt=""></figure><p>保存⽤氷⽔</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service11.png" alt=""></figure><p>障害者用駐⾞場</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service12.png" alt=""></figure><p>公共料⾦収納</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service13.png" alt=""></figure><p>証明写真</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service14.png" alt=""></figure><p>電子マネー</p></li>
                        <li><figure><img src="<?= imgr(); ?>/shoplist/service15.png" alt=""></figure><p>宅配</p></li>
                    </ul>
                </div><!--shop_service-->
            </div><!--maincontent-->
        </section>


        <!--焼津地区-->
        <section class="sec_shop">
            <div class="maincontent">
                <h2>焼津地区</h2>
                <?php foreach (shop_lists('yaizu') as $post) : setup_postdata($post); ?>
                    <div class="shoplist_box" id="<?= $post->post_name; ?>">
                        <dl>
                            <dt>
                                <h3><?= title(); ?></h3>
                                <table>
                                    <tr>
                                        <th>営業時間</th>
                                        <td><?php the_field('time'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <td><?php the_field('address'); ?><a href="<?php the_field('map'); ?>" target="_blank">MAP</a></td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td><?php the_field('tel'); ?></td>
                                    </tr>
                                </table>
                                <div class="service_list">
                                    <h4>設備・サービス案内</h4>
                                    <ul>
                                        <?php
                                            $services = get_field('service');
                                            foreach ($services as $service) :
                                        ?>
                                            <li><img src="<?= imgr(); ?>/shoplist/<?= $service; ?>.png" alt=""></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php
                                        $pdf = get_field('pdf');
                                        if($pdf):
                                    ?>
                                        <a href="<?= $pdf; ?>" target="blank"><u>宅配サービスのリーフレットはこちら</u></a>
                                    <?php endif; ?>
                                </div><!--service_list-->
                            </dt>
                            <dd>
                                <figure class="img"><?= eyecatch(); ?></figure>
                                <figure class="btn_more"><a href="<?php the_field('chirashi'); ?>"><span></span>チラシ情報を⾒る</a></figure>
                            </dd>
                        </dl>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div><!--maincontent-->
        </section>

        <!--藤枝地区-->
        <section class="sec_shop">
            <div class="maincontent">
                <h2>藤枝地区</h2>
                <?php foreach (shop_lists('fujieda') as $post) : setup_postdata($post); ?>
                    <div class="shoplist_box" id="<?= $post->post_name; ?>">
                        <dl>
                            <dt>
                                <h3><?= title(); ?></h3>
                                <table>
                                    <tr>
                                        <th>営業時間</th>
                                        <td><?php the_field('time'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <td><?php the_field('address'); ?><a href="<?php the_field('map'); ?>" target="_blank">MAP</a></td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td><?php the_field('tel'); ?></td>
                                    </tr>
                                </table>
                                <div class="service_list">
                                    <h4>設備・サービス案内</h4>
                                    <ul>
                                        <?php
                                            $services = get_field('service');
                                            foreach ($services as $service) :
                                        ?>
                                            <li><img src="<?= imgr(); ?>/shoplist/<?= $service; ?>.png" alt=""></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php
                                        $pdf = get_field('pdf');
                                        if($pdf):
                                    ?>
                                        <a href="<?= $pdf; ?>" target="blank"><u>宅配サービスのリーフレットはこちら</u></a>
                                    <?php endif; ?>
                                </div><!--service_list-->
                            </dt>
                            <dd>
                                <figure class="img"><?= eyecatch(); ?></figure>
                                <figure class="btn_more"><a href="<?php the_field('chirashi'); ?>"><span></span>チラシ情報を⾒る</a></figure>
                            </dd>
                        </dl>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div><!--maincontent-->
        </section>

        <!--静岡地区-->
        <section class="sec_shop">
            <div class="maincontent">
                <h2>静岡地区</h2>
                <?php foreach (shop_lists('shizuoka') as $post) : setup_postdata($post); ?>
                    <div class="shoplist_box" id="<?= $post->post_name; ?>">
                        <dl>
                            <dt>
                                <h3><?= title(); ?></h3>
                                <table>
                                    <tr>
                                        <th>営業時間</th>
                                        <td><?php the_field('time'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <td><?php the_field('address'); ?><a href="<?php the_field('map'); ?>" target="_blank">MAP</a></td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td><?php the_field('tel'); ?></td>
                                    </tr>
                                </table>
                                <div class="service_list">
                                    <h4>設備・サービス案内</h4>
                                    <ul>
                                        <?php
                                            $services = get_field('service');
                                            foreach ($services as $service) :
                                        ?>
                                            <li><img src="<?= imgr(); ?>/shoplist/<?= $service; ?>.png" alt=""></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php
                                        $pdf = get_field('pdf');
                                        if($pdf):
                                    ?>
                                        <a href="<?= $pdf; ?>" target="blank"><u>宅配サービスのリーフレットはこちら</u></a>
                                    <?php endif; ?>
                                </div><!--service_list-->
                            </dt>
                            <dd>
                                <figure class="img"><?= eyecatch(); ?></figure>
                                <figure class="btn_more"><a href="<?php the_field('chirashi'); ?>"><span></span>チラシ情報を⾒る</a></figure>
                            </dd>
                        </dl>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div><!--maincontent-->
        </section>
    <?php endwhile; ?>

<?php
get_footer();
