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
        $tarms = get_the_terms($post->ID,'cat_construction');
        $cate = $tarms[0]->name;
    ?>
<main class="maincontents">
    <div class="wrap-content">
        <div class="inner">
            <div class="catlist cf">
                <div class="cat">
                    <p><?php echo $cate; ?></p>
                </div>
                <div class="area">
                    <p><?php the_field('area'); ?></p>
                </div>
            </div>
            <h3><?php the_title(); ?></h3>
            <div class="construction_detail">
                <div class="wrap-img">
                    <img src="<?php the_field('main_img'); ?>" alt="main_img">
                </div>
                <?php if( have_rows('img_type_1') ): ?>
                    <?php while( have_rows('img_type_1') ): the_row(); ?>
                        <div class="photobox_1 cf">
                            <div class="wrap-img"><img src="<?php echo get_sub_field('one_img'); ?>" alt=""></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('img_type_2') ): ?>
                    <?php while( have_rows('img_type_2') ): the_row(); ?>
                        <div class="photobox_2 cf">
                            <div class="left"><div class="wrap-img"><img src="<?php echo get_sub_field('left_img_type_2'); ?>" alt=""></div></div>
                            <div class="right"><div class="wrap-img"><img src="<?php echo get_sub_field('right_img_type_2'); ?>" alt=""></div></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('img_type_3') ): ?>
                    <?php while( have_rows('img_type_3') ): the_row(); ?>
                        <div class="photobox_3 cf">
                            <div class="left"><div class="wrap-img"><img src="<?php echo get_sub_field('left_img_type_3'); ?>" alt=""></div></div>
                            <div class="right"><div class="wrap-img"><img src="<?php echo get_sub_field('right_img_type_3'); ?>" alt=""></div></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
				<?php if(get_field('comment01')): ?>
				<div class="txt">
                    <h3>担当者コメント</h3>
                    <p><?php the_field('comment01'); ?></p>
                </div>
				<?php endif; ?>
				<?php if(get_field('comment02')): ?>
				<div class="txt">
                    <h3>お客様コメント</h3>
                    <p><?php the_field('comment02'); ?></p>
                </div>
				<?php endif; ?>
				<?php if(get_field('category')): ?>
				<div class="textStyle">
<?php
$fields = get_field_objects($post_id);
$dir_array = $fields["category"]["choices"];
$check = get_field('category');
if($check): ?>
				<ul><?php foreach($check as $value): ?>
		<li><span class="<?php echo $value; ?>"><?php echo $dir_array[$value]; ?></span></li>
	<?php endforeach; endif ?></ul>
				<div class="wrap">
				<h3>クライアント</h3>
				<p><?php the_field('client_text'); ?></p>
				</div>
				<div class="wrap">
				<h3>担当業務</h3>
				<p><?php the_field('responsible_text'); ?></p>
				</div>
				<?php endif; ?>
            </div>

            <div class="wrap-btn">
                <div class="inner">
                    <a href="<?php echo home_url("/"); ?>construction/" class="btn_detail back">前のページへ戻る</a>
                </div>
            </div>
        </div>
    </div>
</main>




<?php endwhile; ?>


<?php get_footer();
