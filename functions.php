  <?php
  function raielax_styles() {
      wp_enqueue_style( 'raielax-style', get_stylesheet_uri() );
  }
  add_action( 'wp_enqueue_scripts', 'raielax_styles' );