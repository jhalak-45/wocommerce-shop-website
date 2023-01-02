<!DOCTYPE html>
<html>

<head>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?> class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light container-fluid mt-0 p-1 navbar-sticky sticky-top">
        <div class=" px-auto logo ml-4 navbar-brand">
            <?php the_custom_logo(); ?>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primarymenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-dark"></i>
        </button>
        <div class="collapse navbar-collapse " id="primarymenu">
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'primary',
                'container_class' => 'collapse navbar-collapse  ml-2',
                'container_id'    => 'primarymenu',
                'menu_class'      => 'navbar-nav   primary-menu menu-item',
                'a_class' => 'dropdown-toggle',
                'li_class' => 'nav-item dropdown-item',
                'active_class' => 'active',
                // 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                // 'walker'          => new WP_Bootstrap_Navwalker(),


            ));
            ?>
        </div>
    

    </nav>