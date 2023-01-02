<?php get_header() ?>
<div class="container-fluid">
    <div class="checkout p-2 mt-3">
    <?php
    echo do_shortcode('[woocommerce_cart]')
    ?>
    </div>
    
</div>

<?php get_footer() ?>