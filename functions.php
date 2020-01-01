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
        'has_archive'    => true,
        'menu_icon'      => 'dashicons-groups',
        'supports'        => array('title','editor','thumbnail','page-attributes'),
        )
        );

}
add_action('init',meus_posts_types);


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
?>