<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Wootpress
 * @since Wootpress 1.0
 */

get_header(); ?>
<section class="bg-1">
    <div class="container">
        <div class="row">
        <div class="col-md-12 text-center">
        <div class="hero-text">
        <h1 class="display-4">404</h1>
        <p class="lead mb-3 h4"><?php echo esc_attr(__('Page not found', 'egoras')); ?></p>
        <a class="btn btn-secondary" href="<?php bloginfo('url');?>"><?php echo esc_attr(__('Back', 'egoras')); ?></a>
        </div>
        </div> 
        </div>
    </div>
</section>
<?php get_footer(); ?>
