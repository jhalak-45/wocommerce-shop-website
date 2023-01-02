<?php get_header() ?>
<div class="container-fluid">

    <section class="main-page row pt-5">

        <div class="col-md-5 card  border-0 bg-transparent">
            <div class="search-bar form-group shadow-lg p-1 mb-5 bg-body rounded">
                <?php dynamic_sidebar('search-box') ?>
            </div>
            <div class="front-page-text mt-2">
                <span class="h1 mb-3 text-highlight mt-3 ml-2">Every Purchase
                    Will Be Made
                    With Pleasure</span>
                <h2 class="h2 text-success ml-1">Get upto 30% offer at a time</h2>
                <h3 class="text h3 mt-2">
                    <span class="text-success">Best collections</span> for our costumer in our shop
                </h3>
                <a href="<?php echo get_template_directory_uri() . "/shop" ?>" class="button">Buy Now</a>
            </div>
        </div>
        <div class="col-md-7 m-0 p-2 text-center">
            <img class="text-center img-responsive text-center" src="<?php echo get_template_directory_uri() . "/ec.png" ?>" alt="Background Image" height="400px" width="auto" style="background-color:aliceblue;">
            <?php //echo get_template_directory_uri() 
            ?>
        </div>

    </section>
    <!-- <section class="latest_products p-3 shadow-none pt-5">
        <div class="title-bar shadow-sm">
            <h2 class="title">Featured Products</h2>
            <p class="text-muted text-center  slug">- All Featured Products -</p>
        </div>
        <?php echo do_shortcode('[featured_products columns="4" limit="24"]') ?>
    </section> -->
    <section class="latest_products p-3 shadow-none pt-5 mt-0">
        <div class="title-bar shadow-sm">
            <h2 class="title">Latest Products</h2>
            <p class="text-muted text-center  slug">- All Latest Products -</p>
        </div>
        <?php echo do_shortcode('[recent_products columns="4" limit="24"]') ?>
    </section>
</div>

<?php get_footer() ?>
