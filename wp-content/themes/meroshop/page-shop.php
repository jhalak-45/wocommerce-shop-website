<?php get_header(); ?>
<div class="container-fluid pt-4 px-auto">
    <div class="search-bar justify-content-center w-100 shadow-lg p-3 mb-0 bg-body rounded  bg-light">
        <?php dynamic_sidebar('search-box') ?>

    </div>
    <div class="product-container p-3 pt-5">
        <?php
        echo do_shortcode('[products columns="4" limit="100"]');

        //  echo do_shortcode('[product_category]')
        ?>

    </div>
    <div class="pagination p-3 shadow-lg">
    <?php wp_pagenavi(); ?>

    </div>


</div>
<!-- columns="4" -->
<?php get_footer() ?>