<?php
/**
 * Template Name: まちリレ
 */
?>
<?php get_header(); ?>
<?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => array('news'),
        'tax_query' => array('relation' => 'AND'),
        // 'tax_query' => array(),
        'posts_per_page' => 12,
        'paged' => $paged,
        'post_status' => 'publish',
    );
    $taxonomy[] = array(
        'taxonomy' => "cat_news",
        'field' => 'slug',
        'terms' => 'machirire',
    );
    array_push($args['tax_query'],$taxonomy);
    $the_query = new WP_Query($args);
?>

<main class="maincontents">
    <div class="wrap-content">
        <h2>まちリレーション<br class="sp_only">プロジェクト<span class="line"></span></h2>
        <div class="inner">
            <div class="news_text_machirire">
                <p>
                    私たちパークタウンサービスは、1974年の街開きから40年以上にわたりこの街がより素敵な街になるよう、地域の皆さまとともにまちづくりの一環としてたくさんの活動をしてまいりました。
                    この街を想う気持ちは、今までもこれからも皆さまと一緒です。<br>
                    「そばにいる会社」ではなく、「一緒にいる会社」として、地域の皆さまと一緒に様々な活動を行う「まちリレーションプロジェクト」を立ち上げました。<br>
                    清掃活動や夏祭りなどの町内会行事、サークル活動、学校行事、防災訓練などこの街で行われる行事に、各エリアの担当メンバーが参加してまいります。<br>
                    ぜひ担当メンバーへ皆さまの声をお聞かせください。
                </p>
            </div>
            <section id="sec_01" class="wrap-machirire">
                <?php if($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                        <?php
                            $tarms = get_the_terms($value->ID,'cat_news');
                            $cate = $tarms[0]->name;
                        ?>
                        <div class="box cf">
                            <div class="left">
                                <div class="area"><?php echo $cate; ?></div>
                                <div class="wrap-img">
                                    <?php if(get_field('thumbnail',$value->ID)): ?>
                                        <img src="<?php echo get_field('thumbnail',$value->ID); ?>" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/article_logo.jpg" alt="ロゴ">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="right">
                                <div class="date"><?php echo get_the_date(); ?></div>
                                <div class="ttl"><?php echo the_title(); ?></div>
                                <div class="txt"><?php echo get_field('detail',$value->ID); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div>
                        <p>検索対象が見つかりませんでした。</p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_query();?>


                <!-- <div class="box">
                    <div class="left">
                        <div class="area"></div>
                        <div class="wrap-img"><img src="" alt=""></div>
                    </div>
                    <div class="right">
                        <div class="date"></div>
                        <div class="ttl"></div>
                        <div class="txt"></div>
                    </div>
                </div> -->
            </section>
        </div>
    </div>
</main>





<?php get_footer(); ?>
