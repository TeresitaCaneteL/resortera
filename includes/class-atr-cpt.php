<?php
/***
 * Archivo custom post type
 */

 class ATR_CPT{

    public function atr_cpt_item_portafolio(){
      //etiquetas post type
      $labels = array(
         'name'           => _x('proyectos', 'Post Type General Name', 'Resortera'),
         'singular_name'  => _x('proyecto', 'Post Type Singular Name', 'Resortera'),
         'menu_name'      => __('proyectos', 'Resortera'),
         'parent_item_colon' => __('Menú Padre', 'Resortera' ),
         'all_items'      => __('Todos los proyectos', 'Resortera'),
         'view_item'      => __('Ver Menú', 'Resortera'),
         'add_new_item'   => __('Agregar nuevo proyecto', 'Resortera'),
         'add_new'        => __('Agregar nuevo proyecto', 'Resortera'),
         'edit_item'      => __('Editar Proyecto', 'Resortera'),
         'update_item'    => __('Actualizar', 'Resortera'),
         'search_items'    => __('Buscar proyecto', 'Resortera'),
         'not_found'      => __('Proyecto no encontrado', 'Resortera'),
         'not_found_in_trash' => __('No encontrado en la papelera')
      );

      $args = array(
        'label'        => __('Proyectos','Resortera' ),
        'description'  => __('Subir proyectos', 'Resortera'),
        'labels'       => $labels,
        'supports'     => array('title','editor','excerpt', 'author', 'thumbnail', 'comments', 'revisions','custom-fields'),
        'hierarchical' => false,
        'public'       => true,
        'show_url'      => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position'     => 3,
        'menu_icon'         => 'dashicons-portfolio',
        'can_export'        => true,
        'has_archive'       =>true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => true,
        'rest_base'           =>'proyectos-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',

      );

      //Para registrar el custom post type
      register_post_type('proyectos', $args);
      flush_rewrite_rules();
    }
    public function atr_cpt_taxonomias_tipo(){

      $labels = array(
      'name'           => _x('Tipo de Proyecto', 'taxonomy general name', 'Resortera'),
      'singular_name'  => _x('Tipo de Proyecto', 'Post Type Singular Name', 'Resortera'),
      'search_items'   => __('Buscar tipo de proyecto', 'Resortera'),
      'all_items'      => __('Todos los tipos de proyectos', 'Resortera'),
      'parent_item'    => __('Tipo de proyecto Padre: ', 'Resortera'),
      'parent_item_colon' => __('Tipo de proyecto Padre:', 'Resortera'),
      'edit_item'      => __('Editar tipo de Proyecto', 'Resortera'),
      'update_item'    => __('Actualizar tipo de proyecto', 'Resortera'),
      'add_new_item'   => __('Agregar tipo proyecto', 'Resortera'),
      'new_item_name'  => __('Nuevo tipo de proyecto', 'Resortera'),
      'menu_name'      => __('Tipo de Proyecto','Resortera')
      );
      $args = array(
       'hierarchical'     =>false,
       'labels'           =>$labels,
       'show_ui'          => true,
       'show_admin_column'=> true,
       'query_var'        => true,
       'rewrite'          => array('slug' => 'tipo-proyecto'),
       'show_in_rest'        => true,
       'rest_base'           => 'tipo-proyecto-api',
       'rest_controller_class' => 'WP_REST_Posts_Controller',
      );
      register_taxonomy('tipo-proyecto', 'proyectos', $args);
      flush_rewrite_rules();

    }

  public function atr_cpt_servicios()
  {
    $labels = array(
      'name' => _x('servicios', 'Post Type General Name', 'Resortera'),
      'singular_name'  => _x('Servicio', 'Post Type Singular Name', 'Resortera'),
      // ... Otras etiquetas aquí ...
    );

    $args = array(
      'label'        => __('Servicios', 'Resortera'),
      'description'  => __('Subir servicio', 'Resortera'),
      'labels'       => $labels,
      'supports'     => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
      'hierarchical' => false,
      'public'       => true,
      'show_url'      => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
      'menu_position'     => 3,
      'menu_icon'         => 'dashicons-archive',
      'can_export'        => true,
      'has_archive'       => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
      'show_in_rest'        => true,
      // Resto de las configuraciones aquí ...
    );

    register_post_type('servicios', $args);
    flush_rewrite_rules();
  }

 }