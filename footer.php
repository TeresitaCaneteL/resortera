<?php wp_footer(); ?>
<!-- Contact Section -->

<section id="contact" class="section pb-0">
  <div id="contactofondo">
    <div class="container">

      <!-- Título -->
      <div class="default-heading text-left text-lg-center">
        <h2>Contacto</h2>
      </div>
      <div class="row  text-center py-3">
        <div class="col-md-4 col-sm-4">
          <!-- Información de contacto -->
          <div class="contact-item">
          <i class="fa-solid fa-location-dot fa-beat fa-2xl" style="margin-right: 10px;"></i>
            <span class="contact-details">#30/67, 5th Street, Mega Market Circle</span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="contact-item">
          <i class="fa-solid fa-envelope fa-beat fa-2xl" style="margin-right: 10px;"></i>
            <span class="contact-details">music.site@melodi.com</span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="contact-item">
          <i class="fa-solid fa-phone fa-beat fa-2xl" style="margin-right: 10px;"></i>
            <span class="contact-details">555 555 5555</span>
          </div>
        </div>
      </div>

      <!-- Formulario de contacto -->
      <div class="form-content">
        <p class="text-white">¿Tienes alguna idea en mente? Envíanos un mensaje.</p>
        <form id="form" action="https://formspree.io/f/mqkvywkd" method="POST" class="form">
          <div class="row">
            <div class="col-md-6 col-sm-6">

              <div class="form-group">

                <input type="text" class="form-control" id="name" name="name" required placeholder="Ingresa tu nombre">
              </div>
              <br>
              <div class="form-group">

                <input type="email" class="form-control" id="email" name="email" required placeholder="Ingresa tu correo electrónico">
              </div>
              <br>
              <div class="form-group">

                <input type="number" class="form-control" id="phone" name="phone" required placeholder="Ingrese su telefono">
              </div>
            </div>
            <br>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">

                <textarea class="form-control" id="message" name="message" rows="9" required placeholder="Ingresa tu mensaje"></textarea>
              </div>
            </div>
          </div>
          <div class="text-center" align='center'>
            <button type="submit" class="btn btn-lg btn-theme Btn">Enviar mensaje</button>
          </div>
        </form>
      </div>
    </div>

  </div>
  <!-- Page Footer -->
  <hr style="border: none; border-top: 1px white; width: 100%;">

  <footer id="footer">
    <div class="socialx" style="text-align: center; padding-top: 1%;">
      <!-- social media links -->
      <!-- <ul class="social">
        <li><a class="h-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="h-tiktok" href="#"><i class="fab fa-tiktok"></i></a></li>
        <li><a class="h-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li> <a class="h-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
      </ul>-->
      <?php
      $args = [
        'theme_location'  => 'menu-redes-sociales',
        'menu_class'      => 'social'

      ];
      wp_nav_menu($args);
      ?>
      <!-- copy right -->
      <p class="copy-right text-white">&copy; copyright <?php echo date('Y'); ?>,Creado por Resortera.cl.</p>
    </div>
  </footer>
  <!-- footer end -->

  <!-- Scroll to top -->
  <span class="totop" id="scrollToTop"><a href="#"><i class="fa-solid fa-circle-up fa-shake fa-2xl"></i></a></span>

  <!-- End of Page Footer -->


</section>

<script>
  const $form = document.querySelector('#form')

  $form.addEventListener('submit', handleSubmit)

  async function handleSubmit(event) {
    event.preventDefault();
    const form = new FormData(this);

    // Realiza la solicitud fetch
    const response = await fetch(this.action, {
      method: this.method,
      body: form,
      headers: {
        'Accept': 'application/json'
      }
    });

    // Verifica si la respuesta fue exitosa
    if (response.ok) {
      this.reset();
      alert('Se ha enviado el mensaje exitosamente.');
    } else {
      alert('Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.');
    }
  }


  // Obtén una referencia al botón "Volver arriba"
  const scrollToTopButton = document.getElementById('scrollToTop');

  // Muestra u oculta el botón "Volver arriba" según la posición de desplazamiento
  window.addEventListener('scroll', () => {
    if (document.documentElement.scrollTop > 100) {
      scrollToTopButton.classList.add('show');
    } else {
      scrollToTopButton.classList.remove('show');
    }
  });

  // Agrega un evento de clic al botón para desplazarse suavemente al inicio de la página
  scrollToTopButton.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
</script>


</body>

</html>