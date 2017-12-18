  <div class="col-lg-4">
    <?php the_post_thumbnail(); ?>
    <h2><?php the_title(); ?></h2>
    <p> <?php the_excerpt(); ?></p>
    <small class="text-muted"><?php the_date(); ?> - <?php the_author(); ?></small>
    <p><a class="btn btn-secondary" href="<?php the_permalink(); ?>" role="button">View details »</a></p>
  </div><!-- /.col-lg-4 -->
  
