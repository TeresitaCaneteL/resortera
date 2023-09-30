<?php

/**
 * entradas
 */

get_header(); ?>



<div class="container py-5">
  <div class="row mt-4">
    <div class="col-sm-12 col-md-8 col-lg-7">
      <h2><?php the_title(); ?></h2>

      <?php
      // Obtener el valor del campo personalizado
      $titulo_proyecto = get_post_meta(get_the_ID(), 'titulo_portafolio', true);

      // Verificar si hay un valor y mostrarlo
      if (!empty($titulo_proyecto)) {
        echo '<h6>' . esc_html($titulo_proyecto) . '</h6>';
      }
      if (has_post_thumbnail()) {
        the_post_thumbnail('large', ['class' => 'img-fluid']);
      }
      ?>

      <?php the_content(); ?>
    </div>
    <!--sidebar-->
    <div class="col-sm-12 col-md-4 col-lg-5">
      <!-- <?php get_sidebar('sidebar'); ?>-->

    </div>
  </div>
</div>



<?php get_footer(); ?>