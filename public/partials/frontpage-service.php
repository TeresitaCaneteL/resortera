<!-- Service Section -->

<?php
$args  = array(
  'post_type'     => 'servicios',
  'posts_per_page' => 6,
  'orderby'       => 'rand',
  'post_status'   => 'publish',
  'paged'         => $paged
);
$servicios  = new WP_Query($args);
?>


<?php while ($servicios->have_posts()) : $servicios->the_post();
  $permalink = get_permalink();
  $imagen_url = get_the_post_thumbnail_url($post->ID, 'full');
?>


  <div class="section" id="service">
    <?php
    $titulo = get_post_meta(get_the_ID(), 'titulo_servicios', false);
    $subtitulo = get_post_meta(get_the_ID(), 'subtitulo_servicios', false);
    ?>
    <div class="container">
      <h6 class="section-title text-center"><?php echo $titulo[0]; ?></h6>
      <h6 class="section-subtitle text-center mb-5 pb-3"><?php echo $subtitulo[0]; ?></h6>

      <div class="row d-flex justify-content-center">
        <div class="flip-card-container col-lg-4 col-sm-12" style="--hue: 220">
          <div class="flip-card">
            <div class="card-front">
              <figure>
                <div class="img-bg"></div>
                <img src=" <?php echo esc_url($imagen_url); ?>" alt="Brohm Lake">
                <figcaption>Brohm Lake</figcaption>
              </figure>

              <ul>
                <li></li>
                <li>Detail 2</li>
                <li>Detail 3</li>
                <li>Detail 4</li>
                <li>Detail 5</li>
              </ul>
            </div>

            <div class="card-back">
              <figure>
                <div class="img-bg"></div>
                <img src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Brohm Lake">
              </figure>

              <a href="<?php echo esc_url($permalink); ?>" class="boton-ver-mas">Ver más</a>

              <div class="design-container">
                <span class="design design--1"></span>
                <span class="design design--2"></span>
                <span class="design design--3"></span>
                <span class="design design--4"></span>
                <span class="design design--5"></span>
                <span class="design design--6"></span>
                <span class="design design--7"></span>
                <span class="design design--8"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endwhile;
wp_reset_postdata(); ?>

<!-- End OF Service Section -->