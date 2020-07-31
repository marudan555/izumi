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
        <h2>施工例一覧<span class="line"></span></h2>
        <div class="inner">
            <div class="menu">
                <div class="inner">
                    <ul class="cf">
                      <li><a href="<?php echo get_archives_link('construction'); ?>">すべて</a></li>
                      <li class="line2 active"><a href="<?php echo get_term_link('new', 'cat_construction') ?>">新築・リフォーム<br>リノベーション</a></li>
                      <li><a href="<?php echo get_term_link('garden', 'cat_construction') ?>">お庭づくり</a></li>
                      <li><a href="<?php echo get_term_link('facility', 'cat_construction') ?>">施設・緑地</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="area_section_news contarea sp_contarea"> -->
            <div class="cont_construction">
                <div class="cont_inner">
                    <ul class="list_news">
                        <?php if (have_posts()):?>
                            <?php while(have_posts()): the_post(); ?>
                                <?php
                                    $tarms = get_the_terms($post->ID,'cat_construction');
                                    $cate = $tarms[0]->name;
                                ?>
                                <li>
                                    <a href="<?php echo get_permalink($value->ID); ?>">
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
