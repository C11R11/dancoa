<?php get_header();
  $colorClass = "bg-dark text-white";
?>

<div class="jumbotron bg-warning text-dark pt-5 mt-5 mb-0 ml-0 mr-0"><!-- single-title -->
<div class="container">
  <h1 class="display-3 text-center">Ejemplos</h1>
  <p  class="mb-0">Revisión de conceptos de forma pr&aacute;ctica 
</div>
</div>

<body class="<?php echo $colorClass?>">
<?php FrontPageHistories("Ejemplos/Tutoriales", 
                         GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'examples' ,'posts_per_page'=>4)),
                         $colorClass);?>
</body>
<?php get_footer();?>