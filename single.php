<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
 <?php
        if ( has_post_thumbnail() ):
      ?>
        <a href="<?php the_permalink(); ?>" class="post-list-item-thumb">
          <?php the_post_thumbnail(); ?>
        </a>  
      <?php 
        endif;
    ?>
 <?php the_content(); ?>

</div><!-- /.blog-post -->