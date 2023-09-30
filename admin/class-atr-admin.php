<?php
class ATR_Admin{
  private $theme_name;
  private $version;
  private $build_menupage;

  public function __construct($theme_name, $version)
  {
    $this->theme_name = $theme_name;
    $this->version = $version;
    $this->build_menupage = new ATR_Build_Menupage();
  }
  /**
   * estilos admin
   */
  public function enqueue_styles($hook){
     if($hook != 'toplevel_page_res_options_page' && $hook != 'opciones_page_res_submenu_options'){
        return;
     }
     wp_enqueue_style(
      $this->theme_name,
      ATR_DIR_URI . 'admin/css/admin.css',
      array(),
      $this->version,
      'all'
     );
  }
  /**
   * escript admin
   */
  public function enqueue_scripts($hook){
    if ($hook != 'toplevel_page_res_options_page' && $hook != 'opciones_page_res_submenu_options') {
      return;
    }
    wp_enqueue_script(
      $this->theme_name,
      ATR_DIR_URI . 'admin/js/admin.js',
      ['jquery'],
      $this->version,
      true
    );
  }

  public function add_menu(){
    $this->build_menupage->add_menu_page(
       __('Opciones', 'Resortera'),
       __('Opciones', 'Resortera'),
       'manage_options',
       'res_options_page',
       [$this, 'controlador_display_menu'],
       'dashicons-flag',
       15
    );
    $this->build_menupage->add_submenu_page(
      'res_options_page',
      __('Sub menú Opciones', 'Resortera'),
      __('Sub menú Opciones', 'Resortera'),
      'manage_options',
      'res_submenu_options',
      [$this, 'controlador_display_submenu']

    );
    $this->build_menupage->run();
  }
  public function controlador_display_menu(){
    require_once ATR_DIR_PATH . 'admin/partials/atr-opciones-display.php';
  }
  public function controlador_display_submenu()
  {
    require_once ATR_DIR_PATH . 'admin/partials/atr-subopciones-display.php';
  }
}