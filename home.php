<?php get_header(); ?>

HOME
<div class="jumbotron single-title">
              <h3>Dancoa</h3>
              <b>Hola!, soy Cristian y ac&aacute; pretendo plasmar aprendizajes.</b> 
			</div>
	<div class="row">
	
		<div class="col-sm-9 blog-main">

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>
    
