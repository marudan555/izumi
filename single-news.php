<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
    <!-- <?php the_content(); ?> -->
    <?php
        $tarms = get_the_terms($post->ID,'cat_news');
        $cate = $tarms[0]->name;
    ?>
<main class="maincontents">
    <div class="wrap-content">
        <div class="inner">
            <div class="catlist cf">
                <div class="cat">
                    <p><?php echo $cate; ?></p>
                </div>
            </div>
            <h3><?php the_title(); ?></h3>
            <div class="construction_detail">
                <div class="txt">
                    <?php the_field('detail'); ?>
                </div>
            </div>
            <div class="wrap-btn">
                <div class="inner">
                    <a href="<?php echo home_url("/"); ?>news/" class="btn_detail back">前のページへ戻る</a>
                </div>
            </div>
        </div>
    </div>
</main>




<?php endwhile; ?>


<?php get_footer();
