<?php get_header(); 
/**
 * Template Name: Cafe template
 *
 * @package WordPress
 * @subpackage Booth House Tavern
 * 
 */
?>

<?php echo get_template_part('parts/page', 'cafe-hero'); ?>

<?php echo get_template_part('parts/page', 'loop-main'); ?>

<?php echo get_template_part('parts/page', 'cafe-reservations'); ?>

<?php echo get_template_part('parts/page', 'cafe-social'); ?>

<?php get_footer(); ?>