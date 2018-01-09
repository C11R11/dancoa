<?php

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )//,
            //'extra-menu' => __( 'Cristian Menu' )
        )
        );
}
add_action( 'init', 'register_my_menus' );

function TimeLineViwer()
{
    /*
     <div class="container" id="historias">
  <div class="page-header">
    <h1 id="timeline">Historias</h1>
  </div>
  <ul class="timeline">
    <li>
      <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Mussum ipsum cacilds</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
        </div>
        <div class="timeline-body">
          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
            Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
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
    <li class="timeline-inverted">
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
    <li>
      <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Mussum ipsum cacilds</h4>
        </div>
        <div class="timeline-body">
          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
            Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
          <hr>
          <div class="btn-group">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
    </li>
    <li>
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
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
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
     */
}

function GetAllPostArray()
{
    return $wpb_all_query = new WP_Query((array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1))); 
}

function GetPostArray($array)
{
    return $wpb_all_query = new WP_Query($array);
}

function CategoryBody($body_class = "bg-dark text-white pt-5")
{
    echo '<body class="'.$body_class.'">';
    FrontPageHistories($name, $wpb_all_query, $colors = 'bg-light text-dark');
    echo '</body>';
}

function FrontPageHistories($name, $wpb_all_query, $colors = 'bg-light text-dark')
{
    $histories = "";  

    if ( $wpb_all_query->have_posts() ) :
        $histories  .= '<div class="container-fluid pr-10 pl-5 pt-5 pb-5 '.$colors.'" id="historias">';
        $histories  .= '<h3 class="display-4 text-center">'.$name.'</h3>';
        $histories  .= '<div class="row mt-5 justify-content-center">';

        while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
            $histories  .= '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">';
            $histories  .= '<article>';
            $histories  .= '<header class="pr-4 pl-4 text-center">';
            $histories  .= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', ['class' => 'rounded-circle', 'title' => 'Feature image']);
            $histories  .= '<h4>'.get_the_title().'</h4>';
            $histories  .= '<small class="text-muted">'.get_the_date().' - '.get_the_author().'</small>';
            $histories  .= '<hr></header><div class="pr-4 pl-4">';
            $histories  .= '<p>'.get_the_excerpt().'</p>';
            $histories  .= '</div><div class="text-right pr-4">';
            $histories  .= '<p><a class="btn btn-dark mb-3" href="'.get_the_permalink().'" role="button">Continuar leyendo...</a><br></p>';
            $histories  .= '</div></article>';
            $histories  .= '</div><!-- /.col-lg-4 -->';
    		endwhile;
        $histories  .= '</div></div>';
 
    wp_reset_postdata();
    else: 
        $histories  .= '<p>'._e( 'Sorry, no posts matched your criteria.' ).'</p>';
    endif;
    
    echo $histories;
}

function HistoriesMediaFull($name, $wpb_all_query)
{
    $histories  .= '<div class="container-fluid'.$colors.'" id="historias">';
    $histories  .= '<h1 class="display-4 text-left">'.$name.'</h1>';
    $histories  .= HistoriesMedia($wpb_all_query);
    $histories  .= '</div>';
    echo $histories;
}

function HistoriesMedia($wpb_all_query)
{
    $histories = '';//'<div class="container">';
    
    if ( $wpb_all_query->have_posts() ) :
    
    while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
    $histories  .= '<div class="media border p-2 m-2">';
    $histories  .= get_the_post_thumbnail(get_the_ID(), array( 100, 100), ['class' => 'align-self-center rounded mr-3', 'title' => 'Feature image']);
    $histories  .= '<div class="media-body">';
    $histories  .= '<b class="mt-0 pt-0 mb-0 pd-0">'.get_the_title().'</b><br>';
    $histories  .= '<p class="mt-1" style="line-height: 95%;"><small>'.get_the_excerpt();
    $histories  .= '<a href="'.get_the_permalink().'">[Continuar leyendo...]</a></small>';
    $histories  .= '</div></div>';
    endwhile;
    //$histories  .= '</div>';
    
    wp_reset_postdata();
    else:
    $histories  .= '<p>'._e( 'Sorry, no posts matched your criteria.' ).'</p>';
    endif;
   
    return $histories;
}

