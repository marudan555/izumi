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
<?php the_field('title'); ?>
<?php the_content(); ?>
<?php endwhile; ?>


<?php get_footer();
