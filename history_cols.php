<style>
/*.col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
}

article {
    background-color: #5b5b5b;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.67);
    -moz-box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.67);
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.67);
    margin-bottom: 40px;
    color: #dfdfdf;
    }
    
    article .body {
    padding-right: 45px;
    padding-left: 45px;
    margin-bottom: 10px;
    color: #dfdfdf;
}

article header
{
    padding-top: 20px;
    padding-right: 45px;
    padding-left: 45px;
    text-align: center;
}

article .clearfix
{
    margin-bottom: 40px;
}

.jumbotron {
    margin-bottom: 0;
    }
    
.row
{
    margin-top: 2rem;
}*/
</style>

<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
<div class=".container-fluid m-5 pr-5 pl-5">

<h3 class="display-4">&Uacute;ltimos posts</h3>

<div class="row mt-5">
<!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 bg-dark text-white mr-2 mb-2 p-3">
     <article>
     <header class="pr-4 pl-4 text-center">
     <?php 
         the_post_thumbnail('post-thumbnail', ['class' => 'rounded-circle', 'title' => 'Feature image']);
     ?>
    <h2><?php the_title(); ?></h2>
    <small class="text-muted"><?php the_date(); ?> - <?php the_author(); ?></small>
    <hr>
    </header>
    <div class="pr-4 pl-4">
    <p> <?php the_excerpt(); ?></p>
    </div>
    <div class="text-right pr-4">
    <p><a class="btn btn-secondary mb-3" href="<?php the_permalink(); ?>" role="button">Leer...</a><br></p>
    </div>
    </article>
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