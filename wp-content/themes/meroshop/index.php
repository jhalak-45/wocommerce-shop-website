<?php get_header() ?>
<div class="container-fluid pb-3 bg-light">
      <?php
      if (have_posts()) {
         while (have_posts()) {
            the_post();
      ?>
            <h2 class="h2 text-center text-light mt-1  mb-0 bg-dark  p-3"><?php the_title(); ?> </h2>
            <div class=" bg-light card border-0 p-4 shadow-lg faqs"><?php the_content(); ?></div>
      <?php
         }
      } ?>

</div>
<?php get_footer() ?>