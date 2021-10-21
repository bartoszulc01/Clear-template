<?php
   /**
    * The most generic template file in hierarchy.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */
   ?>
<?php get_header(); ?>
<section class="section section--news-blog-list mt-5 mt-xl-7 pt-xl-1">
<div class="container px-0 pt-xl-2">
<div class="row">
<?php if ( have_posts() ) :
   while ( have_posts() ) : the_post();
   ?>
<?php endwhile; endif;?>

<?php get_footer(); ?>