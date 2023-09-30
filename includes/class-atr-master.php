<?php
class ATR_Master{
  protected $cargador;
  protected $atr_admin;
  protected $atr_public;
  protected $theme_name;
  protected $version;
  protected $atr_cmb2;
  protected $atr_cpt;

  public function __construct()
  {
    $this->theme_name = 'ATR_Resortera';
    $this->version = '1.0.0';

    $this->cargar_dependencias();
    $this->cargar_instancias();
    $this->set_idiomas();
    $this->definir_admin_hooks();
    $this->definir_public_hooks();

  }


  private function cargar_dependencias(){
    /**
     * iterar acciones y filtros
     */
    require_once ATR_DIR_PATH . 'includes/class-atr-cargador.php';

    /**
     * funcionalidad internacionalizacion
     */
    require_once ATR_DIR_PATH . 'includes/class-atr-i18n.php';

    /**
     * registra menus y submenus
     */
    require_once ATR_DIR_PATH . 'includes/class-atr-build-menupage.php';

    /**
     * acciones del area de administración
     */
    require_once ATR_DIR_PATH . 'admin/class-atr-admin.php';



    /**
     * area publica
     */
    require_once ATR_DIR_PATH . 'public/class-atr-public.php';

    /**
     * cargar widgets
     */
    require_once ATR_DIR_PATH . 'includes/class-atr-widgets.php';
    /**
     * cargar cmb2
     */
    require_once ATR_DIR_PATH . 'includes/class-atr-cmb2.php';
    /**
     * clase para los custom post type
     */
    require_once ATR_DIR_PATH . 'includes/class-atr-cpt.php';

  }

  private function set_idiomas(){
    $atr_i18n = new ATR_i18n();
    $this->cargador->add_action('after_setup_theme', $atr_i18n, 'load_theme_textdomain');
  }

  public function registro_widgets(){
    register_widget('ATR_Widgets');
  }
  private function cargar_instancias()
  {
    /**
     * instancias del cargador para registrar los ganchos con wp
     */
    $this->cargador    = new ATR_Cargador;
    $this->atr_admin   = new ATR_Admin($this->get_theme_name(), $this->get_version());
    $this->atr_public  = new ATR_Public($this->get_theme_name(), $this->get_version());
    $this->atr_cmb2    = new ATR_CMB2;
    $this->atr_cpt    = new ATR_CPT();
  }
  private function definir_admin_hooks(){
    //archivos css y js
    $this->cargador->add_action('admin_enqueue_scripts', $this->atr_admin, 'enqueue_styles');
    $this->cargador->add_action('admin_enqueue_scripts', $this->atr_admin, 'enqueue_scripts');
    $this->cargador->add_action('admin_menu', $this->atr_admin, 'add_menu');
    //hook widgets
    $this->cargador->add_action('widgets_init', $this, 'registro_widgets');
    //hook cmb2
    $this->cargador->add_action('cmb2_admin_init', $this->atr_cmb2, 'atr_cmb2_metaboxes');
    $this->cargador->add_action('cmb2_admin_init', $this->atr_cmb2, 'cmb2_campos_template_servicios');
    $this->cargador->add_action('cmb2_admin_init', $this->atr_cmb2, 'atr_section_about');
    $this->cargador->add_action('cmb2_admin_init', $this->atr_cmb2, 'cmb2_campos_galeria');


  }
  private function definir_public_hooks()
  {
    $this->cargador->add_action('wp_enqueue_scripts', $this->atr_public, 'enqueue_styles');
    $this->cargador->add_action('wp_enqueue_scripts', $this->atr_public, 'enqueue_scripts');
    //menu
    $this->cargador->add_action('init', $this->atr_public, 'atr_theme_support');
    /**
     * Registro sidebar
     */
    $this->cargador->add_action('init', $this->atr_public, 'atr_register_sidebar');
    /**
     * Registro post type
     */
    $this->cargador->add_action('init', $this->atr_cpt, 'atr_cpt_item_portafolio');
    $this->cargador->add_action('init', $this->atr_cpt, 'atr_cpt_servicios');
    $this->cargador->add_action('init', $this->atr_cpt, 'atr_cpt_taxonomias_tipo');
  }

  public function get_theme_name(){
    return $this->theme_name;
  }
  public function get_version()
  {
    return $this->version;
  }

  public function get_cargador(){
    return $this->cargador;
  }
  public function run()
  {
    $this->cargador->run();
  }


}