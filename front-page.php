<?php get_header(); ?>
<body>
<div class="jumbotron bg-warning text-dark pt-5 mt-5 mb-0 ml-0 mr-0"><!-- single-title -->
<div class="container">
  <h1 class="display-3 text-center">¿Qu&eacute; es Dancoa?</h1>
  <p  class="mb-0">Hoy en d&iacute;a existen cientos de frameworks, tecnolog&iacute;s y lenguajes para desarrollar aplicaciones. 
  Pero no han conseguido solucionar y automatizar todos los problemas , debemos dise&ntilde;ar y programar nuestras l&oacute;gicas de negocio.</p>
  <hr class="my-4">
  <p>D.AN.CO.A es un espacio cuyo objetivo principal es ayudar a mejorar el dise&ntilde;o, codificaci&oacute;n, mantenci&oacute;n y flexibilidad 
  de l&oacute;gicas de negocio a medida. Tambi&eacute;n es dar a conocer fundamentos con los que se construyen estas soluciones, que son 
  la base de cualquier framework o arquitectura popular.</p>
  <p class="lead">
    <a class="btn btn-light btn-lg" href="#historias" role="button">Ver Historias</a>
    <a class="btn btn-dark btn-lg" href="#a-quien" role="button">¿Vale la pena invertir en c&oacute;digos de baja mantenci&oacute;n?</a>
</div>
</div>

<?php 
    FrontPageHistories("Ejemplos/Tutoriales", 
                       GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'examples' ,'posts_per_page'=>4)),
                       "bg-dark text-white");
    FrontPageHistories("Programar es f&aacute;cil", 
                       GetPostArray(array('post_type'=>'post', 'post_status'=>'publish','category_name' => 'coding-its-easy' ,'posts_per_page'=>4)),
                      "bg-primary text-white");
    FrontPageHistories("Etc...",
                       GetPostArray(array('post_type'=>'post', 'post_status'=>'publish','category_name' => 'etc' ,'posts_per_page'=>4)),
                       "bg-danger text-white");
?>

<?php 
    //TimeLine boostrap con css
    //require 'timeline.php'
?>

<?php 
    //Artículo
    require 'vale_la_pena.php'
?>
</body>
<?php get_footer(); ?>