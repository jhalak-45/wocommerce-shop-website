<?php get_header() ?>
<div class="container-fluid p-3">
    <?php
    echo do_shortcode('[woocommerce_checkout]')
    ?>
</div>

<?php get_footer() ?>