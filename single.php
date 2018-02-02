<body class ="pt-5">
<?php get_header();?>
<?php //singlePost("bg-primary text-dark pt-5");?>
    <?php if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); ?>
        <div class="row justify-content-center">     
        <div class="col-xl-6 col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <?php create_bootstrap_menu("header-menu", '');?>
        <div class="jumbotron mt-5 bg-white text-dark">
        <h3 class="display-4 text-center"><?php the_title();?></h3>
        <?php  the_content(); ?>
        </div>
        <?php endwhile; 
    else:?>
    <?php echo '<p>'; _e( 'Sorry, no posts matched your criteria.' ); echo '</p>';endif;?>


        <div class="jumbotron bg-white text-dark">
        <?php comments_template(); ?>
        </div>

</div>
</div>

</body>

<?php get_footer();?>