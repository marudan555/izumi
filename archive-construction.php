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
        'post_type' => array('construction'),
        'tax_query' => array('relation' => 'AND'),
        // 'tax_query' => array(),
        'posts_per_page' => -1,
        'paged' => $paged,
        'post_status' => 'publish',
    );
    $returnTaxonomy = create_taxonomy_array($get_cat,'cat_construction');
    if($returnTaxonomy){
        array_push($args['tax_query'],$returnTaxonomy);
    }
    function create_taxonomy_array($getCategory,$taxonomySlug){
        if($getCategory){
            if($taxonomySlug == "cat_construction"){
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
        <h2>施工例一覧<span class="line"></span></h2>
        <div class="inner">
            <div class="menu">
                <div class="inner">
                    <ul class="cf">
                        <li <?php if($get_cat == ""): ?>class="active"<?php endif; ?>><a href="<?php echo home_url("/"); ?>construction">すべて</a></li>
                        <li class="line2 <?php if($get_cat == "新築・リフォームリノベーション"): ?>active<?php endif; ?>"><a href="<?php echo home_url("/"); ?>construction?cate=新築・リフォームリノベーション">新築・リフォーム<br>リノベーション</a></li>
                        <li <?php if($get_cat == "お庭づくり"): ?>class="active"<?php endif; ?>><a href="<?php echo home_url("/"); ?>construction?cate=お庭づくり">お庭づくり</a></li>
                        <li <?php if($get_cat == "施設・緑地"): ?>class="active"<?php endif; ?>><a href="<?php echo home_url("/"); ?>construction?cate=施設・緑地">施設・緑地</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="area_section_news contarea sp_contarea"> -->
            <div class="cont_construction">
                <div class="cont_inner">
                    <ul class="list_news">
                        <?php if ($myquery->have_posts()):?>
                            <?php while($myquery->have_posts()): $myquery->the_post(); ?>
                                <?php
                                    $tarms = get_the_terms($value->ID,'cat_construction');
                                    $cate = $tarms[0]->name;
                                ?>
                                <li>
                                    <a href="<?php echo get_permalink($value->ID); ?>">
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
