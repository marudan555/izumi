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

<?php
    $get_cat = $_GET["cate"];
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => array('news'),
        'tax_query' => array('relation' => 'AND'),
        // 'tax_query' => array(),
        'posts_per_page' => -1,
        'paged' => $paged,
        'post_status' => 'publish',
    );
    $returnTaxonomy = create_taxonomy_array($get_cat,'cat_news');
    if($returnTaxonomy){
        array_push($args['tax_query'],$returnTaxonomy);
    }
    function create_taxonomy_array($getCategory,$taxonomySlug){
        if($getCategory){
            if($taxonomySlug == "cat_news"){
                $taxonomy[] = array(
                    'taxonomy' => $taxonomySlug,
                    'field' => 'slug',
                    'terms' => $getCategory,
                );
            }
            return $taxonomy;
        }else{
            return;
        }
    }
?>
<?php $myquery = new WP_Query($args); ?>

<main class="maincontents">
    <div class="wrap-content">
        <h2>お知らせ・イベント情報<span class="line"></span></h2>
        <div class="inner">
            <div class="menu">
                <div class="inner">
                    <ul class="cf">
                        <li <?php if($get_cat == ""): ?>class="active"<?php endif; ?>><a href="<?php echo home_url("/"); ?>news">すべて</a></li>
                        <li <?php if($get_cat == "お知らせ"): ?>class="active"<?php endif; ?>><a href="<?php echo home_url("/"); ?>news?cate=お知らせ">お知らせ</a></li>
                        <li <?php if($get_cat == "イベント"): ?>class="active"<?php endif; ?>><a href="<?php echo home_url("/"); ?>news?cate=イベント">イベント</a></li>
                        <li <?php if($get_cat == "まちリレ"): ?>class="active"<?php endif; ?>><a href="<?php echo home_url("/"); ?>news?cate=まちリレ">まちリレ</a></li>
                    </ul>
                </div>
            </div>
            <?php if($get_cat == "まちリレ"): ?>
                <div class="news_text_machirire">
                    <p>
                        私たちパークタウンサービスは、1974年の街開きから40年以上にわたりこの街がより素敵な街になるよう、地域の皆さまとともにまちづくりの一環としてたくさんの活動をしてまいりました。
                        この街を想う気持ちは、今までもこれからも皆さまと一緒です。<br>
                        「そばにいる会社」ではなく、「一緒にいる会社」として、地域の皆さまと一緒に様々な活動を行う「まちリレーション<br class="sp_only">プロジェクト」を立ち上げました。<br>
                        清掃活動や夏祭りなどの町内会行事、サークル活動、学校行事、防災訓練などこの街で行われる行事に、各エリアの担当メンバーが参加してまいります。<br>
                        ぜひ担当メンバーへ皆さまの声をお聞かせください。
                    </p>
                </div>
            <?php endif; ?>
            <div class="cont_construction">
                <div class="cont_inner">
                    <ul class="list_news">
                        <?php if ($myquery->have_posts()):?>
                            <?php while($myquery->have_posts()): $myquery->the_post(); ?>
                                <?php
                                    $tarms = get_the_terms($value->ID,'cat_news');
                                    $cate = $tarms[0]->name;
                                ?>
                                <li>
                                    <?php if($get_cat == "まちリレ"): ?>
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
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
