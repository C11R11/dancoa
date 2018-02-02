<?php get_header(); ?>
<body class="pt-5 bg-secondary">
<div class="container bg-white px-0">
   <div class="border-top-0 border-right-0 border-left-0">
    <h1 id="letra" class="display-1 text-center align-middle pt-5">D.an.co.a</h1>
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
  </div>
  
   <?php //create_bootstrap_menu("header-menu", '');?>
  <h1 class="display-3 text-xs-center pb-1 mb-1">¿Qu&eacute; es Dancoa?</h1>
  <p  class="mb-0">Hoy en d&iacute;a existen cientos de frameworks, tecnolog&iacute;s y lenguajes para desarrollar aplicaciones. 
  Pero no han conseguido solucionar y automatizar todos los problemas , debemos dise&ntilde;ar y programar nuestras l&oacute;gicas de negocio.
  D.AN.CO.A es un espacio cuyo objetivo principal es ayudar a mejorar el dise&ntilde;o, codificaci&oacute;n, mantenci&oacute;n y flexibilidad 
  de l&oacute;gicas de negocio a medida. Tambi&eacute;n es dar a conocer fundamentos con los que se construyen estas soluciones, que son 
  la base de cualquier framework o arquitectura popular.</p>
  <p class="lead">
  <h1 class="display-3 text-left">C&oacute;digo libre</h1>
  <p  class="mb-0">Todo el c&oacute;digo de dancoa es de libre acceso.</p>
  <hr class="my-4">
  <p>Crear lista de proyectos y links a repositorios.</p>
  <p class="lead">
  <?php HistoriesMediaFull('Programar es f&aacute;cil', GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'coding-its-easy' ,'posts_per_page'=>4)));?>
  <?php HistoriesMediaFull('Tutoriales/Ejemplos', GetPostArray(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'examples' ,'posts_per_page'=>4)));?>
<?php 
    //Artículo
    require 'vale_la_pena.php'
?>
</div>
</body>
<?php get_footer(); ?>