<div id="blog">
    <div class="row">
        <section class="blog col-md-12 bottom_30">
            <div class="col-md-12 content-header">
                <div class="section-title top_30 bottom_15"><span></span>
                    <h2>Blog Posts</h2>
                </div>
            </div>

            <?php if (have_posts()) { ?>
                <?php while (have_posts()) {
                    the_post(); ?>
                    <?php the_content(); ?>
                <?php } ?>
            <?php } ?>

            <?php

            $args = array(
                //"post_type" => array("entradas"),
                //-1 significa infinitos posts, es decir, todos
                "posts_per_page" => 5,
            );

            $entrada = new WP_Query($args);
            ?>

            <div id="grid-blog" class="row">

                <?php if ($entrada->have_posts()) { ?>
                    <?php while ($entrada->have_posts()) {
                        $entrada->the_post(); ?>
                        <!-- a blog-->

                        <div class="cbp-item">
                            <a href="<?php the_permalink() ?>" class="blog-box">
                                <div class="blog-img">
                                    <?php the_post_thumbnail() ?>
                                </div>
                                <div class="blog-box-info">
                                    <span class="category">test</span>
                                    <h2 class="title"><?php the_title() ?></h2>
                                    <p class="little-text"><?php the_excerpt() ?></p>
                                    <span class="date"><?php the_date() ?></span>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>
            <!-- load more button -->
            <div id="load-posts" class="cbp-l-loadMore-button top_60">
                <a href="load-more/blog-posts.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                    <span class="cbp-l-loadMore-defaultText">Load More (<span class="cbp-l-loadMore-loadItems">3</span>)</span>
                    <span class="cbp-l-loadMore-loadingText">Loading...</span>
                    <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
                </a>
            </div>
        </section>
    </div>
</div>