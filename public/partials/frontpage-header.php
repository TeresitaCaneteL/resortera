<!-- Page Header -->

<?php
$background_image_url = get_post_meta(get_the_ID(), 'imagen_fondo_header', true); ?>
<header class="header" style="background-image: url('<?php echo esc_url($background_image_url); ?>');">
  <div id="large-header" class="large-header">
    <div class="overlay">

      <canvas id="demo-canvas"></canvas>
      <?php
      $image_id = get_post_meta(get_the_ID(), 'imagen_header_id', true);

      if ($image_id) {
        $image = wp_get_attachment_image(
          $image_id,
          array('400', '600'),
          false,
          array('class' => 'img-fluid imglog')
        );

        if ($image) {
          echo $image;
        }
      }
      ?>
    </div>

    <div class="shape">
      <svg viewBox="0 0 1500 200">
        <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z" />
      </svg>
    </div>
    <div class="mouse-icon">
      <div class="wheel"></div>
    </div>
  </div>
</header>
<!-- End Of Page Header -->