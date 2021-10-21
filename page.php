<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('background-header'); ?>
<section class="section section--news-blog-list mt-5 mt-xl-7 pt-xl-1">
<div class="container pt-xl-2">
   <div class="row">
      <div class="col-xl-12 col-lg-12 privacy-policy__content mt-4rem pt-2 mt-xl-0">
         <?php the_content() ;?>
      </div>
   </div>
</div>
</section>
<?php endwhile; endif;?>
<?php get_footer();?>