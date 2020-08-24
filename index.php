<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage 泉パークタウンサービス
 * @since 1.0
 * @version 1.0
 */ ?>
<?php get_header(); ?>
<main class="maincontents">
    <div class="wrapArea">
	<div class="textArea pc_only">
		<h2>このまちの<br>暮らしに根ざして</h2>
		<p class="pArea">1975年設立、わたしたちは三菱地所グループ企業として、豊富な実績とノウハウを惜しみなく活かし、お客様にとって一番身近で頼りになる存在を目指しています。</p>
	</div>
	<div class="slider-wrap area_mv">
        <div class="slider-01">
            <div class="wrap-slider-ttlimg"><img src="<?php echo get_template_directory_uri(); ?>/common/images/slider/sp_slider_ttl.png" alt="このまちの暮らしに根ざして"></div>
            <div class="wrap-scroll_bar">
                <p>Scroll</p>
                <div class="box">
                    <div class="sp_scroll_bar"><i class="scroll-arrow"></i></div>
                </div>
            </div>
        </div>
        <div class="slider-02">
            <div class="wrap-slider-ttlimg"><img src="<?php echo get_template_directory_uri(); ?>/common/images/slider/sp_slider_ttl.png" alt="このまちの暮らしに根ざして"></div>
            <div class="wrap-scroll_bar">
                <p>Scroll</p>
                <div class="box">
                    <div class="sp_scroll_bar"><i class="scroll-arrow"></i></div>
                </div>
            </div>
        </div>
        <div class="slider-03">
            <div class="wrap-slider-ttlimg"><img src="<?php echo get_template_directory_uri(); ?>/common/images/slider/sp_slider_ttl.png" alt="このまちの暮らしに根ざして"></div>
            <div class="wrap-scroll_bar">
                <p>Scroll</p>
                <div class="box">
                    <div class="sp_scroll_bar"><i class="scroll-arrow"></i></div>
                </div>
            </div>
        </div>
        <div class="slider-04">
            <div class="wrap-slider-ttlimg"><img src="<?php echo get_template_directory_uri(); ?>/common/images/slider/sp_slider_ttl.png" alt="このまちの暮らしに根ざして"></div>
            <div class="wrap-scroll_bar">
                <p>Scroll</p>
                <div class="box">
                    <div class="sp_scroll_bar"><i class="scroll-arrow"></i></div>
                </div>
            </div>
        </div>
        <div class="slider-05">
            <div class="wrap-slider-ttlimg"><img src="<?php echo get_template_directory_uri(); ?>/common/images/slider/sp_slider_ttl.png" alt="このまちの暮らしに根ざして"></div>
            <div class="wrap-scroll_bar">
                <p>Scroll</p>
                <div class="box">
                    <div class="sp_scroll_bar"><i class="scroll-arrow"></i></div>
                </div>
            </div>
        </div>
    </div>
	</div>

 <!--<div class="wrap-bnr_azride"><a href="<?php echo home_url("/"); ?>azride" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/banner.jpg" alt="AZ RIDE"></a></div>-->

    <article>
        <div class="area_section_news contarea sp_contarea">
            <div class="cont_inner">
                <h2 class="tit_news prg">お知らせ・イベント情報</h2>
                <?php
                    $args = array(
                        'post_type' => array('news'),
                        // 'tax_query' => array('relation' => 'AND'),
                        // 'tax_query' => array(),
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                    );
                    ?>
                    <?php $myquery = new WP_Query($args); ?>
                <ul class="list_news">
                    <?php if ($myquery->have_posts()):?>
                        <?php while($myquery->have_posts()): $myquery->the_post(); ?>
                            <?php
                                $tarms = get_the_terms($value->ID,'cat_news');
                                $cate = $tarms[0]->name;
                            ?>
                    <li>
                        <?php if($cate == "まちリレ"): ?>
                        <a href="<?php echo home_url("/"); ?>project">
                        <?php else: ?>
                        <a href="<?php echo get_permalink($value->ID); ?>">
                        <?php endif; ?>
							<p class="categoryname"><?php echo $cate; ?></p>
                            <div class="wrap-img">
                        <?php if(get_field('thumbnail',$value->ID)): ?>
                                <img src="<?php echo get_field('thumbnail',$value->ID); ?>" alt="">
                        <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/article_logo.jpg" alt="ロゴ">
                        <?php endif; ?>
                            </div>
                            <div>
                                <p class="date"><?php echo get_the_date(); ?>（更新）</p>
                                <p class="txt"><?php echo the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query();?>
                </ul>
                <div class="al_center"><a href="<?php echo home_url("/"); ?>news" class="btn_all"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/btn_newall.svg" alt="VIEW ALL"></a></div>
            </div>
        </div>
        <section class="area_section_needs">
            <h2 class="lead_needs"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/lead_needs.svg" class="pc_only" alt="住まいのあらゆるニーズにワンストップでお応えします。"><span class="sp_only">住まいのあらゆるニーズに<br class="sp_only">ワンストップでお応えします。</span></h2>
            <div class="pc_only area_needs_detail">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_needs.jpg" alt="" class="img_needs">
                <ul class="list_needs">
                    <li class="link_realestate"><a href="<?php echo home_url("/"); ?>estate"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/link_realestate.png" alt="不動産（売買・賃貸）"></a></li>
                    <li class="link_exterior"><a href="<?php echo home_url("/"); ?>garden#sec_02"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/link_exterior.png" alt="外装・エクステリア"></a></li>
                    <li class="link_garden"><a href="<?php echo home_url("/"); ?>garden"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/link_garden.png" alt="お庭づくり"></a></li>
                    <li class="link_interior"><a href="<?php echo home_url("/"); ?>renovation/#sec_02"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/link_interior.png" alt="室内空間リフォーム"></a></li>
                    <li class="link_parking"><a href="https://map.cyber-estate.jp/map/index.asp?ggid=804013&gid=804013&sbt=3&scrd=2&sc6=1&sc7=1&sc9=1&service=2" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/link_parking.png" alt="駐車場"></a></li>
                    <li class="link_maintenance"><a href="<?php echo home_url("/"); ?>garden#sec_03"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/link_maintenance.png" alt="お庭のメンテナンス"></a></li>
                    <li class="link_renovation"><a href="<?php echo home_url("/"); ?>renovation#sec_01"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/link_renovation.png" alt="外装・リフォーム"></a></li>

                </ul>
            </div>
            <div class="sp_only">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_needs_sp.jpg" alt="" class="prg_2w img_needs">
                <div class="sp_contarea">
                    <div class="area_needs_detail">
                        <ol class="list_needs">
                            <li>
                                <a href="<?php echo home_url("/"); ?>estate"><h3 class="tit_needs">不動産（売買・賃貸）</h3></a>
                                <p>売る、買う、貸す、借りる。泉パークタウンのプロにしかできない「安心」と「価値」をサポートします。</p>
                            </li>
                            <li>
                                <a href="<?php echo home_url("/"); ?>renovation#sec_01"><h3 class="tit_needs">外装・リフォーム</h3></a>
                                <p>見た目の化粧直しだけではなく、建物の状況に合わせた診断と改修プランをご提案します。</p>
                            </li>
                            <li>
                                <a href="<?php echo home_url("/"); ?>garden#sec_02"><h3 class="tit_needs">外構・エクステリア</h3></a>
                                <p>フェンス設置、駐輪場拡張、バリアフリー工事など、豊富な経験値とアイデアでバックアップいたします。</p>
                            </li>
                            <li>
                                <a href="<?php echo home_url("/"); ?>garden"><h3 class="tit_needs">お庭づくり</h3></a>
                                <p>やすらぎと日が共存する庭づくり。ユーティリティ性とデザイン性のトータルプロデュースが可能です。</p>
                            </li>
                            <li>
                                <a href="<?php echo home_url("/"); ?>garden#sec_03"><h3 class="tit_needs">お庭のメンテナンス</h3></a>
                                <p>お庭に再考で高まる暮らし方をご提案。手入れを軽減したりご要望を叶えるお庭のご提案をいたします。</p>
                            </li>
                            <li>
                                <a href="<?php echo home_url("/"); ?>renovation/#sec_02"><h3 class="tit_needs">室内空間リフォーム</h3></a>
                                <p>豊富な施工実績を持つリフォームチームが、お客様の空間をコーディネートいたします。</p>
                            </li>
                            <li>
                                <a href="https://map.cyber-estate.jp/map/index.asp?ggid=804013&gid=804013&sbt=3&scrd=2&sc6=1&sc7=1&sc9=1&service=2" target="_blank"><h3 class="tit_needs">駐車場</h3></a>
                                <p>豊富な駐車場物件情報から、条件にピッタリの駐車場をお探しいただけます。</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="area_section_service">
            <p class="lead prg_2w pc_only"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/service_lead.svg" alt="3つのサービスが連携し合うことで、様々なご要望に広く対応できます。"></p>
            <div class="contarea">
                <div class="cont_inner">
                    <div class="area_service_detail realestate_detail">
                        <h3 class="tit_service">不動産（売買・賃貸）</h3>
                        <div class="box_detail">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_realestate.jpg" alt="" class="pc_only">
                            <div class="box_inner">
                                <p class="service_lead prg">不動産に関わるあらゆるニーズにワンストップでお応えします。</p>
                                <h4 class="tit_detail prg_h">【営業内容】</h4>
                                <ul class="list_detail">
                                    <li>売買仲介（戸建・マンション・土地）</li>
                                    <li>賃貸仲介・賃貸管理（戸建・マンション）</li>
                                    <li>月極駐車場（貸す・借りる）</li>
                                    <li>泉パークタウン宅地分譲</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list_btn">
                            <li>
                                <h5 class="stit list01"><span>買いたい</span>（物件一覧）</h5>
                                <ul>
                                    <li><a href="https://map.cyber-estate.jp/map_b/index.asp?ggid=504003&sbt=3&scrd=2&sc4=1&sc5=1&service=2" target="_blank"><span>戸建て</span></a></li>
                                    <li><a href="https://map.cyber-estate.jp/map_b/index.asp?ggid=504003&sbt=2&scrd=2&sc3=1&sc5=1&service=2" target="_blank"><span>マンション</span></a></li>
                                    <li><a href="https://map.cyber-estate.jp/map_b/index.asp?ggid=504003&sbt=1&scrd=2&service=2" target="_blank"><span>土地</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <h5 class="stit list02"><span>借りたい</span>（物件一覧）</h5>
                                <ul>
                                    <li><a href="http://map.cyber-estate.jp/map/index.asp?ggid=804013&gid=804013&sbt=1&scrd=2&sc2=001000&service=2" target="_blank"><span>戸建て</span></a></li>
                                    <li><a href="http://map.cyber-estate.jp/map/index.asp?ggid=804013&gid=804013&sbt=1&scrd=2&sc2=010000&service=2" target="_blank"><span>マンション</span></a></li>
                                    <li><a href="http://map.cyber-estate.jp/map/index.asp?ggid=804013&gid=804013&sbt=3&scrd=2&sc6=1&sc7=1&sc9=1&service=2" target="_blank"><span>駐車場</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="area_service_detail build_detail">
                        <h3 class="tit_service">新築・リフォーム・<br class="sp_only">リノベーション</h3>
                        <div class="box_detail">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_build.jpg" alt="" class="pc_only">
                            <div class="box_inner">
                                <p class="service_lead prg">ライフタイルに合わせたきめ細かなリフォームのご提案をいたします。</p>
                                <h4 class="tit_detail prg_h">【営業内容】</h4>
                                <ul class="list_detail">
                                    <li>新築</li>
                                    <li>室内空間リフォーム</li>
                                    <li>フルリフォーム</li>
                                    <li>外装リフォーム</li>
                                    <li>水まわりリフォーム</li>
                                    <li>リノベーション</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list_btn">
                            <li><a href="<?php echo home_url("/"); ?>renovation"><span>施工メニュー</span></a></li>
                            <li><a href="<?php echo home_url("/"); ?>construction/?cate=新築・リフォームリノベーション"><span>施工例</span></a></li>
                        </ul>
                    </div>
                    <div class="area_service_detail garden_detail">
                        <h3 class="tit_service">お庭づくり・<br class="sp_only">メンテナンス</h3>
                        <div class="box_detail">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_garden.jpg" alt="" class="pc_only">
                            <div class="box_inner">
                                <p class="service_lead prg">植栽のプロとしてベストコンディションなガーデンライフを提供致します。</p>
                                <h4 class="tit_detail prg_h">【営業内容】</h4>
                                <ul class="list_detail">
                                    <li>お庭の改修</li>
                                    <li>外構・エクステリア工事</li>
                                    <li>庭木の剪定・施肥・除草</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list_btn">
                            <li><a href="<?php echo home_url("/"); ?>garden"><span>施工メニュー</span></a></li>
                            <li><a href="<?php echo home_url("/"); ?>construction/?cate=お庭づくり"><span>施工例</span></a></li>
                        </ul>
                    </div>
                    <div class="area_service_detail insuarance_detail">
                        <h3 class="tit_service"><span class="pc_only">最適な</span>保険商品<span class="pc_only">を、最高のクオリティで。</span></h3>
                        <div class="box_detail">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_insurance.jpg" alt="" class="pc_only">
                            <div class="box_inner sp_contarea">
                                <p>「東京海上日動」「東京海上日動あんしん生命」「三井住友海上」の代理店として保険ニーズに幅広くお応えしています。限られた保険代理店にのみ与えられる「TOP QUALITY代理店」の(株)東北保険事務所と業務提携し、ワンランク上のサービスをご提供致します。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="contarea sp_contarea">
            <section class="area_section_othermenu cont_inner">
                <div class="area_service_detail about_detail">
                    <div class="box_detail">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_about.jpg" alt="">
                        <div class="box_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/lead_pr.svg" alt="憧れのパークタウンに住んでみよう！" class="img_pr">
                            <h4 class="tit_other">泉パークタウンってこんなまち</h4>
                            <p class="lead_other">トータルバランスのとれた理想の都市をめざして。</p>
                            <p>総開発面積1,070ha。泉パークタウンのマスタープランに描かれたこのスケール。未来へ向かって大きく成長を続けています。</p>
                            <a href="<?php echo home_url("/"); ?>life" class="btn_detail">詳しくはこちら</a>
                        </div>
                    </div>
                </div>
                <div class="area_service_detail">
                    <div class="box_detail">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_maintenance.jpg" alt="">
                        <div class="box_inner">
                            <h4 class="tit_other">施設・緑地のメンテナンス</h4>
                            <p class="lead_other">街づくりをサポートし人と人を繋ぐ会社を目指す。</p>
                            <p>商業施設や事務所・泉パークタウンなどの緑の維持管理を行うことで、安らぎをもたらす魅力的な環境をトータルマネジメント。</p>
                            <a href="<?php echo home_url("/"); ?>facility" class="btn_detail">詳しくはこちら</a>
                        </div>
                    </div>
                </div>
                <div class="area_service_detail">
                    <div class="box_detail">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_project.jpg" alt="">
                        <div class="box_inner">
                            <h4 class="tit_other">まちリレーションプロジェクト</h4>
                            <p class="lead_other">地域の皆さまと一緒に様々な活動を行うプロジェクト。</p>
                            <p>全社員が泉パークタウンの各エリアの担当を持ち、行事に参加したり皆さまの声を聞きにお伺いしたり致します。</p>
                            <a href="<?php echo home_url("/"); ?>project" class="btn_detail">詳しくはこちら</a>
                        </div>
                    </div>
                </div>
                <div class="area_service_detail">
                    <div class="box_detail">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/img_access.jpg" alt="">
                        <div class="box_inner">
                            <h4 class="tit_other">アクセス</h4>
                            <p>仙台市泉区高森7丁目2番<br>
                            ショッピングガーデン・キャラウェイ1階</p>
                            <a href="<?php home_url("/"); ?>access" class="btn_detail">詳しくはこちら</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="area_information cont_inner">
                <!--<h3 class="tit_information al_center"><img src="<?php echo get_template_directory_uri(); ?>/common/images/top/tit_informartion.svg" alt="泉パークタウンとその近隣にお住いの皆様へ" class="pc_only"><span class="sp_only">泉パークタウンと<br>その近隣にお住いの皆様へ</span></h3>-->
                <ul class="list_information">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/logo_mitsubishi_sumai.png" alt="三菱地所の住まいリレー" class="prg_h">
                        <h4 class="lead_information">「三菱地所の住まいリレー」</h4>
                        <p>売る方から買う方へ。貸す方から借りる方へ。手渡されるのは、単なる物件や建物ではなく、資産性、住み心地、そして暮らしのよろこびという3つの価値を持つ「住まい」です。住まいの売買と賃貸において、お客様のご満足を追求する心と、成果をお届けするプロの技を尽くして、3つの価値を高めるお手伝いをする。それが「三菱地所の住まいリレー」です。
                        </p>
                        <a href="https://www.mec-h.com/brand" target="_blank" class="btn_detail">詳しくはこちら</a>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/logo_mitsubishi_reform.png" alt="三菱地所のリフォーム" class="prg_h">
                        <h4 class="lead_information">「三菱地所のリフォーム」</h4>
                        <p>見えない想いも、かたちに。リフォームのその先へ。私たちがもっとも大切にするのは、お客さまとの対話です。ご家族を想い、家を想う、お客さまの細やかな気持ちをも聞き出して皆様が気付いていない「願いや希望」を叶えていきたい。三菱地所グループの伝統と信頼。創業以来、長きに渡り培ってきた高品質なサービスと実績。確かな技術と創造性豊かな提案力。たどり着くのは、お客さまの想像を超えること。それが「三菱地所のリフォーム」の想いです。</p>
                        <a href="https://www.mec-reform.com/" target="_blank" class="btn_detail">詳しくはこちら</a>
                    </li>
                </ul>
            </section>
        </div>
    </article>
</main>

<?php get_footer(); ?>
