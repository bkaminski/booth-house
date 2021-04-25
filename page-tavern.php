<?php get_header(); 
/**
 * Template Name: Tavern template
 *
 * @package WordPress
 * @subpackage Booth House Tavern
 * 
 */
?>

<?php echo get_template_part('parts/page', 'tavern-hero'); ?>

<?php echo get_template_part('parts/page', 'tavern-main'); ?>

<?php echo get_template_part('parts/page', 'reservations'); ?>

<?php echo get_template_part('parts/page', 'tavern-social'); ?>

<?php get_footer(); ?>
