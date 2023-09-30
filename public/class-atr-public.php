<?php
class ATR_Public
{
  private $theme_name;
  private $version;

  public function __construct($theme_name, $version)
  {
    $this->theme_name = $theme_name;
    $this->version = $version;
  }

  public function enqueue_styles(){
  wp_enqueue_style(
    'normalize',
      ATR_DIR_URI . 'public/css/normalize.css',
    array(),
    $this->version,
    'all'
  );
    wp_enqueue_style(
      'animate',
      ATR_DIR_URI . 'public/css/animate.css',
      array(),
      $this->version,
      'all'
    );
  wp_enqueue_style(
    'public-css',
      ATR_DIR_URI . 'public/css/atr-public.css',
    array(),
    $this->version,
    'all'
  );

  wp_enqueue_style(
    'bootstrap-css',
      ATR_DIR_URI . 'helpers/bootstrap-5.3/css/bootstrap.min.css',
    array(),
    $this->version,
    'all'
  );

    //fontawesome
    wp_enqueue_style(
      'fontawesome',
      ATR_DIR_URI . 'helpers/font-awesome/css/fontawesome.min.css',
      [],
      $this->version,
      'all'
    );
    //fontawesome
    wp_enqueue_style(
      'brands',
      ATR_DIR_URI . 'helpers/font-awesome/css/brands.min.css',
      [],
      $this->version,
      'all'
    );

    wp_enqueue_style(
      'font-awesome2',
      ATR_DIR_URI . 'helpers/font-awesome/css/all.min.css',
      [],
      $this->version,
      'all'
    );
    wp_enqueue_style(
      'css',
      ATR_DIR_URI . 'public/css/custom.css',
      [],
      $this->version,
      'all'
    );

}


public function enqueue_scripts(){
 wp_enqueue_script(
      'jquery-min',
      ATR_DIR_URI . 'helpers/jquery/jquery-3.4.1.min.js',
      ['jquery'],
      $this->version,
      false
    );

  wp_enqueue_script(
    'bootstrap-min',
      ATR_DIR_URI . 'helpers/bootstrap-5.3/js/bootstrap.bundle.min.js',
    ['jquery'],
    $this->version,
    true
  );
    wp_enqueue_script(
      'isotope-js',
      ATR_DIR_URI . 'helpers/isotope/isotope.pkgd.min.js',
      ['jquery'],
      $this->version,
      true
    );
    wp_enqueue_script(
      'public-js',
      ATR_DIR_URI . 'public/js/atr-public.js',
      ['jquery', 'bootstrap-min'],
      $this->version,
      true
    );
    wp_enqueue_script(
      'brands-js',
      ATR_DIR_URI . 'helpers/font-awesome/js/brands.min.js',
      [],
      $this->version,
      true
    );
    wp_enqueue_script(
      'fontawesome',
      ATR_DIR_URI . 'helpers/font-awesome/js/fontawesome.min.js',
      [],
      $this->version,
      true
    );


}

/**
 * register menú
 */
public function atr_theme_support(){

  //registrar menu
  register_nav_menus([
      'menu_principal' => __('Menú Principal', 'Resortera'),
      'menu-redes-sociales' => __('Menú Redes Sociales', 'Resortera')
    ]);

    //custom-logo
    $logo = [
      'width' => 100,
      'height' => 100,
      'flex-heigth' => true,
      'flex-width'  => true,
      'header-text' => array('Resortera', 'Desarrollo web')
    ];
    add_theme_support('custom-logo', $logo);
    //imagen destacada
    add_theme_support('post-thumbnails');

    //widgets
    add_theme_support('widgets');
    //remove_theme_support('widgets-block-editor');

  }
  public function atr_register_sidebar(){
    /**
     * sidebar
     */
    register_sidebar(array(
       'name'          => __('sidebar', 'Resortera'),
       'id'            => 'sidebar',
       'description'   => __('Sidebar', 'Resortera'),
       'before_widget' => '<div class"%1$s" id="widget-generico">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3 class"widget-generico">',
       'after_title'   => '</h3>'
    ));
  }

}
