<?php get_header(); ?>

    <!-- Maincontent -->
    <section class="maincontent_area internal_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                   
                    <h2 class="archive-title">
                        
                        <?php printf( __( 'Search Results for: %s', 'brightpage' ), '<span>' . get_search_query() . '</span>' ); ?>
                    </h2>
                    <?php if (have_posts()) : ?>
                    <div class="blog_content">
                        <div id="fullwidth_blog" class="js-masonry">
                            <?php get_template_part('post-loop'); ?>

                        </div>
                    </div>
                    <?php get_template_part('includes/pagination'); ?>
                       
                    <?php else : ?>
                    <?php get_template_part('includes/four-zero-four'); ?>
                    <?php endif; ?>

                </div>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Footer -->
    <?php get_footer(); ?>
