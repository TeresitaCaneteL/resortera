// smooth scroll

$(document).ready(function () {
  'use strict';
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);
    if ($target.length && $target.offset()) {
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 450, 'linear');
    }

  });
  // Sticky Header
  // Función para verificar la posición de desplazamiento y añadir o quitar la clase
  function checkScrollPosition() {
    if ($(window).scrollTop() >= 150) {
      $('.is-sticky-on').addClass('is-sticky-menu');
    } else {
      $('.is-sticky-on').removeClass('is-sticky-menu');
    }
  }

  // Ejecuta la función al cargar la página
  checkScrollPosition();

  // Y también ejecuta la función cuando se desplace la ventana
  $(window).on('scroll', checkScrollPosition);



});



// protfolio filters
$(window).on("load", function () {
  var t = $(".portfolio-container");
  t.isotope({
    filter: ".new",
    animationOptions: {
      duration: 750,
      easing: "linear",
      queue: !1
    }
  }), $(".filters a").click(function () {
    $(".filters .active").removeClass("active"), $(this).addClass("active");
    var i = $(this).attr("data-filter");
    return t.isotope({
      filter: i,
      animationOptions: {
        duration: 750,
        easing: "linear",
        queue: !1
      }
    }), !1
  })
});



