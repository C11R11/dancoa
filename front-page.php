<?php get_header(); ?>
<body>
<div class="jumbotron bg-light text-dark pt-5 mt-0 mb-0 ml-0 mr-0"><!-- single-title -->
<div class="container">
  <h1 class="display-3 text-xs-center p-b-1 m-b-1">¿Qu&eacute; es Dancoa?</h1>
  <p  class="mb-0">Hoy en d&iacute;a existen cientos de frameworks, tecnolog&iacute;s y lenguajes para desarrollar aplicaciones. 
  Pero no han conseguido solucionar y automatizar todos los problemas , debemos dise&ntilde;ar y programar nuestras l&oacute;gicas de negocio.</p>
  <hr class="my-4">
  <p>D.AN.CO.A es un espacio cuyo objetivo principal es ayudar a mejorar el dise&ntilde;o, codificaci&oacute;n, mantenci&oacute;n y flexibilidad 
  de l&oacute;gicas de negocio a medida. Tambi&eacute;n es dar a conocer fundamentos con los que se construyen estas soluciones, que son 
  la base de cualquier framework o arquitectura popular.</p>
  <p class="lead">
   <!--  <a class="btn btn-warning btn-lg" href="#historias" role="button">Ver Historias</a>
    <a class="btn btn-dark btn-lg" href="#a-quien" role="button">¿Vale la pena invertir en c&oacute;digos de baja mantenci&oacute;n?</a>-->
</div>
</div>

<div class="jumbotron bg-light text-dark pt-5 mt-0 mb-0 ml-0 mr-0"><!-- single-title -->
<div class="container">
  <h1 class="display-3 text-left">C&oacute;digo libre</h1>
  <p  class="mb-0">Todo el c&oacute;digo de dancoa es de libre acceso.</p>
  <hr class="my-4">
  <p>Crear lista de proyectos y links a repositorios.</p>
  <p class="lead">
   <!--  <a class="btn btn-warning btn-lg" href="#historias" role="button">Ver Historias</a>
    <a class="btn btn-dark btn-lg" href="#a-quien" role="button">¿Vale la pena invertir en c&oacute;digos de baja mantenci&oacute;n?</a>-->
</div>
</div>
<!-- pr-10 pl-5 pt-5 pb-5 -->
<div class="container-fluid py-5 px-0" style="background-color=olive;">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 m-0 p-0">
            <?php HistoriesMediaFull('Programar es f&aacute;cil', GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'coding-its-easy' ,'posts_per_page'=>4)));?>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 m-0 p-0">
            <?php HistoriesMediaFull('Tutoriales/Ejemplos', GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'examples' ,'posts_per_page'=>4)));?>
        </div>
    </div>
</div>

<?php 
    //Artículo
    require 'vale_la_pena.php'
?>
</body>
<?php get_footer(); ?>