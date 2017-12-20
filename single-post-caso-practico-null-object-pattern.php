<?php get_header(); ?>

<body class="bg-dark text-white">
<div class="container" style="border-top: solid 1px white;">
   <h3 class="display-4"><?php the_title(); ?></h3>
          </p>
            <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    
    the_content();
    
    endwhile; endif; 
    ?>
</div>
</body>

<?php get_footer(); ?>