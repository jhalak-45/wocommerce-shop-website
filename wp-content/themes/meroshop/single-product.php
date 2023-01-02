<?php get_header() ?>
<div class="container-fluid">
    <div class="details pt-3 mt-2 h-auto single-page-container">
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


        <div class="social-connection p-2" style="background-color:#ffffff ;">
            <h2 class="title">Contact Direct</h2>
            <div class="row">
                <div class="col-3 p-3">
                    <a href=""><img src="<?php echo  get_template_directory_uri() . "/whatsapp.png" ?>" height="80px" width="100px"> </a>
                </div>

                <div class="col-3">
                    <a href="https://www.facebook.com/jhalakdhami7890"><img src="<?php echo  get_template_directory_uri() . "/messangerr.jpg" ?>" height="70px" width="100px"> </a>
                </div>
            </div>
        </div>
    </div>

    <!-- <?php
            /**
             * woocommerce_after_main_content hook.
             *
             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
             */
            //do_action('woocommerce_after_main_content');
            ?> -->
</div>

<?php get_footer() ?>