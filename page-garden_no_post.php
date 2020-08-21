<?php
/**
 *
 * Template Name: お庭づくり
 *
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
                      <li><a href="<?php echo get_post_type_archive_link('construction'); ?>">すべて</a></li>
                      <li class="line2"><a href="<?php echo get_term_link('new', 'cat_construction') ?>">新築・リフォーム<br>リノベーション</a></li>
                      <li class="active"><a href="<?php echo get_term_link('garden', 'cat_construction') ?>">お庭づくり</a></li>
                      <li><a href="<?php echo get_term_link('facility', 'cat_construction') ?>">施設・緑地</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="area_section_news contarea sp_contarea"> -->
            <div class="cont_construction">
                <div class="cont_inner">

                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer();
