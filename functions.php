<?php 
//include_once( get_stylesheet_directory() .'/var.php');
include_once( get_template_directory() . 'var.php' );




wp_enqueue_style( 'style', get_stylesheet_uri() );

//habilitando imagem destacas
add_theme_support('post-thumbnails');
//add_image_size( 'thumb-custom', 200, 200, true );

//ativando menus dinamicos

function register_my_menus(){
    register_nav_menus(
        array(
            'header-meu' => __('Meu Principal')
        )
        );
}
add_action( 'init','register_my_menus');


//criando posts types
function meus_posts_types(){
    //equipe
    register_post_type( 'equipe', 
        array(
            'labels' => array(
                'name' => __('Equipe'),
                'singular_name' => __('Equipe')
            ),
        'public'         => true,
        'rewrite' => array('slug' => 'equipe'), // <--- definimos o slug aqui...
        'has_archive'    => true,
        'menu_icon'      => 'dashicons-groups',
        'supports'        => array('title','editor','thumbnail','page-attributes'),
        )
        );

}
add_action('init',meus_posts_types);

//criando posts types
/*
function meus_posts_types_Propostas(){
    //equipe
    register_post_type( 'Propostas', 
        array(
            'labels' => array(
                'name' => __('Propostas'),
                'singular_name' => __('Proposta')
            ),
        'public'         => true,
        'rewrite' => array('slug' => 'Propostas'), // <--- definimos o slug aqui...
        'has_archive'    => true,
        'menu_icon'      => 'dashicons-lightbulb',
        'supports'        => array('title','editor','thumbnail','page-attributes'),
        )
        );

}
add_action('init',meus_posts_types_Propostas);*/


