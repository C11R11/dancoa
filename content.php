<div class="blog-post">
 <?php
        if ( has_post_thumbnail() ):
      ?>
      <div class="post-img-wrap">

        <a href="<?php the_permalink(); ?>" class="post-list-item-thumb">
          <?php the_post_thumbnail(); ?>
        </a> 
      </div> 
      <?php 
        endif;
    ?>
    <div>
    <h4 class="blog-post-title"><?php the_title(); ?></h4>
	<p class="blog-post-meta"><?php the_date(); ?> <!--by  <a href="#"><?php the_author(); ?></a>--></p>
 <?php the_excerpt(); ?>

	</div>
</div><!-- /.blog-post -->