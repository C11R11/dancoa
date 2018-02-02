<?php get_header();
  $colorClass = "";
?>
<body class="<?php echo $colorClass?>">
<div class="jumbotron pt-5 mt-5 mb-0 ml-0 mr-0">
<div class="container">
  <h1 class="display-3 text-center">Ejemplos</h1>
  <p  class="mb-0">Revisión de conceptos de forma pr&aacute;ctica 
</div>
</div>

<!-- 

<div class="jumbotron.fuild bg-light text-dark pt-5 mt-5 mb-0 ml-0 mr-0">
<div class="container">
<h1 class="display-3">Hello, world!</h1>
<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
</div>
</div>-->
<?php //FrontPageHistories("Ejemplos/Tutoriales", 
      //                   GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'examples' ,'posts_per_page'=>4)),
      //                   $colorClass);?>

<?php HistoriesMedia(GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'coding-its-easy' ,'posts_per_page'=>4)));?>

<?php HistoriesMedia(GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'examples' ,'posts_per_page'=>4)));?>
</body>
<?php get_footer();?>