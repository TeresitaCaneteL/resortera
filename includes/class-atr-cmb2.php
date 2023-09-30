<?php
/**
 * init libreria cmb2
 */

 require_once ATR_DIR_PATH . '/helpers/CMB2-develop/init.php';

 class ATR_CMB2{
  ///metodo para definir metas
  public function atr_cmb2_metaboxes(){
    $id_home = get_option('page_on_front');
    $cmb_image_header = new_cmb2_box(array(
          'id'      => 'pagina_inicio',
          'title'   => __('Header', 'cmb2'),
          'object_types' => array('page',),
          'show_on'  => array('key'=> 'id', 'value' => array($id_home)),
          'context'    => 'normal',
          'priority'   =>'high',
          'show_names' => true,
    ));
    $cmb_image_header->add_field(array(
      'name' => __('Titulo Banner Principal', 'cmb2'),
      'desc' => __('Agregar titulo banner', 'cmb2'),
      'id'   => 'titulo_header',
      'type' => 'text',
      'show_on_cb' => 'cmb2_hide_if_no_cats'
    ));
    $cmb_image_header->add_field(array(
      'name' => esc_html__('Imagen Banner', 'cmb2'),
      'desc' => esc_html__('Agregar imagen banner', 'cmb2'),
      'id'   => 'imagen_header',
      'type' => 'file',
      'options' =>array(
         'url'  => false,
      ),
      'text'    => array(
        'add_upload_file_text' => 'Añadir imagen'
      ),
      'query_args'  => array(
        'type'      =>array(
          'image/gif',
          'image/jpeg',
          'image/png',
        ),
      ),

    ));

    ///imagen fondo banner
    $cmb_image_header->add_field(array(
      'name' => esc_html__('Imagen fondo Banner', 'cmb2'),
      'desc' => esc_html__('Agregar imagen de fondo banner', 'cmb2'),
      'id'   => 'imagen_fondo_header',
      'type' => 'file',
      'options' => array(
        'url'  => false,
      ),
      'text'    => array(
        'add_upload_file_text' => 'Añadir imagen'
      ),
      'query_args'  => array(
        'type'      => array(
          'image/gif',
          'image/jpeg',
          'image/png',
        ),
      ),

    ));


  }



  ///section about
  public function atr_section_about(){
    $id_home = get_option('page_on_front');

    // Primero debes crear el objeto $cmb_servicios
    $cmb_about = new_cmb2_box(array(
      'id'            => 'section_about',
      'title'         => esc_html__('Sobre Nosotros', 'cmb2'),
      'object_types'  => array('page',),
      'show_on'       => array('key' => 'id', 'value' => array($id_home)),
      'context'       => 'normal',
      'priority'      => 'default',
      'show_names'    => true,
    ));

    $cmb_about->add_field(array(
      'name'        => __('Titulo Sección sobre nosotros', 'cmb2'),
      'desc'        => __('Agregar titulo para nosotros', 'cmb2'),
      'id'          => 'titulo_nosotros',
      'type'        => 'text',
      'show_on_cb'  => 'cmb2_hide_if_no_cats'
    ));
    $cmb_about->add_field(array(
      'name'        => __('Subtitulo Sección sobre nosotros', 'cmb2'),
      'desc'        => __('Agregar subtitulo para nosotros', 'cmb2'),
      'id'          => 'subtitulo_nosotros',
      'type'        => 'text',
      'show_on_cb'  => 'cmb2_hide_if_no_cats'
    ));
    $cmb_about->add_field(array(
      'name' => 'Agregar texto sobre nosotros',
      'desc' => 'Agregar breve descripcion sobre la empresa',
      'default' => 'standard value (optional)',
      'id' => 'descripcion_sobre_nosotros',
      'type' => 'textarea_small'
    ));
/// imagen bloque izquierda 1
    $cmb_about->add_field(array(
      'name' => esc_html__('Imagen Nosotros', 'cmb2'),
      'desc' => esc_html__('Agregar imagen nosotros', 'cmb2'),
      'id'   => 'image_nosotros_1',
      'type' => 'file',
      'options' => array(
        'url'  => false,
      ),
      'text'    => array(
        'add_upload_file_text' => 'Añadir imagen'
      ),
      'query_args'  => array(
        'type'      => array(
          'image/gif',
          'image/jpeg',
          'image/png',
        ),
      ),
    ));
/// imagen bloque derecha 1
    $cmb_about->add_field(array(
      'name' => esc_html__('Imagen 1 Nosotros bloque derecha ', 'cmb2'),
      'desc' => esc_html__('Agregar imagen 1 bloque derecha', 'cmb2'),
      'id'   => 'image_nosotros_bloque2_1',
      'type' => 'file',
      'options' => array(
        'url'  => false,
      ),
      'text'    => array(
        'add_upload_file_text' => 'Añadir imagen'
      ),
      'query_args'  => array(
        'type'      => array(
          'image/gif',
          'image/jpeg',
          'image/png',
        ),
      ),
    ));
/// imagen bloque derecha 2
    $cmb_about->add_field(array(
      'name' => esc_html__('Imagen 2 Nosotros bloque derecha', 'cmb2'),
      'desc' => esc_html__('Agregar imagen 2 bloque derecha', 'cmb2'),
      'id'   => 'image_nosotros_bloque2_2',
      'type' => 'file',
      'options' => array(
        'url'  => false,
      ),
      'text'    => array(
        'add_upload_file_text' => 'Añadir imagen'
      ),
      'query_args'  => array(
        'type'      => array(
          'image/gif',
          'image/jpeg',
          'image/png',
        ),
      ),
    ));

    $cmb_about->add_field(array(
      'name'    => 'Textos bloque derecha',
      'desc'    => 'agregar textos para bloque derecha',
      'id'      => 'texto_bloque_derecha',
      'type'    => 'wysiwyg',
      'options' => array(),
    ));
  }



function cmb2_campos_galeria() {
    $prefix = 'galeria_';


    $cmb_proyectos = new_cmb2_box(array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__('Campos de Galería', 'Resortera'),
        'object_types'  => array('proyectos'), // CPT
    ));
    $cmb_proyectos->add_field(array(
      'name'        => __('Titulo Sección portafolio', 'cmb2'),
      'desc'        => __('Agregar titulo portafolio', 'cmb2'),
      'id'          => 'titulo_portafolio',
      'type'        => 'text',
      'show_on_cb'  => 'cmb2_hide_if_no_cats'
    ));
    $cmb_proyectos->add_field(array(
      'name'        => __('Subtitulo Sección portafolio', 'cmb2'),
      'desc'        => __('Agregar titulo portafolio', 'cmb2'),
      'id'          => 'subtitulo_portafolio',
      'type'        => 'text',
      'show_on_cb'  => 'cmb2_hide_if_no_cats'
    ));
    $cmb_proyectos->add_field(array(
        'name'    => esc_html__('Imagen Adicional', 'textdomain'),
        'desc'    => esc_html__('Sube una imagen o ingresa una URL.', 'Resortera'),
        'id'      => $prefix . 'image',
        'type'    => 'file',
        'options' => array(
            'url' => false,
        ),
    ));
}
  function cmb2_campos_template_servicios()
  {
    // Primero debes crear el objeto $cmb_servicios
    $prefix = 'servicios_';


    $cmb_servicios = new_cmb2_box(array(
      'id'            => $prefix . 'metabox',
      'title'         => esc_html__('Campos de servicios', 'Resortera'),
      'object_types'  => array('servicios'), // CPT
    ));
    $cmb_servicios->add_field(array(
      'name'        => __('Titulo Sección servicios', 'cmb2'),
      'desc'        => __('Agregar titulo servicios', 'cmb2'),
      'id'          => 'titulo_servicios',
      'type'        => 'text',
      'show_on_cb'  => 'cmb2_hide_if_no_cats'
    ));
    $cmb_servicios->add_field(array(
      'name'        => __('Subtitulo Sección servicios','cmb2'),
      'desc'        => __('Agregar subtitulo para servicios', 'cmb2'),
      'id'          => 'subtitulo_servicios',
      'type'        => 'text',
      'show_on_cb'  => 'cmb2_hide_if_no_cats'
    ));
    $cmb_servicios->add_field(array(
      'name'    => esc_html__('Imagen Adicional', 'Resortera'),
      'desc'    => esc_html__('Sube una imagen o ingresa una URL.', 'Resortera'),
      'id'      => $prefix . 'image',
      'type'    => 'file',
      'options' => array(
        'url' => false,
      ),
    ));


  }

 }