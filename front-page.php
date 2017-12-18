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
    <style>

.col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
}

</style>
  </head>

  <body>


<div class="jumbotron single-title">
<div class="container">
  <h1 class="display-3">¿Qu&eacute; es Dancoa?</h1>
  <p  class="mb-0">Hoy en d&iacute;a existen cientos de frameworks, tecnolog&iacute;s y lenguajes para desarrollar aplicaciones. 
  Pero no han conseguido solucionar y automatizar todos los problemas , debemos dise&ntilde;ar y programar nuestras l&oacute;gicas de negocio.</p>
  <hr class="my-4">
  <p>D.AN.CO.A es un espacio cuyo objetivo principal es ayudar a mejorar el dise&ntilde;o, codificaci&oacute;n, mantenci&oacute;n y flexibilidad 
  de l&oacute;gicas de negocio a medida. Tambi&eacute;n es dar a conocer fundamentos con los que se construyen estas soluciones, que son 
  la base de cualquier framework o arquitectura popular.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#historias" role="button">Ver Historias</a>
    <a class="btn btn-warning btn-lg" href="#a-quien" role="button">¿Vale la pena invertir en c&oacute;digos de baja mantenci&oacute;n?</a>

</div>
</div>


       <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 

 <div class="container">
        <div class="row">
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
          <div class="col-lg-4">
    <?php the_post_thumbnail(); ?>
    <h2><?php the_title(); ?></h2>
    <p> <?php the_excerpt(); ?></p>
    <small class="text-muted"><?php the_date(); ?> - <?php the_author(); ?></small>
    <p><a class="btn btn-secondary" href="<?php the_permalink(); ?>" role="button">View details »</a></p>
  </div><!-- /.col-lg-4 -->
  
        <!--  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>-->
    <?php endwhile; ?>
    <!-- end of the loop -->
 
 </div>
        </div>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="http://dancoa.com/wp-content/uploads/2017/09/thumb.jpg" alt="Card image cap" sizes="(max-width: 200px) 100vw, 200px" width="200" height="200">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="http://dancoa.com/wp-content/uploads/2017/09/thumb.jpg" alt="Card image cap" sizes="(max-width: 200px) 100vw, 200px" width="200" height="200">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="http://dancoa.com/wp-content/uploads/2017/09/thumb.jpg" alt="Card image cap" sizes="(max-width: 200px) 100vw, 200px" width="200" height="200">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
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
          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&eacute; pra quem &eacute; amistosis quis leo.
            Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
          <p>Suco de cevadiss, &eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere
            pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing
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
          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&eacute; pra quem &eacute; amistosis quis leo.
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
  	<h1 class="display-4">¿Vale la pena invertir en c&oacute;digos de baja mantenci&oacute;n?</h1>
<p class="lead">Una empresa constructora puede hacer casas de mala calidad en distintos niveles, puede ser algo simple como una terminaci&oacute;n o un mal pintado, 
o algo tan grave como una filtraci&oacute;n de agua en medio del living. Todos estos problemas pueden verse a primera vista, o pueden ocurrir con el tiempo con la casa ya comprada. 
Con el software ocurre lo mismo, tambi&eacute;n existe mala calidad no visible por el usuario. Cuando se encuentra, repararlo puede ser tan f&aacute;cil como cambiar una puerta, o tan dif&iacute;cil 
como tener que reconstruirla. La mejor excusa es <cite title="Source Title">&quot;Ning&uacute;n software estar&aacute; libre de errores&quot;</cite>, el tema es ¿Cu&aacute;les errores?</p>

<p class="lead">Por muchos motivos existen problemas de calidad en un software, tambi&eacute;n existen (por motivos mucho m&aacute;s beneficiosos) formas de mejorar la calidad de lo que se construye.
 El compromiso de<cite title="Source Title">&quot;satisfacer los requerimientos de los clientes lo antes posible&quot;</cite> puede cumplirse tambi&eacute;n con calidad. He ah&iacute; la diferencia entre un trabajo artesanal y de 
 ingenier&iacute;a. La ingenier&iacute;a se basa en m&eacute;todos y pr&aacute;cticas que permiten un resultado comprobable, el arte se basa en la experiencia y el talento. Para hacer de la programaci&oacute;n 
 una labor cient&iacute;fica se deben tener conocimientos, adoptar m&eacute;todos, tener pr&aacute;cticas.


En la construcci&oacute;n de una casa es algo concreto, en que se puede entender lo que implicar&iacute; agregarle 10 pisos m&aacute;s a un edificio ya construido. En software es virtual, hay cosas 
que para un usuario son simples, pero internamente es sumamente complejo. La calidad en el c&oacute;digo justamente busca hacer que las cosas dif&iacute;ciles sean posibles.

</p>
<p class="lead">Como ingenieros de software, tenemos la dif&iacute;cil tarea de mantener un software de mala calidad, de tratar de extender sus funcionalidades, de redise&ntilde;arlo y de ser 
responsables de que el software haga lo que se pidi&oacute; y lo que no se pidi&oacute;. Los requerimientos van a cambiar, es lo &uacute;nico seguro. Esta realidad hay que aceptarla y 
no luchar por querer cambiarla. Tambi&eacute;n lo es reclamar por tener usuarios que cambian constantemente, o jefes que cambian sus prioridades d&iacute;a a d&iacute;a.
  	</p>
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