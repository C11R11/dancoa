<!-- >!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>single-post-caso-practico-null-object-pattern</title>

    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>-->

<?php get_header(); ?>  

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <?php //wp_head();?>
    <?php //create_bootstrap_menu("header-menu");?>
            </div>
          </header>

          <main role="main" class="inner cover">
          
          <p>
          <h3 class="display-4"><?php the_title(); ?></h3>
          </p>
            <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    
    the_content();
    
    endwhile; endif; 
    ?>
    

          </main>

             

        </div>

      </div>
    </div>
    
   <footer class="mastfoot">
          <div class="container">
            <span class="text-muted">Wordpress template created with Bootsrap and <a href="https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/">Tania's tutorial</span>
          </div>
        </footer>
    
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
  <?php wp_footer(); ?> 
</html>
    
<style>
/*
 * Globals
 */
 
 .footer
 {
 position: none !important;
 }

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #333;
}
body {
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0,0,0,.5);
}

/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
  display: table;
  width: 100%;
  height: 100%; /* For at least Firefox */
  min-height: 100%;
  box-shadow: inset 0 0 5rem rgba(0,0,0,.5);
}
.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}
.cover-container {
  margin-right: auto;
  margin-left: auto;
  padding-top: 50px;
}

/* Padding for spacing */
.inner {
  padding: 2rem;
}


/*
 * Header
 */

.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255,255,255,.5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255,255,255,.25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */

.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */

.mastfoot {
  color: rgba(255,255,255,.5);
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */
}


/*
 * Affix and center
 */

@media (min-width: 40em) {
  /* Pull out the header and footer */
  .masthead {
    position: fixed;
    top: 0;
  }
  .mastfoot {
    position: fixed;
    bottom: 0;
  }

  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }

  /* Handle the widths */
  .masthead,
  .mastfoot,
  .cover-container {
    width: 100%; /* Must be percentage or pixels for horizontal alignment */
    
  }
}

@media (min-width: 62em) {
  .masthead,
  .mastfoot,
  .cover-container {
    width: 42rem;
  }
}*/
</style>