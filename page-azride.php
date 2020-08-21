<?php
/**
 * Template Name: azride
 *
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

 get_header('azride');
 ?>

    <div class="wrap-contact_link cf pc_only">
        <div class="left">
            <div class="inner">
                <a href="#wrap-contact" class="cf">
                    <span class="ttl">完全予約制</span>
                    <span class="detail">お問合せご予約はこちら</span>
                </a>
            </div>
        </div>
        <div class="right">
            <div class="inner">
                <ul class="cf">
                    <li><a href="#sec_02">RENOVATION</a></li>
                    <li><a href="#sec_03">VR</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrap-sp_menu sp_only">
        <ul>
            <li><a href="javascript:void(0);" onClick="sp_link(4,'','table_type_01')">見学予約する<br><span>完全予約制</span></a></li>
            <li><a href="javascript:void(0);" onClick="sp_link(2)">MENU</a></li>
        </ul>
    </div>
    <div class="wrap-sp_menu_content sp_only">
        <div class="inner">
            <div class="back">
                <span class="ttl">CONTENTS</span>
            </div>
            <div class="back">
                <div class="wrap-sp_link">
                    <ul class="">
                        <li><a href="javascript:void(0);" onClick="sp_link(3,'header')"><span class="number">01</span><span>トップページ</span></a></li>
                        <li><a href="javascript:void(0);" onClick="sp_link(3,'concept')"><span class="number">02</span><span>コンセプト</span></a></li>
                        <li><a href="javascript:void(0);" onClick="sp_link(3,'gallery')"><span class="number">03</span><span>AZ RIDEリフォームギャラリー</span></a></li>
                        <li><a href="javascript:void(0);" onClick="sp_link(3,'sec_02')"><span class="number">04</span><span>リノベーション(Before After)</span></a></li>
                        <li><a href="javascript:void(0);" onClick="sp_link(3,'azride_go')"><span class="number">05</span><span>AZ RIDEに行ってみよう!</span></a></li>
                        <li><a href="javascript:void(0);" onClick="sp_link(3,'sec_03')"><span class="number">06</span><span>VRでお部屋が大変身!</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="wrap-sp_contact_link sp_only">
                <p class="ttl">3つの中から予約したいイベントを選択してください</p>
                <div class="btn_area ">
                    <div class="inner"><a href="javascript:void(0);" onclick="sp_link(4,'','table_type_01')">リフォームギャラリー見学</a></div>
                </div>
                <div class="btn_area submit">
                    <div class="inner"><a href="javascript:void(0);" onclick="sp_link(4,'','table_type_03')">泉パークタウン住まい塾受講</a></div>
                </div>
            </div>
            <div class="wrap-img sp_logo"><a href="http://izumi-pts.co.jp" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_23.jpg" alt= /></a></div>
        </div>
    </div>
	<main class="wrap-main">
        <section id="sec_05">
            <div class="inner">
                <div class="wrap-text_box">
                    <h4>住まう方の要望をA～Zまで叶える「体感・体験型」リフォームギャラリー</h4>
                    <p>
                        40数年にわたり泉パークタウンで不動産、リフォーム、お庭づくりなどをはじめ、<br>
                        様々なサービスに携わってきた経験を活かし、単なる部分リフォームの詰め合わせではない、<br>
                        住まう方の将来までも見据えた豊かな住環境・住まいづくりを一緒に創造する<br>
						コミュニケーションスペースです。
                    </p>
                    <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_29.png" alt="泉パークタウン内に誕生"></div>
                </div>
            </div>
        </section>
        <section id="sec_01">
            <div class="inner">
                <div class="wrap-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_03.png" alt="" class="">
                </div>
            </div>
            <div class="inner sp_wrap-header_ttl_detail">
                <div id="concept" class="wrap-header_ttl_detail sp_only">
                    <div class="wrap-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_04.png" alt="img"/>
                    </div>
                    <p>
                        40数年にわたり泉パークタウンで不動産、リフォーム、お庭づくりなどをはじめ、<br>
                        様々なサービスに携わってきた経験を活かし、単なる部分リフォームの詰め合わせではない、<br>
                        住まう方の将来までも見据えた豊かな住環境・住まいづくりを一緒に創造する<br>
                        コミュニケーションスペースです。
                    </p>
                </div>
            </div>
            <div class="inner">
                <div class="wrap-page_link cf pc_only">
                    <a href="#sec_02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_04.png" alt=""><span>RENOVATION</span></a>
                    <a href="#sec_03"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_06.png" alt=""><span>VR</span></a>
                </div>
                <div class="wrap-text_box">
                    <h4>
                        お客様の｢理想の住まい｣を実現するために<span class="pc_only">・・・</span><span class="sp_only">…</span>。<br class="pc_only">
                        泉パークタウンサービスだからこそできること。<br class="pc_only">
                        わたしたちは｢不動産仲介｣と｢リフォーム工事｣を同時に手がけます。
                    </h4>
                    <p>
                        誰もが、自分らしく心地良く暮らしたいと思うもの。<br class="pc_only">
                        ただ、立地や広さ、間取り、インテリア、そして価格。<br class="pc_only">
                        これらの要素を組み合わせた「理想の住まい」を見つけるのは、そう簡単ではありません。<br class="pc_only">
                        見つからなければ、今のお住まいや、お気に入りの立地にある物件を<br class="pc_only">
                        リフォーム・リノベーションしてはいかがでしょうか。
                    </p>
                    <div class="wrap-img sp_only sp_img_05"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_05.png" alt=""></div>
                    <p>
                        わたしたちは、ご希望の物件探し、リフォーム・リノベーション、<br class="pc_only">
                        工事期間中の仮住まいのサポートまで、不動産・リフォーム・お庭づくりというサービスを結集して<br class="pc_only">
                        一人ひとりの「理想の住まいづくり」をトータルでお手伝い致します。
                    </p>
                    <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_07.jpg" alt="" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_06.png" alt="" class="sp_only"></div>
                </div>
                <div id="gallery" class="wrap-gallery">
                    <div class="wrap-img ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_08.png" alt="AZ RIDE「体感・体験型」リフォームギャラリー"></div>
                    <div class="wrap-map_content">
                        <div class="wrap-map_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_09.jpg" alt="img" class="pc_only">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_08.png" alt="img" class="sp_only">
                        </div>
                        <div class="wrap-map_text type_01">
                            <div class="ttl"><span class="sp_only number">1</span>DIY ROOM</div>
                            <div class="detail">
                                <p>クロスの張替やタイル貼りなど、自分で出来るリフォームがイメージできます。</p>
                            </div>
                        </div>
                        <div class="wrap-map_text type_02">
                            <div class="ttl"><a href="#sec_02"><span class="sp_only number">2</span>Renovation<span class="sub_ttl">施工前・施工後</span></a></div>
                            <div class="detail">
                                <p>築年数の経ったマンションの一室をリノベーション。暮らし心地にこだわった間取りに変更し、洗練されたインテリアテイストと最新設備をしつらえました。
                            </div>
                        </div>
                        <div class="wrap-map_text type_03">
                            <div class="ttl"><a href="#sec_03"><span class="sp_only number">3</span>VR<span class="sub_ttl">バーチャル体験</span></a></div>
                            <div class="detail">
                                <p>最新のVR(ヴァーチャルリアリティ)機器を使って、さまざまなインテリアテイストを体感。お気に入りのインテリアが見つかります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-coming_soon cf">
                        <div class="left">
                            <div class="wrap-text">
                                <p class="ttl">「仙臺いろは」をCheck!</p>
                                <p class="text">仙台の最新トレンドがわかる、仙台放送の｢仙臺いろは｣に｢エージーライド｣が登場!</p>
                                <p class="open_text"><a href="http://s-iroha.jp/article/9069" target="_blank">｢仙臺いろは｣記事ページはこちら</a></p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="wrap-youtube">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/caHxOPKx-j0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec_02">
            <div class="inner">
                <div class="wrap-img_ttl cf">
                    <div class="left">
                        <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_12.png" alt=""></div>
                    </div>
                    <div class="right">
                        <h3>RENOVATION<br class="sp_only"><span>［ Before after ］</span></h3>
                        <p class="bold pc_only">インテリアも設備も思いのままに</p>
                        <p class="detail pc_only">泉パークタウン内の築２8年のマンションをリノベーション。暮らしやすさを求めた間取りに改修し、インテリアもステイタスを感じさせるテイストにコーディネート。</p>
                    </div>
                    <div class="sp_only">
                        <p class="bold">インテリアも設備も思いのままに</p>
                        <p class="detail">泉パークタウン内の築２８年のマンションをリノベーション。暮らしやすさを求めた間取りに改修し、インテリアもステイタスを感じさせるテイストにコーディネート。</p>
                    </div>
                </div>

                <div class="wrap-renovation_img">
                    <div class="wrap-main_img pc_only">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_14.jpg" alt="1">
                    </div>
                    <div class="wrap-coment_img pc_only">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coment_01.png" alt="coment">
                    </div>
                    <div class="wrap-text">
                        <div class="ttl">
                            <p>Concept ／ ナチュラルヴィンテージ</p>
                        </div>
                        <div class="detail">
                            <p>重厚感を出しすぎずに、落ち着いたアンティーク空間をつくりたい方におすすめのインテリアテイストに仕上げました。</p>
                        </div>
                    </div>
                    <div class="wrap-sub_img pc_only">
                        <ul class="cf">
                            <li class="active box_1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_14.jpg" alt="14"></li>
                            <li class="box_2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_15.jpg" alt="15"></li>
                            <li class="box_3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_16.jpg" alt="16"></li>
                            <li class="box_4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_17.jpg" alt="17"></li>
							<li class="box_5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_18.jpg" alt="18"></li>
                        </ul>
                    </div>
                    <div class="wrap-sp_main_img sp_only">
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_11.jpg" alt=""></div>
                            <div class="wrap-text_content cf">
                                <div class="wrap-car_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_28.png" alt="">
                                </div>
                                <div class="wrap-text">
                                    <p>広い調理スペースで家族みんなでワイワイ楽しく料理をしよう！</p>
                                    <p class="line"></p>
                                    <p>独立していたキッチンの壁を取り、リビングと一体化したオープンスタイルキッチンに！</p>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_12.jpg" alt=""></div>
                            <div class="wrap-text_content cf">
                                <div class="wrap-car_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_29.png" alt="">
                                </div>
                                <div class="wrap-text">
                                    <p>自然と家族が集まるくつろぎの空間だね！</p>
                                    <p class="line"></p>
                                    <p>キッチン、ダイニング、リビングが一体となって、17.6畳の広々LDKに変身！</p>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_27.jpg" alt=""></div>
                            <div class="wrap-text_content cf">
                                <div class="wrap-car_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_30.png" alt="">
                                </div>
                                <div class="wrap-text">
                                    <p>みんなを見渡しながら家事ができるね！</p>
                                    <p class="line"></p>
                                    <p>洗面→キッチン→ダイニング→バルコニーまで一直線で繋がっているから家事の効率がUP！</p>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_13.jpg" alt=""></div>
                            <div class="wrap-text_content cf">
                                <div class="wrap-car_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_31.png" alt="">
                                </div>
                                <div class="wrap-text">
                                    <p>約4.8畳の和室だった場所が、ダイニングキッチンと一体化して明るく広々!</p>
                                    <p class="line"></p>
                                    <p>木の温もりと落ち着き感ある「ナチュラルヴィンテージ」のインテリアテイストで居心地の良い空間に。</p>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_14.jpg" alt=""></div>
                            <div class="wrap-text_content cf">
                                <div class="wrap-car_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_32.png" alt="">
                                </div>
                                <div class="wrap-text">
                                    <p>広くなったLDKがますます明るく開放的な雰囲気に変わったね！</p>
                                    <p class="line"></p>
                                    <p>南側のバルコニーに面した大きな間口のサッシからは、暖かな陽光が部屋の奥まで届くよ！</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="azride_go" class="wrap-azride_go">
                    <div class="wrap-img ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_26.png" alt="AZ RIDEに行ってみよう!" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_22.png" alt="AZ RIDEに行ってみよう!" class="sp_only"></div>
                    <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_27.png" alt="AZ RIDEに行ってみよう!" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_15.png" alt="AZ RIDEに行ってみよう!" class="sp_only"></div>
                </div>

            </div>
        </section>
        <section id="sec_03">
            <div class="inner">
                <div class="wrap-img_ttl cf">
                    <div class="left">
                        <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_06.png" alt=""></div>
                    </div>
                    <div class="right">
                        <h3>VRでお部屋が大変身！</h3>
                        <p class="bold pc_only">最新の技術で暮らしの未来を描きます。</p>
                        <p class="detail pc_only">資料や図面だけでは、どうしても理解しづらい「高さ」「奥行き」「カラーテイスト」などVRで解決！わくわくドキドキの楽しい住まいづくりが体験できます。</p>
                    </div>
                    <div class="sp_only">
                        <p class="bold">最新の技術で暮らしの未来を描きます。</p>
                        <p class="detail">資料や図面だけでは、どうしても理解しづらい「高さ」「奥行き」「カラーテイスト」などVRで解決！わくわくドキドキの楽しい住まいづくりが体験できます。</p>
                    </div>
                </div>
            </div>
                <div class="wrap-pic cf">
                    <div class="inner cf">
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_19.jpg" alt="" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_16.jpg" alt="" class="sp_only"></div>
                            <div class="wrap-ttl"><p>グレーミニマル</p></div>
                        </div>
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_20.jpg" alt="" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_17.jpg" alt="" class="sp_only"></div>
                            <div class="wrap-ttl"><p>ダークシック</p></div>
                        </div>
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_21.jpg" alt="" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_18.jpg" alt="" class="sp_only"></div>
                            <div class="wrap-ttl"><p>ホワイトエレガント</p></div>
                        </div>
                        <div class="box pc_only">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_22.jpg" alt="" class="pc_only"></div>
                            <div class="wrap-ttl"><p></p></div>
                        </div>
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_23.jpg" alt="" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_19.jpg" alt="" class="sp_only"></div>
                            <div class="wrap-ttl"><p>ミディアムヴィンテージ</p></div>
                        </div>
                        <div class="box">
                            <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_24.jpg" alt="" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_img_20.jpg" alt="" class="sp_only"></div>
                            <div class="wrap-ttl"><p>ライトナチュラル</p></div>
                        </div>
                    </div>
                </div>

            <div class="inner">
                <div class="wrap-vr_img cf">
                    <div class="left">
                        <div class="wrap-text">
                            <span class="border-text mr_20">つくる前に見れるから安心！</span>
                            <span class="border-text">イメージを共有するのにもピッタリ！</span>
                            <p class="sp_only">最新のVR機器で自分好みの<br>インテリアテイストを体感できます。</p>
                        </div>
                        <div class="wrap-img pc_only"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_28.png" alt="vr image"></div>
                    </div>
                    <div class="right">
                        <div class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_29.png" alt="vr image 2"></div>
                    </div>
                </div>

            </div>
        </section>
        <section id="sec_04">
            <div class="inner">

              <div class="wrap-contact" id="wrap-contact">
                  <div class="ttl cf">
                      <span>リフォームギャラリー見学はこちらから</span>
                  </div>
                  <div class="wrap-contact_area">

                      <div class="wrap-table table_type_01">
                          <form id="type_01" action="https://usebasin.com/f/14481f352113" method="post">
                              <div class="table_back">
                                  <table>
                                      <tr>
                                          <th>▶︎見学希望日<span class="sp_only">※必須</span></th>
                                          <td class="req txt_position">
                                              <span class="pc_only">※必須</span>
                                              <input type="text" name="見学希望日" class="m datepicker" data-validation-engine="validate[required]">
                                              <div class="wrap-text type_01">
                                                  <p class="red">※見学ご希望日1週間前までのご予約をお願いします。</p>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>▶︎見学希望時間<span class="sp_only">※必須</span></th>
                                          <td class="req"><span class="pc_only">※必須</span>
                                              <label class="first"><input type="checkbox" name="見学希望時間[]" value="10:30〜" data-validation-engine="validate[required]">10:30〜</label>
                                              <label><input type="checkbox" name="見学希望時間[]" value="11:00〜" data-validation-engine="validate[required]">11:00〜</label>
                                              <label><input type="checkbox" name="見学希望時間[]" value="13:00〜" data-validation-engine="validate[required]">13:00〜</label>
                                              <label><input type="checkbox" name="見学希望時間[]" value="13:30〜" data-validation-engine="validate[required]">13:30〜</label>
                                              <label><input type="checkbox" name="見学希望時間[]" value="14:00〜" data-validation-engine="validate[required]">14:00〜</label>
                                              <label><input type="checkbox" name="見学希望時間[]" value="14:30〜" data-validation-engine="validate[required]">14:30〜</label>
                                              <label><input type="checkbox" name="見学希望時間[]" value="15:00〜" data-validation-engine="validate[required]">15:00〜</label>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>▶︎見学人数<span class="sp_only">※必須</span></th>
                                          <td class="req">
                                              <span class="pc_only">※必須</span>
                                              <select name="見学人数" id="">
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                              </select>
                                              人
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>▶︎代表者お名前<span class="sp_only">※必須</span></th>
                                          <td class="req"><span class="pc_only">※必須</span><input type="text" name="代表者お名前" class="m" data-validation-engine="validate[required]"></td>
                                      </tr>
                                      <tr>
                                          <th>▶︎ふりがな<span class="sp_only">※必須</span></th>
                                          <td class="req"><span class="pc_only">※必須</span><input type="text" name="ふりがな" class="m" data-validation-engine="validate[required]"></td>
                                      </tr>
                                      <tr>
                                          <th>▶︎郵便番号</th>
                                          <td>
                                              <input type="text" name="zip_1_1" class="s" size="4" maxlength="3"> ー <input type="text" name="zip_1_2" class="s" size="5" maxlength="4">
                                              <span class="search-address_btn_1">住所表示</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>▶︎住所</th>
                                          <td><input type="text" name="住所" class="l"></td>
                                      </tr>
                                      <tr>
                                          <th>▶︎ビル・建物名</th>
                                          <td><input type="text" name="ビル・建物名" class="l"></td>
                                      </tr>
                                      <tr>
                                          <th>▶︎お電話番号</th>
                                          <td><input type="text" name="お電話番号" class="m"></td>
                                      </tr>
                                      <tr>
                                          <th>▶︎メールアドレス<span class="sp_only">※必須</span></th>
                                          <td class="req"><span class="pc_only">※必須</span><input type="text" name="メールアドレス" class="m" data-validation-engine="validate[required, custom[email]]"></td>
                                      </tr>
                                      <tr>
                                          <th>▶︎個人情報保護方針<span class="sp_only">※必須</span></th>
                                          <td class="req privacy"><span class="pc_only">※必須</span><label class="first"><input type="checkbox" name="個人情報保護方針" value="同意する"  data-validation-engine="validate[required]"><a href="http://www.izumi-pts.co.jp/privacy/" target="_blank">個人情報保護方針</a>に同意します。</label></td>
                                      </tr>
                                  </table>
                              </div>
                              <div class="btn_area submit">
                                  <div class="inner"><input type="submit" value="送信する"></div>
                              </div>
                          </form>
                      </div>



                  </div>
              </div>


            </div>
        </section>
	</main>

<?php get_footer('azride'); ?>
