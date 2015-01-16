<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>	
  

  <div id="post-<?php the_ID(); ?>" class="post">
      <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image', array('class' => 'img-responsive')); ?></a>
      <div id="post-title-<?php the_ID(); ?>" class="clearfix full">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>			
      </div> <!-- end div .post-title -->
    
      <p class="post_meta"><?php the_time('F j, Y'); ?>, posted by <?php the_author_posts_link();/*to link the author and author post*/ ?></p>
    <?php the_excerpt(); ?>
    <hr/>
    <a href="<?php the_permalink(); ?>" class="readmore">Read More...</a>
</div>
<?php endwhile; ?>	
<?php endif; ?>