function HistoriesCarrousel($wpb_all_query)
{
    $histories = "";
    
    if ( $wpb_all_query->have_posts() ) :
    $histories  .= '<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">';
    $histories  .= '<ol class="carousel-indicators">';
    
    $index = 0;
    $classActive = "";
    while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
    if ($index == 0): $classActive = "active";
    else: $classActive = "";
    endif;
    $histories  .= '<li data-target="#carouselExampleCaptions" data-slide-to="'.$index.'" class="'.$classActive.'"></li>';
        $index ++;
    endwhile;
    
    $histories  .= '</ol><div class="carousel-inner">';
    
    $index = 0;
    while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
    if ($index == 0): $classActive = "active";
    else: $classActive = "";
    endif;
    $histories  .= '<div class="carousel-item '.$classActive.'">';
    $histories  .= '<div class="carousel-caption d-none d-md-block">';
    $histories  .= '<img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160cd2d9922%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160cd2d9922%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.45833587646484%22%20y%3D%22216.2%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">';
    $histories  .= '<h5>Third slide label</h5>';
    $histories  .= '<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>';
    /*$histories  .= '<article>';
    $histories  .= '<header class="pr-4 pl-4 text-center">';
    $histories  .= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', ['class' => 'rounded-circle', 'title' => 'Feature image']);
    $histories  .= '<h4>'.get_the_title().'</h4>';
    $histories  .= '<small class="text-muted">'.get_the_date().' - '.get_the_author().'</small>';
    $histories  .= '<hr></header><div class="pr-4 pl-4">';
    $histories  .= '<p>'.get_the_excerpt().'</p>';
    $histories  .= '</div><div class="text-right pr-4">';
    $histories  .= '<p><a class="btn btn-dark mb-3" href="'.get_the_permalink().'" role="button">Continuar leyendo...</a><br></p>';
    $histories  .= '</article>';*/
    $histories  .= '</div></div>';
    endwhile;
    $histories  .= '</div>';
   
    wp_reset_postdata();
    else:
    $histories  .= '<p>'._e( 'Sorry, no posts matched your criteria.' ).'</p>';
    endif;
    
    $histories  .= '<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">';
    $histories  .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
    $histories  .= '<span class="sr-only">Previous</span></a>';
    $histories  .= '<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">';
    $histories  .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
    $histories  .= '<span class="sr-only">Next</span></a></div>';
        
    echo $histories;
    
}

function singlePost($body_class = "bg-dark text-white pt-5")
{
    $single  = '<body class="'.$body_class.'">';
    
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
        $single  .= '<div class="jumbotron-fluid">';
        $single  .= '<p><h3 class="display-4 text-center">'.esc_html( get_the_title() ).'</h3></p>';
        $single  .= '<div class="row justify-content-center">';
        $single  .= '<div class="col-xl-7 col-lg-7 col-md-8 col-sm-8 col-xs-10">';
        $single  .= apply_filters( 'the_content', get_the_content() );
        $single  .= '</div></div></div>'; 
        endwhile; 
    else:
    $single  .= '<p>'._e( 'Sorry, no posts matched your criteria.' ).'</p>';
    endif;
    
    $single  .= '</body>';
    
    echo $single;
}

function create_bootstrap_menu( $theme_location ) 
{
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) 
    {   
        $menu_list  = '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">' ."\n";
        $menu_list .= '<a class="navbar-brand" href="' . home_url() . '">' . get_bloginfo( 'name' ) . '</a>';
        $menu_list .= '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">' ."\n";
        $menu_list .= '<span class="navbar-toggler-icon"></span>' ."\n";
        $menu_list .= '</button>' ."\n";
        $menu_list .= '<div class="collapse navbar-collapse justify-content-md-center collapse" id="navbarCollapse">' ."\n";
        $menu_list .= '<ul class="navbar-nav mr-auto">' ."\n";
        
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {
                $menu_list .= '<li class="nav-item active">' ."\n";
                $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                $menu_list .= '</li>' ."\n";
            }
        }
        $menu_list .= '</ul>' ."\n";
        $menu_list .= '</div>' ."\n";
        $menu_list .= '</nav>' ."\n";
        
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
    
    echo $menu_list;
}


?>