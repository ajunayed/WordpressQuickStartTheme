<div class="clear"></div>

<?php if(function_exists('wp_pagenavi')): ?>
<div class="page-navi-various">
<?php wp_pagenavi(); ?>
</div>
<?php else : ?>

<div class="post_navigation single_page_sidebar_navigation">

    <?php previous_posts_link( '<span class="meta-nav">&larr;</span> Previous', 0 ); ?>

    <?php next_posts_link( 'Next <span class="meta-nav">&rarr;</span>', 0 ); ?>

    <!--
<a href="" class="previous_navigation"><span class="meta-nav">&larr;</span> Previous</a>
<a href="" class="next_navigation">Next <span class="meta-nav">&rarr;</span></a>
-->
</div>

<?php endif; ?>
