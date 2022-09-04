<?php get_header() ?>

<!-- Page Content
    ================================================== -->
<div class="col-md-12">
    <div id="content" class="panel-container">

        <!-- Home Page
            ================================================== -->

        <?php get_template_part('template-parts/content', 'home'); ?>

        <!-- Resume Page
            ================================================== -->

        <?php get_template_part('template-parts/content', 'resume'); ?>

        <!-- Portfolio Page
            ================================================== -->

        <?php get_template_part('template-parts/content', 'portfolio'); ?>

        <!-- Blog Page
            ================================================== -->

        <?php get_template_part('template-parts/content', 'blog'); ?>

        <!-- Contact Page
            ================================================== -->

        <?php get_template_part('template-parts/content', 'contact'); ?>


    </div><!-- Content - End -->
</div> <!-- col-md-12 end -->
</div><!-- row end -->



<?php get_footer() ?>