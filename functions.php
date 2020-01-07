<?php 



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
'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
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


?>
