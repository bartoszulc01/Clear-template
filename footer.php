<?php
   /**
    * This is the template that displays all of the <footer> section and rest of html code.
    *
    * 
    * @package wpg
    */
   
   ?>
<?php get_template_part('resources/templates/partials/footer/footer'); ?>
</div><!-- #app -->
<?php wp_footer();?>
<?php the_field('body_code', 'options'); ?>

</body>

</html>
