<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DANCOA - Cristian Rodr&iacute;guez Canto</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/sticky-footer-navbar.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/single-title.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/timeline.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
    <?php create_bootstrap_menu("header-menu");?>
  </head>

  <body>



<!-- <div class="jumbotron vertical-center single-title"> 
  <div class="container">
    <h3>Dancoa</h3>
              <b>Hola!, soy Cristian y ac&aacute; pretendo plasmar aprendizajes.</b> 
  </div>
</div>-->

<div class="jumbotron single-title">
<div class="container">
  <h1 class="display-3">¿Qu&eacute; es Dancoa?</h1>
  <p  class="mb-0">Hoy en día existen cientos de frameworks, tecnologías y lenguajes para desarrollar aplicaciones. 
  Pero no han conseguido solucionar y automatizar todos los problemas , debemos diseñar y programar nuestras lógicas de negocio.</p>
  <hr class="my-4">
  <p>D.AN.CO.A es un espacio cuyo objetivo principal es ayudar a mejorar el diseño, codificación, mantención y flexibilidad 
  de lógicas de negocio a medida. También es dar a conocer fundamentos con los que se construyen estas soluciones, que son 
  la base de cualquier framework o arquitectura popular.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#historias" role="button">Ver Historias</a>
    <a class="btn btn-warning btn-lg" href="#a-quien" role="button">¿A quién le conviene un desarrollo de calidad?</a>

</div>
</div>

<div class="container" id="historias">
  <div class="page-header">
    <h1 id="timeline">Historias</h1>
  </div>
  <ul class="timeline">
    <li>
      <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
      <div class="timeline-panel">
        <div class="card" style="width: 200px;">
  <img class="card-img-top" src="http://dancoa.com/wp-content/uploads/2017/09/thumb.jpg" alt="Card image cap" sizes="(max-width: 200px) 100vw, 200px" width="200" height="200">
  <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Mussum ipsum cacilds</h4>
        </div>
        <div class="timeline-body">
          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
            Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
          <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere
            pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Mussum ipsum cacilds</h4>
        </div>
        <div class="timeline-body">
          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
            Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
        </div>
      </div>
    </li>
  </ul>
</div> 

<div class="jumbotron" style="background-color: #e5c027;" id="a-quien">
<div class="container">
<div class="row">
  <div class="col-4">
  	
  </div>
  <div class="col-8">
  	<h1 class="display-4">¿A quién le conviene un desarrollo de calidad?</h1>
<p class="">Una mala empresa constructora puede hacer casas de mala calidad en distintos niveles, puede ser algo simple como una terminación o un mal pintado, o algo tan grave como una filtración de agua, o problemas estructurales. Todos estos problemas pueden verse a primera vista, o pueden ocurrir con el tiempo con la casa ya comprada. Con el software ocurre lo mismo, también existe mala calidad no visible por el usuario. Cuando se encuentra, repararlo puede ser tan fácil como cambiar una puerta, o tan difícil como tener que reconstruirla. La mejor excusa es “Ningún software estará libre de errores…”, el tema es ¿Cuáles errores?

Por muchos motivos existen problemas de calidad en un software, también existen (por motivos mucho más beneficiosos) formas de mejorar la calidad de lo que se construye. El compromiso de “satisfacer los requerimientos de los clientes lo antes posible” puede cumplirse también con calidad. He ahí la diferencia entre un trabajo artesanal y de ingeniería. La ingeniería se basa en métodos y prácticas que permiten un resultado comprobable, el arte se basa en la experiencia y el talento. Para hacer de la programación una labor científica se deben tener conocimientos, adoptar métodos, tener prácticas.


En la construcción de una casa es algo concreto, en que se puede entender lo que implicaría agregarle 10 pisos más a un edificio ya construido. En software es virtual, hay cosas que para un usuario son simples, pero internamente es sumamente complejo. La calidad en el código justamente busca hacer que las cosas difíciles sean posibles.

</p>
Como ingenieros de software, tenemos la difícil tarea de mantener un software de mala calidad, de tratar de extender sus funcionalidades, de rediseñarlo y de ser responsables de que el software haga lo que se pidió y lo que no se pidió. Los requerimientos van a cambiar, es lo único seguro. Esta realidad hay que aceptarla y no luchar por querer cambiarla. También lo es reclamar por tener usuarios que cambian constantemente, o jefes que cambian sus prioridades día a día.
  	
  </div>

</div>
</div>
</div>

<footer class="footer">
      <div class="container">
        <span class="text-muted">Wordpress template created with Bootsrap and <a href="https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/">Tania's tutorial</span>
      </div>
    </footer>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
</html>