function wp_get_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID'] = $m->ID;
            $submenu[$m->ID]['title'] = $m->title;
            $submenu[$m->ID]['url'] = $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}

 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Movies', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'All Movies', 'twentythirteen' ),
        'view_item'           => __( 'View Movie', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
        'update_item'         => __( 'Update Movie', 'twentythirteen' ),
        'search_items'        => __( 'Search Movie', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'movies', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'movies', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );


add_action( 'init', 'custom_post_type_func' );
function custom_post_type_func() {
    //posttypename = Propostas
$labels = array(
'name' => _x( 'propostas', 'Propostas' ),
'singular_name' => _x( 'Proposta', 'Propostas' ),
'add_new' => _x( 'Criar Proposta', 'Propostas' ),
'add_new_item' => _x( 'Adcionar Proposta', 'Propostas' ),
'edit_item' => _x( 'Editar Proposta', 'Propostas' ),
'new_item' => _x( 'Nova Proposta', 'Propostas' ),
'view_item' => _x( 'Visualizar proposta', 'Propostas' ),
'search_items' => _x( 'Procurar Proposta', 'Propostas' ),
'not_found' => _x( 'Proposta Não Encontrada', 'Propostas' ),
'not_found_in_trash' => _x( 'No Propostas found in Trash', 'Propostas' ),
'parent_item_colon' => _x( 'Parent Propostas:', 'Propostas' ),
'menu_name' => _x( 'Propostas', 'Propostas' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Hi, this is my custom post type.',
'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'comments', 'page-attributes' ),
/*'taxonomies' => array( 'category', 'post_tag', 'page-category' ),*/
'public' => true,
'menu_icon'      => 'dashicons-lightbulb',
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
register_post_type( 'propostas', $args );

}


/* ____________________________ustom post type Profissões e Carreiras________________________ */


add_action( 'init', 'custom_post_type_profissoes_carreiras' );
function custom_post_type_profissoes_carreiras() {
$labels = array(
    'name' => _x( 'Profissões e Carreiras', 'Profissões e Carreiras' ),
    'singular_name' => _x( 'Profissões e Carreiras', 'Profissões e Carreiras' ),
    'add_new' => _x( 'Adcionar uma Profissão e Carreira', 'Adcionar uma Profissão e Carreira' ),
    'add_new_item' => _x( 'Nova Profissão e Carreira', 'Nova Profissão e Carreira' ),
    'edit_item' => _x( 'Editar Profissão e Carreira', 'Editar Profissão e Carreira' ),
    'new_item' => _x( 'Nova Profissão e Carreira', 'Nova Profissão e Carreira' ),
    'view_item' => _x( 'Visualizar Profissão e Carreira', 'Visualizar Profissão e Carreira' ),
    'search_items' => _x( 'Procurar Profissão e Carreira', 'Procurar Profissão e Carreira' ),
    'not_found' => _x( 'Profissão e Carreira não encontrada', 'Profissão e Carreira não encontrada' ),
    'not_found_in_trash' => _x( 'No Profissão e Carreira found in Trash', 'Profissão e Carreira' ),
    'parent_item_colon' => _x( 'Parent Profissão e Carreira:', 'Profissão e Carreira' ),
    'menu_name' => _x( 'Profissões e Carreiras', 'Profissão e Carreira' ),
);
$args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'description' => 'Hi, this is my custom post type.',
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'comments', 'page-attributes' ),
    'taxonomies' => array( 'category', 'page-category' ),
    'public' => true,
    'menu_icon'      => 'dashicons-welcome-learn-more',
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
register_post_type( 'Profissao_e_Carreira', $args );
}



/*____________________________________________________________________________________________ */



/* ____________________________ustom post type Profissões e Carreiras________________________ */


add_action( 'init', 'custom_post_type_materias' );
function custom_post_type_materias() {
$labels = array(
    'name' => _x( 'Matérias', 'Matérias' ),
    'singular_name' => _x( 'Matérias', 'Matérias' ),
    'add_new' => _x( 'Adcionar uma Matéria', 'Adcionar uma Matéria' ),
    'add_new_item' => _x( 'Nova Matéria', 'Nova Matéria' ),
    'edit_item' => _x( 'Editar Matérias', 'Editar Matérias' ),
    'new_item' => _x( 'Nova Matérias', 'Nova Matérias' ),
    'view_item' => _x( 'Visualizar Matérias', 'Visualizar Matérias' ),
    'search_items' => _x( 'Procurar Matérias', 'Procurar Matérias' ),
    'not_found' => _x( 'Matéria não encontrada', 'Maeria não encontrada' ),
    'not_found_in_trash' => _x( 'No Matéria found in Trash', 'No Matéria found in Trash' ),
    'parent_item_colon' => _x( 'Parent Matéria:', 'Matéria' ),
    'menu_name' => _x( 'Matérias', 'Matéria' ),
);
$args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'description' => 'Hi, this is my custom post type.',
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'comments', 'page-attributes' ),
    'taxonomies' => array( 'category', 'page-category' ),
    'public' => true,
    'menu_icon'      => 'dashicons-id',
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
register_post_type( 'materia', $args );
}



/*____________________________________________________________________________________________ */

















function enable_ajax_functionality()
{
    wp_localize_script( 'ajaxify', 'ajaxifi_function', array('ajaxurl' => admin_url( 'admin-ajax.php')) );

}

add_action( 'template_redirect', 'enable_ajax_functionality');

function test_ajax()
{
    header("Content-Type: application/json");
   /* $posts_array = get_posts();
    echo json_encode( $posts_array );*/
    $args = array(
        'post_type' => 'Propostas',
        '_thumbnail_id' => '_thumbnail_id',
        'value' => '0',
        'compare' => '>=',
        
      );
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $_post->ID ));
      $thumbs = array(
        'post_type' => 'Propostas',
        'orderby'      => 'date',  
        'order'        => 'DESC',
        'post_mime_type' => 'image',

);
      $posts_array = new WP_Query($args );
      foreach($posts_array->posts as $p){
         
        $aTemp = new stdClass();
        
        $thumb_id = (int)get_post_thumbnail_id($p->ID);
        $aTemp->post_id = $p->ID;
      //  $aTemp->author = $p->post_author;
        $aTemp->post_content = apply_filters('the_content', $p->post_content);
        $aTemp->post_excerpt = $p->post_excerpt;
        $aTemp->title = $p->post_title;

     //   $aTemp->comment_count = $p->comment_count;	
        $aTemp->image = wp_get_attachment_image_src( $thumb_id, 'thumbnail');
        $aTemp->imageMedium = wp_get_attachment_image_src( $thumb_id, 'medium');

        $aTemp->photo = wp_get_attachment_image_src( $thumb_id, 'full');
        $oReturn->posts[] = $aTemp;
    
      }
      echo json_encode( $oReturn );

    die();
}
add_action( "wp_ajax_nopriv_test_ajax", "test_ajax");
add_action( "wp_ajax_test_ajax","test_ajax");




