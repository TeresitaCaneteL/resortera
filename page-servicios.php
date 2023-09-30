<?php
/*
Template Name: single servicios
*/
get_header();  // Obtén el encabezado

// Contenido de la plantilla
while (have_posts()) : the_post();
  $titulo = get_post_meta(get_the_ID(), 'titulo_servicios', false);
?>
  <main>
    <div class="container pt-5">
      <h6 class="section-title text-center"><?php echo $titulo[0]; ?></h6>
    </div>

  </main>

<?php endwhile;

get_footer();  // Obtén el pie de página
