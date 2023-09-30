<?php

class ATR_Widgets extends WP_Widget{
  public function __construct(){
    $widget_options = [
      'classname'  => 'atr_widget',
      'description' => 'Widget plantilla'
    ];
    $control_options =[
      'height'  => 200,
      'width'   => 500
    ];
     parent::__construct('atr_widget', 'widget Personalizado', $widget_options, $control_options);
  }
    public function form($instance){
      //campos titulo
      $title_id    = $this->get_field_id('titulo');
      $titulo_name = $this->get_field_name('titulo');
      $titulo_val  = esc_attr($instance['titulo']);
    //campos body
      $cuerpo_id    = $this->get_field_id('cuerpo');
      $cuerpo_name = $this->get_field_name('cuerpo');
      $cuerpo_val  = esc_attr($instance['cuerpo']);

      $form = "
         <label for='$title_id'>Titulo</label>
         <input id='$title_id' name='$titulo_name' value='$titulo_val' type='text'>
         <label for='$cuerpo_id'>Cuerpo</label>
         <textarea name='$cuerpo_name' id='$cuerpo_id' cols='30' rows='10'>$cuerpo_val</textarea>
      ";
      echo $form;

    }
    public function update($new_instance, $old_instance)
    {
      return $new_instance;
    }
    public function widget($args, $instance){
      extract($args, EXTR_SKIP);
      $titulo = isset($instance['titulo']) ? $instance['titulo'] : 'Coloque un titulo';
      $cuerpo = isset($instance['cuerpo']) ? $instance['cuerpo'] : 'Escribe un texto';

      $output = "
      $before_widget
      $before_title $titulo $after_title
      <p>
      $cuerpo
      </p>
      $after_widget
      ";
      echo $output;

    }

}