function getProfissao()
{
    header("Content-Type: application/json");
   /* $posts_array = get_posts();
    echo json_encode( $posts_array );*/
    $args = array(
        'post_type' => 'Profissao_e_Carreira',
        'cat' => $cat_id,
        
      );
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $_post->ID ));
      $thumbs = array(
        'post_type' => 'Propostas',
        'orderby'      => 'date',  
        'order'        => 'DESC',
        'post_mime_type' => 'image',

);
      $posts_array = new WP_Query($args );
      foreach($posts_array->posts as $p){
         
        $aTemp = new stdClass();
        
        $thumb_id = (int)get_post_thumbnail_id($p->ID);
      //  $aTemp->post_id = $p->ID;
      //  $aTemp->author = $p->post_author;
        $aTemp->post_content = apply_filters('the_content', $p->post_content);
        $aTemp->post_excerpt = $p->post_excerpt;
        $aTemp->post_category = get_the_category( $p->ID );
      //  $aTemp->imgCategory = get_wp_term_image(3);
        $aTemp->title = $p->post_title;
       // $aTemp->link = $p->guid;
        $aTemp->link = get_permalink($p);

       // $aTemp->comment_count = $p->comment_count;	
        $aTemp->image = wp_get_attachment_image_src( $thumb_id, 'thumbnail');
        $aTemp->imageMedium = wp_get_attachment_image_src( $thumb_id, 'medium');

        $aTemp->photo = wp_get_attachment_image_src( $thumb_id, 'full');
        $oReturn->posts[] = $aTemp;
    
      }
      echo json_encode( $oReturn );

    die();
}
add_action( "wp_ajax_nopriv_getProfissao", "getProfissao");
add_action( "wp_ajax_getProfissao","getProfissao");


function getCategory()
{
    header("Content-Type: application/json");
    $categorys = get_terms( 'category', 'orderby=name&hide_empty=0' );

      foreach($categorys as $p){
        if(get_wp_term_image($p->term_id)){ 
            $aTemp = new stdClass();
            $aTemp->post_category = $p;
            $aTemp->img = get_wp_term_image($p->term_id);
        // $aTemp->imgCategory =get_wp_term_image($p->term_id);
        
            $oReturn->category[] = $aTemp;
        }
      }
      echo json_encode( $oReturn );

    die();
}
add_action( "wp_ajax_nopriv_getCategory", "getCategory");
add_action( "wp_ajax_getCategory","getCategory");


function getPostProfissao()
{
    session_start();

    header("Content-Type: application/json");

    $args = array(
        'post_type' => 'Profissao_e_Carreira',
        'cat' => $cat_id,
        
      );
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $_post->ID ));
      $thumbs = array(
        'post_type' => 'Propostas',
        'orderby'      => 'date',  
        'order'        => 'DESC',
        'post_mime_type' => 'image',

);
      $posts_array = new WP_Query($args );
      foreach($posts_array->posts as $p){
         
        $aTemp = new stdClass();
        if($_SESSION["postId"] ==$p->ID ){
            $thumb_id = (int)get_post_thumbnail_id($p->ID);
            $aTemp->post_id = $p->ID;        
          //  $aTemp->author = $p->post_author;
            //$aTemp->post_content = $p->post_content;
            $aTemp->post_content = apply_filters('the_content', $p->post_content);
            $aTemp->post_excerpt = $p->post_excerpt;
            $aTemp->post_category = get_the_category( $p->ID );
            $aTemp->title = $p->post_title;
        // $aTemp->link = $p->guid;
            $aTemp->link = get_permalink($p);

          //  $aTemp->comment_count = $p->comment_count;	
            $aTemp->image = wp_get_attachment_image_src( $thumb_id, 'thumbnail');
            $aTemp->imageMedium = wp_get_attachment_image_src( $thumb_id, 'medium');

            $aTemp->photo = wp_get_attachment_image_src( $thumb_id, 'full');
            $oReturn->posts[] = $aTemp;
        }
    
      }
      unset($_SESSION["postId"]);

      echo json_encode( $oReturn );

    die();
}
add_action( "wp_ajax_nopriv_getPostProfissao", "getPostProfissao");
add_action( "wp_ajax_getPostProfissao","getPostProfissao");




