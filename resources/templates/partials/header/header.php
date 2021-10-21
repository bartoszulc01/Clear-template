<?php
   /**
    * 
   */
   ?>
<div class="menu">
   <nav class="navbar navbar-expand-xl navbar-light w-100 px-xl-8 " role="navigation">
   <a class="navbar-brand position-absolute d-none d-lg-block mx-auto" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/public/images/icons/logo-header.svg" alt=""></a>
      <div class="container justify-content-xl-end justify-content-between">
      <a class="brand-mobile position-relative d-block d-lg-none" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/public/images/icons/logo-header-mobile.svg" alt=""></a>
      <div class="menu-socials d-block d-lg-none">
         <ul class="p-0 m-0 no-list d-flex mb-0">
            <li><a href="tel:<?php the_field( 'telefon', 'option' ); ?>"><img src="/wp-content/uploads/2021/10/phone.svg" alt=""></a></li>
            <li ><a href="mailto:<?php the_field( 'mail', 'option' ); ?>"><img src="/wp-content/uploads/2021/10/mail.svg" alt=""></a></li>
         </ul>
      </div>
         <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav ml-auto',
            ) );
            ?>
          
         <div class="menu-socials d-none d-lg-block">
         <ul class="p-0 m-0 no-list d-flex mb-0">
            <li><a href="tel:<?php the_field( 'telefon', 'option' ); ?>"><img src="/wp-content/uploads/2021/10/phone.svg" alt=""></a></li>
            <li ><a href="mailto:<?php the_field( 'mail', 'option' ); ?>"><img src="/wp-content/uploads/2021/10/mail.svg" alt=""></a></li>
         </ul>
      </div>
      </div>
      
   </nav>
</div>