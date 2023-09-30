<!-- Portfolio Section -->
<?php
$args  = array(
  'post_type'     => 'proyectos',
  'posts_per_page' => 6,
  'orderby'       => 'rand',
  'post_status'   => 'publish',
  'paged'         => $paged
);
$proyectos  = new WP_Query($args);
?>

<section id="portfolio" class="section portfolio-section">
  <div class="container">
    <h6 class="section-title text-center"> Nuestro Proyectos</h6>
    <h6 class="section-subtitle mb-5 text-center"> Proyectos</h6>
    <div class="filters">
      <a href="#" data-filter="*" class="active">Todos</a> <!-- Mostrar todos -->
      <?php
      // Obtener las categorías de la taxonomía 'tipo-proyecto'
      $categories = get_terms(array(
        'taxonomy'   => 'tipo-proyecto',
        'hide_empty' => true,
      ));

      // Mostrar cada categoría como un enlace
      foreach ($categories as $category) {
        echo '<a href="#" data-filter=".' . $category->slug . '">' . $category->name . '</a>';
      }
      ?>
    </div>
    <div class="portfolio-container">
      <?php while ($proyectos->have_posts()) : $proyectos->the_post(); ?>
        <?php
        $categorias_proyecto = get_the_terms($post->ID, 'tipo-proyecto');
        $imagen_url = get_the_post_thumbnail_url($post->ID, 'full');
        $titulo_portafolio = get_post_meta(get_the_ID(), 'titulo_portafolio', true);
        $subtitulo_portafolio = get_post_meta(get_the_ID(), 'titulo_portafolio', true);
        $permalink = get_permalink();
        ?>

        <div class="col-md-6 col-lg-4
        <?php
        if ($categorias_proyecto && !is_wp_error($categorias_proyecto)) {
          $categorias_clases = array_map(function ($term) {
            return $term->slug;
          }, $categorias_proyecto);
          echo implode(' ', $categorias_clases);
        }
        ?> new">
          <div class="portfolio-item">
            <img src="<?php echo esc_url($imagen_url); ?>" class="img-fluid" alt="Dtest">
            <div class="content-holder">
              <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
              <div class="text-holder">
                <h6 class="title"><a href="<?php echo esc_url($permalink); ?>"><?php the_title(); ?></a></h6>
                <h6 class="title"><?php echo $titulo_portafolio ?></h6>
                <p class="subtitle"><?php echo $subtitulo_portafolio ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<!-- End of portfolio section -->