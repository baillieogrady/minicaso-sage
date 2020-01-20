<section class="slider">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-4" data-aos="fade-right">
        <div>
          {!! $block['heading'] !!}
        </div>
        @if($block['link'])
          @include('partials.page-builder.partials.link')
        @endif
        <div class="slider__nav"></div>
      </div>
      <div class="col-lg-7">
        @php
          $posts = $block['slides'];
        @endphp
        @if( $posts ) 
          <div class="slider__slides" data-aos="fade-left" data-aos-delay="250">
            @foreach( $posts as $p )
              <article class="slider__slide">
                <a class="slider__background lazy bg" href="{{ get_permalink( $p->ID ) }}" data-bg="url({{ get_the_post_thumbnail_url($p->ID) }})" aria-label="View {{ the_title() }}"></a>
              <a class="tdn btn btn--100" href="{{ get_permalink( $p->ID ) }}" aria-label="View {{ the_title() }}">VIEW</a>
              </article>
            @endforeach
          </div>
        @endif
      </div>
    </div>
  </div>
</section>