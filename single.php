<?php
/**
 * The most generic template file in hierarchy.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header() ?>
<?php get_template_part( 'background', 'index' ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="blog-posts py-6 bg-background">
       <div class="container">
           <div class="row">
            <div class="col-xl-10 mx-auto" data-aos="fade-up" data-aos-delay="200" data-aos-duration="900">
            <div class="card p-0 px-xl-3 pt-xl-3">
            
            <?php the_post_thumbnail('full',  array( 'class' => 'img-fluid mx-auto d-block')); ?>
            
        <div class="card-body px-3">
        <div class="d-flex justify-content-between mb-3">
        <time class="entry-date" itemprop="datePublished" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
        </div>
        <h1 class="h2 first-span"><?php the_title(); ?></h1>
        
        
        </div>
        <div class="px-3" >
        <p class="card-text" ><?php the_content();?></p>
        </div>
      </div>     
            </div>   
            </div>
           </div>
    </section>
<?php endwhile; ?>


<?php get_footer(); ?>