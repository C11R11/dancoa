<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body>

  <!-- <div class="blog-masthead">
      <div class="container">
         <nav class="blog-nav navbar navbar-default navbar-fixed-top">
            <a class="blog-nav-item active" href="<?php echo site_url(); ?>">Home</a>
            <?php wp_list_pages( '&title_li=' ); ?>
         </nav>
      </div>
   </div>-->

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container" style="text-align: center; vertical-align: middle;">
<!-- <a class="pull-left navbar-brand glyphicon glyphicon-home" href="<?php echo site_url(); ?>"> </a>-->
<a class="navbar-brand" href="<?php echo site_url(); ?>"><i class=" glyphicon glyphicon-home"></i></a>
<!--  <a class="blog-nav-item active pull-right" href="<?php echo site_url(); ?>">Home</a>-->
<p class="navbar-text navbar-right">d.an.co.a - Cristian Rodr&iacute;guez Canto</p>
</div>
</nav>
<!--    <div class="blog-header">
        <h1 class="blog-title">d.an.co.a</h1>
<p class="lead blog-description">Cristian Rodr&iacute;guez Canto</p>
      </div>-->
   
    <div class="container">