function getMaterias()
{
    session_start();

    header("Content-Type: application/json");

    $args = array(
        'post_type' => 'materia',
        'cat' => $cat_id,
        
    );

    $pt = [',', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']; 
    $en = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
    $data = DateTime::createFromFormat('d F Y', str_ireplace($pt, $en,'22 maio, 2018'));
  //  echo $data->format('Y-m-d');

      $posts_array = new WP_Query($args );
      foreach($posts_array->posts as $p){
         
        $aTemp = new stdClass();
            $thumb_id = (int)get_post_thumbnail_id($p->ID);
            $aTemp->post_id = $p->ID;        
          //  $aTemp->author = $p->post_author;
            //$aTemp->post_content = $p->post_content;
            $aTemp->post_content = apply_filters('the_content', $p->post_content);
            $aTemp->post_excerpt = $p->post_excerpt;
            $aTemp->post_category = get_the_category( $p->ID );
            $aTemp->title = $p->post_title;

            $ano = substr($p->post_modified,0,4);
            $dia = substr($p->post_modified,8,2);
            $mes = intval(substr($p->post_modified,5,2)); 
            $aTemp->data = $dia." de ".$pt[$mes]." de ".$ano;
            $aTemp->link = get_permalink($p);
          //  $aTemp->comment_count = $p->comment_count;	
            $aTemp->image = wp_get_attachment_image_src( $thumb_id, 'thumbnail');
            $aTemp->imageMedium = wp_get_attachment_image_src( $thumb_id, 'medium');

            $aTemp->photo = wp_get_attachment_image_src( $thumb_id, 'full');
            $oReturn->posts[] = $aTemp;
        
    
      }
      unset($_SESSION["postId"]);

      echo json_encode( $oReturn );

    die();
}
add_action( "wp_ajax_nopriv_getMaterias", "getMaterias");
add_action( "wp_ajax_getMaterias","getMaterias");

function getMateria()
{
    session_start();

    header("Content-Type: application/json");

    $args = array(
        'post_type' => 'materia',
        'cat' => $cat_id,
        
    );

    $pt = [',', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']; 
    $en = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
    $data = DateTime::createFromFormat('d F Y', str_ireplace($pt, $en,'22 maio, 2018'));
  //  echo $data->format('Y-m-d');

      $posts_array = new WP_Query($args );
      foreach($posts_array->posts as $p){
         
        $aTemp = new stdClass();
        if($_SESSION["postId"] ==$p->ID ){
            $thumb_id = (int)get_post_thumbnail_id($p->ID);
            $aTemp->post_id = $p->ID;        
          //  $aTemp->author = $p->post_author;
            //$aTemp->post_content = $p->post_content;
            $aTemp->post_content = apply_filters('the_content', $p->post_content);
            $aTemp->post_excerpt = $p->post_excerpt;
            $aTemp->post_category = get_the_category( $p->ID );
            $aTemp->title = $p->post_title;

            $ano = substr($p->post_modified,0,4);
            $dia = substr($p->post_modified,8,2);
            $mes = intval(substr($p->post_modified,5,2)); 
            $aTemp->data = $dia." de ".$pt[$mes]." de ".$ano;
            $aTemp->link = get_permalink($p);
           // $aTemp->comment_count = $p->comment_count;	
            $aTemp->image = wp_get_attachment_image_src( $thumb_id, 'thumbnail');
            $aTemp->imageMedium = wp_get_attachment_image_src( $thumb_id, 'medium');

            $aTemp->photo = wp_get_attachment_image_src( $thumb_id, 'full');
            $oReturn->posts[] = $aTemp;
        }
        
    
      }
      unset($_SESSION["postId"]);

      echo json_encode( $oReturn );

    die();
}
add_action( "wp_ajax_nopriv_getMateria", "getMateria");
add_action( "wp_ajax_getMateria","getMateria");

function getUltimaMateria()
{
    header("Content-Type: application/json");

    $args = array(
        'post_type' => 'materia',
        'orderby'      => 'date',  
        'order'        => 'DEC',
        'posts_per_page' => '1',
    );

    $pt = [',', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']; 
    $en = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
    $data = DateTime::createFromFormat('d F Y', str_ireplace($pt, $en,'22 maio, 2018'));
  //  echo $data->format('Y-m-d');

      $posts_array = new WP_Query($args );
      foreach($posts_array->posts as $p){
         
        $aTemp = new stdClass();
            $thumb_id = (int)get_post_thumbnail_id($p->ID);
            $aTemp->post_id = $p->ID;        
            $aTemp->author = $p->post_author;
            //$aTemp->post_content = $p->post_content;
            $aTemp->post_content = apply_filters('the_content', $p->post_content);
            $aTemp->post_excerpt = $p->post_excerpt;
          //  $aTemp->post_category = get_the_category( $p->ID );
            $aTemp->title = $p->post_title;

            $ano = substr($p->post_modified,0,4);
            $dia = substr($p->post_modified,8,2);
            $mes = intval(substr($p->post_modified,5,2)); 
            $aTemp->data = $dia." de ".$pt[$mes]." de ".$ano;
            $aTemp->link = get_permalink($p);
          //  $aTemp->comment_count = $p->comment_count;	
            $aTemp->image = wp_get_attachment_image_src( $thumb_id, 'thumbnail');
            $aTemp->imageMedium = wp_get_attachment_image_src( $thumb_id, 'medium');

            $aTemp->photo = wp_get_attachment_image_src( $thumb_id, 'full');
            $oReturn->posts[] = $aTemp;
        
        
    
      }

      echo json_encode( $oReturn );

    die();
}
add_action( "wp_ajax_nopriv_getUltimaMateria", "getUltimaMateria");
add_action( "wp_ajax_getUltimaMateria","getUltimaMateria");


function getMembroEquipe()
{
    header("Content-Type: application/json");

    $args = array(
        'post_type' => 'equipe',
        'orderby'      => 'date',  
        'order'        => 'ASC',
        'posts_per_page' => '1',
        'offset' => '1'        
    );

    $pt = [',', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']; 
    $en = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
    $data = DateTime::createFromFormat('d F Y', str_ireplace($pt, $en,'22 maio, 2018'));
  //  echo $data->format('Y-m-d');

      $posts_array = new WP_Query($args );
      foreach($posts_array->posts as $p){
         
        $aTemp = new stdClass();
            $thumb_id = (int)get_post_thumbnail_id($p->ID);
            $aTemp->post_id = $p->ID;        
            //$aTemp->author = $p->post_author;
            //$aTemp->post_content = $p->post_content;
            $aTemp->post_content = apply_filters('the_content', $p->post_content);
            $aTemp->post_excerpt = $p->post_excerpt;
            $aTemp->post_category = get_the_category( $p->ID );
            $aTemp->title = $p->post_title;

            $ano = substr($p->post_modified,0,4);
            $dia = substr($p->post_modified,8,2);
            $mes = intval(substr($p->post_modified,5,2)); 
            $aTemp->data = $dia." de ".$pt[$mes]." de ".$ano;
            $aTemp->link = get_permalink($p);
            //$aTemp->comment_count = $p->comment_count;	
            $aTemp->image = wp_get_attachment_image_src( $thumb_id, 'thumbnail');
            $aTemp->imageMedium = wp_get_attachment_image_src( $thumb_id, 'medium');

            $aTemp->photo = wp_get_attachment_image_src( $thumb_id, 'full');
            $oReturn->posts[] = $aTemp;
        
        
    
      }

      echo json_encode( $oReturn );

    die();
}
add_action( "wp_ajax_nopriv_getMembroEquipe", "getMembroEquipe");
add_action( "wp_ajax_getMembroEquipe","getMembroEquipe");

?>