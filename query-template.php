<section class="blog-post">
        <div class="container">
        <div class="row">
          <div class="col-xl-10 mx-auto">

        <?php query_posts(array('posts_per_page' => 4, 'paged' => $paged));
$queryObject = new  Wp_Query( array(
    'posts_per_page' => 99999,
    'post_type' => array('post'),
    'paged' => $paged,
    'orderby' => 1,
    )); 
if ( $queryObject->have_posts() ) {
while ( $queryObject->have_posts() ) {
$queryObject->the_post(); ?>
<div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="900">
    <div class="col-lg-4">
    <a rel="nofollow" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('full',  array( 'class' => 'img-fluid mx-auto d-block')); ?>
    </a>
    </div>
    <div class="col-lg-8">
    <time class="entry-date" itemprop="datePublished" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
    <a rel="nofollow" href="<?php the_permalink(); ?>">
    <h3 class="first-span"><?php the_title(); ?></h3>
    </a>
    <?php the_excerpt();?>
    <a href="<?php the_permalink(); ?>" rel="nofollow" class="btn-blog">Czytaj dalej</a>
    </div>
    </div>
    <?php }}  ?>


    </div>
    </div>
     </div>
</section>
