<?php get_header(); ?>

    <!-- Maincontent -->
    <section class="maincontent_area internal_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                   
                    <h2 class="archive-title"><?php if (have_posts()) : ?>
                        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                        <?php /* If this is a category archive */ if (is_category()) { ?>
                        <?php _e('Archive for the', 'brightpage'); ?> '<span><?php echo single_cat_title(); ?></span>' <?php _e('Category', 'brightpage'); ?>									
                        <?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
                        <?php _e('Archive for the', 'brightpage'); ?> <span><?php single_tag_title(); ?></span> Tag
                        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                        <?php _e('Archive for', 'brightpage'); ?> <span><?php the_time('F jS, Y'); ?></span>										
                        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                        <?php _e('Archive for', 'brightpage'); ?><span> <?php the_time('F, Y'); ?></span>									
                        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                        <?php _e('Archive for', 'brightpage'); ?> <span><?php the_time('Y'); ?></span>										
                        <?php /* If this is a search */ } elseif (is_search()) { ?>
                        <?php _e('Search Results', 'brightpage'); ?>							
                        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                        <?php _e('Author Archive', 'brightpage'); ?>										
                        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                        <?php _e('Blog Archives', 'brightpage'); ?>										
                        <?php } ?></h2>
                        
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
