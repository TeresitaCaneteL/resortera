<!-- About Section -->
<section class="section" id="about">
  <div class="container">
    <?php
    $titulo_about = get_post_meta(get_the_ID(), 'titulo_nosotros', false);
    $subtitulo_about = get_post_meta(get_the_ID(), 'subtitulo_nosotros', false);
    $descripcion_about = get_post_meta(get_the_ID(), 'descripcion_sobre_nosotros', false);
    $image_id_nosotros = get_post_meta(get_the_ID(), 'image_nosotros_1', true);


    ?>
    <div class="row justify-content-between">
      <div class="col-md-6 pr-md-5 mb-4 mb-md-0">

        <?php
        if (isset($titulo_about[0])) {
          echo '<h2 class="section-title mb-0">' . esc_html($titulo_about[0]) . '</h2>';
        }
        if (isset($subtitulo_about[0])) {
          echo '<h3 class="section-subtitle mb-4">' . esc_html($subtitulo_about[0]) . '</h3>';
        }
        if (isset($descripcion_about[0])) {
          echo '<p>' . esc_html($descripcion_about[0]) . '</p>';
        }
        $image_id = get_post_meta(get_the_ID(), 'image_nosotros_1_id', true);

        if ($image_id) {
          $image = wp_get_attachment_image(
            $image_id,
            array('400', '600'),
            false,
            array('class' => 'w-100 mt-3 shadow-sm')
          );
          if ($image) {
            echo $image;
          }
        }

        ?>
      </div>

      <div class="col-md-6 pl-md-5">
        <div class="row">
          <div class="col-6">

            <?php
            $image_id = get_post_meta(get_the_ID(), 'image_nosotros_bloque2_1_id', true);

            if ($image_id) {
              $image = wp_get_attachment_image(
                $image_id,
                array('250', '250'),
                false,
                array('class' => 'w-100 shadow-sm')
              );
              if ($image) {
                echo $image;
              }
            }
            ?>
          </div>
          <div class="col-6">
            <?php

            $image_id = get_post_meta(get_the_ID(), 'image_nosotros_bloque2_2_id', true);

            if ($image_id) {
              $image = wp_get_attachment_image(
                $image_id,
                array('250', '250'),
                false,
                array('class' => 'w-100 shadow-sm')
              );
              if ($image) {
                echo $image;
              }
            }

            ?>
          </div>
          <div class="col-12 mt-4">
            <?php echo wpautop(get_post_meta(get_the_ID(), 'texto_bloque_derecha', true)); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End OF About Section -->