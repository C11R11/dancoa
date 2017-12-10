<div class="blog-post">
    <?php if ( has_post_thumbnail() ):?>
    <div class="row">
        <div class="col-xs-4 col-md-3">
            <a href="<?php the_permalink(); ?>" class="thumbnail">
            <?php the_post_thumbnail(); ?>
            </a>
        </div>
    <?php 
        endif;
    ?>
        <div class="col-xs-8 col-md-9">
            <h4 class="blog-post-title"><?php the_title(); ?></h4>
            <p class="blog-post-meta"><?php the_date(); ?> <!--by  <a href="#"><?php the_author(); ?></a>--></p>
            <?php the_excerpt(); ?>
        </div> 
    </div><!-- row -->
</div><!-- /.blog-post -->