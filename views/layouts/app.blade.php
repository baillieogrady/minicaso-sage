<!doctype html>
<html {!! get_language_attributes() !!} {{  is_front_page() === true ? 'class="x-hidden"' : ''}}>
  @include('partials.head')
  <body @php body_class() @endphp {{  is_front_page() === true ? 'style=overflow-x:hidden;' : ''}}>
  <div class="wrapper {{ is_shop() || is_product_category() === true ? 'bg-grey' : '' }}">
    @if(!is_front_page())
    @if(get_field('banner', 'options'))
      <div class="banner">
        <svg class="banner__cross" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g transform="translate(-58.146 -173.146)"><line x1="20" y2="20" transform="translate(58.5 173.5)" fill="none" stroke="#fff" stroke-width="1"/><line x1="20" y1="20" transform="translate(58.5 173.5)" fill="none" stroke="#fff" stroke-width="1"/></g></svg>
        {{ the_field('text', 'options') }}
      </div>
    @endif
    @endif
    @php do_action('get_header') @endphp
    @include('partials.header')
    <main class="main">
      @yield('content')
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    </div>
  </body>
</html>