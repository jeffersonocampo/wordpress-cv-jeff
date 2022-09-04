<!-- Preloading -->
<div id="preloader">
    <div class="spinner">
    </div>
</div>

<!-- Wrapper -->
<div class="wrapper top_60 container">
    <div class="row">

        <!-- Profile Section
================================================== -->
        <?php get_template_part('template-parts/content', 'profile'); ?>


        <!-- Page Tab Container Div -->
        <div id="ajax-tab-container" class="col-lg-9 col-md-8 tab-container">

            <!-- Header
================================================== -->
            <div class="row">
                <header class="col-md-12">
                    <nav>
                        <div class="row">
                            <!-- navigation bar -->
                            <div class="col-md-8 col-sm-8 col-xs-4">
                                <ul class="tabs">
                                    <li class="tab">
                                        <a class="home-btn" href="#home"><i class="fa fa-home" aria-hidden="true"></i></a>
                                    </li>
                                    <div class="tab"><?php wp_nav_menu(array("menu" => 'menu-principal')); ?>
                                    </div>

                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8 dynamic">
                                <button class="pull-right site-btn icon hidden-xs">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <div class="hidden-md social-icons pull-right">
                                    <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>