<style>
.col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
}

.jumbotron {
    margin-bottom: 0;
    }
    
.row
{
    margin-top: 2rem;
}
</style>

<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
<div class="container">

<h3 class="display-4">&Uacute;ltimos posts</h3>

<div class="row">
<!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
          <div class="col-lg-4">
    <?php 
        //the_post_thumbnail(); 
    the_post_thumbnail('post-thumbnail', ['class' => 'rounded-circle', 'title' => 'Feature image']);
    ?>
    <h2><?php the_title(); ?></h2>
    <p> <?php the_excerpt(); ?></p>
    <small class="text-muted"><?php the_date(); ?> - <?php the_author(); ?></small>
    <p><a class="btn btn-secondary" href="<?php the_permalink(); ?>" role="button">View details »</a></p>
  </div><!-- /.col-lg-4 -->
  
        <!--  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>-->
    <?php endwhile; ?>
    <!-- end of the loop -->
 
 </div>
        </div>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>