<?php get_header(); 
/**
 * Template Name: About Us template
 *
 * @package WordPress
 * @subpackage Booth House Tavern
 * 
 */
?>

<?php echo get_template_part('parts/page', 'about-hero'); ?>

<?php echo get_template_part('parts/page', 'about-main'); ?>

<?php echo get_template_part('parts/page', 'loop-main'); ?>

<?php echo get_template_part('parts/page', 'careers'); ?>

<?php get_footer(); ?>