<?php get_header(); ?>

    <!-- Maincontent -->
    <section class="maincontent_area internal_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="internal-page-content">
                        <?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
                        <div class="post" id="post-<?php the_ID(); ?>">

                            <div id="post-title" class="clearfix full">
                                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>			
                            </div> <!-- end div .post-title -->

                            <div class="entry">

                                <?php the_content(); ?> 

                                <div class="space"></div>

                              
                            </div> <!-- end div .entry -->

                            <?php comments_template( '', true ); ?>								

                        </div> <!-- end div .post -->

                        <?php endwhile; ?>

                        <?php else : ?>
                        <?php get_template_part('includes/four-zero-four'); ?>

                        <?php endif; ?>
                        
                    </div>
                    <?php get_template_part('includes/pagination'); ?>
<!--
                    <div class="clear"></div>
                    <div class="post_navigation single_page_sidebar_navigation">
                        <a href="" class="previous_navigation"><span class="meta-nav">&larr;</span> Previous</a>
                        <a href="" class="next_navigation">Next <span class="meta-nav">&rarr;</span></a>
                    </div>
-->

                </div>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Footer -->
    <?php get_footer(); ?>
