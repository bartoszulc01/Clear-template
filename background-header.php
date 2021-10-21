<?php if ( get_field('underh1') || (get_field('h1'))) : ?>
<div class="background-header position-relative acf">
    <div class="container position-static p-0 h-100">
        <div class="row m-0 flex-nowrap h-100">
        <div class="col-sm-12 d-flex flex-column justify-content-lg-center justify-content-end pb-4rem pb-lg-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="900" >
            <?php the_field( 'h1' ); ?>
            <div class="under-h1">
                <?php the_field( 'underh1' ); ?>
            </div>
            </div>
            <div class="col-12 p-0" >
            <?php the_post_thumbnail('full',  array( 'class' => 'img-fluid position-relative d-none d-md-block' )); ?>
            <?php $image = get_field( 'image' ); ?>
            <?php if ( $image ) { ?>
            <?php echo wp_get_attachment_image( $image, 'full', '', array( 'class' => 'img-fluid position-relative d-block d-md-none d-lg-none background-mobile')); ?>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="background-header position-relative">
    <div class="container position-static p-0 h-100">
        <div class="row m-0 flex-nowrap h-100">
            <div class="col-sm-12 d-flex flex-column justify-content-lg-center justify-content-end pb-4rem pb-lg-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="900" >
            <h1 class="m-0"><?php the_title();?></h1>
            </div>
            <div class="col-12 p-0" >
            <?php the_post_thumbnail('full',  array( 'class' => 'img-fluid position-relative d-none d-md-block' )); ?>
            <?php $image = get_field( 'image' ); ?>
            <?php if ( $image ) { ?>
            <?php echo wp_get_attachment_image( $image, 'full', '', array( 'class' => 'img-fluid position-relative d-block d-md-none d-lg-none background-mobile')); ?>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

