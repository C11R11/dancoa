<?php get_header(); ?>
SINGLE
<div class="jumbotron single-title">
              <h3><?php the_title(); ?></h3>
              <b>Tags:</b> <span class="label label-warning"><?php the_category('&nbsp;&rsaquo;&nbsp;');?></span>
			</div>
	<div class="row">
	
		<div class="col-sm-9 blog-main">

			
			
			
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
			the_content();
  
			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>