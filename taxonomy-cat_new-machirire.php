<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main class="maincontents">
    <div class="wrap-content">
        <h2>お知らせ・イベント情報<span class="line"></span></h2>
        <div class="inner">
            <div class="menu">
                <div class="inner">
                    <ul class="cf">
                        <li><a href="<?php echo get_archives_link('news'); ?>">すべて</a></li>
                        <li><a href="<?php echo get_term_link('info', 'cat_news') ?>">お知らせ</a></li>
                        <li><a href="<?php echo get_term_link('event', 'cat_news') ?>">イベント</a></li>
                        <li class="active"><a href="<?php echo get_term_link('machirire', 'cat_news') ?>">まちリレ</a></li>
                    </ul>
                </div>
            </div>

            <div class="news_text_machirire">
                <p>
                    私たちパークタウンサービスは、1974年の街開きから40年以上にわたりこの街がより素敵な街になるよう、地域の皆さまとともにまちづくりの一環としてたくさんの活動をしてまいりました。
                    この街を想う気持ちは、今までもこれからも皆さまと一緒です。<br>
                    「そばにいる会社」ではなく、「一緒にいる会社」として、地域の皆さまと一緒に様々な活動を行う「まちリレーション<br class="sp_only">プロジェクト」を立ち上げました。<br>
                    清掃活動や夏祭りなどの町内会行事、サークル活動、学校行事、防災訓練などこの街で行われる行事に、各エリアの担当メンバーが参加してまいります。<br>
                    ぜひ担当メンバーへ皆さまの声をお聞かせください。
                </p>
            </div>

            <div class="cont_construction">
                <div class="cont_inner">
                    <ul class="list_news">
                        <?php if (have_posts()):?>
                            <?php while(have_posts()): the_post(); ?>
                                <?php
                                    $tarms = get_the_terms($post->ID,'cat_news');
                                    $cate = $tarms[0]->name;
                                ?>
                                <li>
                                    <a href="<?php echo home_url("/"); ?>project">
										<p class="categoryname"><?php echo $cate; ?></p>
                                        <div class="wrap-img">
                                    <?php if(get_field('thumbnail')): ?>
                                        <img src="<?php echo get_field('thumbnail'); ?>" alt="">
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
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
