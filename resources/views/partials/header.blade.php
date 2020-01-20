<header class="header {{ is_front_page() === true ? '' : 'header--sticky' }}" {{ is_front_page() === true ? 'data-aos=fade-down data-aos-delay=1500' : '' }}>
  <div class="container">
    <div class="header__container">
      <a class="header__logo {{ is_front_page() === true ? '' : 'header__logo--alt' }}" href="{{ home_url('/') }}" aria-label="Got to minicaso's homepage">
        <span>MINI</span>CASO
      </a>
      <nav class="header__nav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => false]) !!}
        @endif
        <a class="header__cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
          <svg version="1.1" class="svg cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve"><g><path d="M0,6v21h24V6H0z M22,25H2V8h20V25z"></path></g><g><path d="M12,2c3,0,3,2.3,3,4h2c0-2.8-1-6-5-6S7,3.2,7,6h2C9,4.3,9,2,12,2z"></path></g></svg>
          <span class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </a>
      </nav>
    </div>
  </div>
</header>
