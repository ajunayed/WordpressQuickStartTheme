<div class="four-zero-four">

    <div class="four-zero-msg">
        <h1>404<span>Not Found</span></h1>
        <p>We are sorry could not found what you have looking for. Perhaps a search can help</p>
        <!--                            <?php get_search_form(); ?>-->

    </div>
    <div class="four-zero-searchform">
        <form action="<?php echo site_url(); ?>" class="searchform" id="searchform" method="get" role="search">
            <div>

                <input type="text" id="s" name="s" value="" placeholder="Type your keyword here:">
                <input type="submit" value="Search" id="searchsubmit">
            </div>
        </form>

    </div>
    <div class="four-zero-resource">
        <div class="row">
            <div class="col-md-6">
                <h2>Recent Page</h2>
                <ol>
                    <?php
global $post;
$args = array( 'posts_per_page' => 5, 'post_type'=> 'page' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>


                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>




                    <?php endforeach; ?>
                </ol>
            </div>
            <div class="col-md-6">
                <h2>Recent post</h2>
                <ol>
                    <?php
global $post;
$args = array( 'posts_per_page' => 5, 'post_type'=> 'post' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>


                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>



                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>

</div>
