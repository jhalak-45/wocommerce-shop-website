<?php get_header(); ?>
<div class="container-fluid">
    <h2 class="title p-2 ml-2 text-success">
        Searched Results:

    </h2>
    <div class="seprator text-center justify-contnet-center">
        <hr>
    </div>
    <div class="results p-2 ">
        <?php // aws_get_search_form(true); ?>


    </div>
    <div class="detail p-2">
        <?php
        while (have_posts()) : the_post();
        ?>
            <?php // the_post_thumbnail(); 
            ?>
            <?php
            wc_get_template_part('content', 'single-product');
            ?>

        <?php
        endwhile; // end of the loop. 
        ?>
    </div>



</div>

<?php get_footer() ?>