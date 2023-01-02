<?php get_header() ?>
<div class="container-fluid mt-2">
    <div class="account p-4 d-block">
        <?php
        echo do_shortcode('[woocommerce_my_account]');
        ?>
    </div>

</div>

<?php get_footer() ?>